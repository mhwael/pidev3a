<?php

namespace App\Controller;

use App\Entity\Service;
use App\Repository\ServiceRepository;
use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/services')]
class ServicesController extends AbstractController
{
    #[Route('/', name: 'app_services_list', methods: ['GET'])]
    public function index(ServiceRepository $serviceRepository, CategorieRepository $categorieRepository, Request $request): Response
    {
        // Get filter parameters
        $category = $request->query->get('category');
        $speciality = $request->query->get('speciality');
        $location = $request->query->get('location');
        $search = $request->query->get('search');

        // Build search criteria
        $criteria = [];
        if ($search) {
            $criteria['search'] = $search;
        }
        if ($category) {
            $categoryEntity = $categorieRepository->find($category);
            if ($categoryEntity) {
                $criteria['category'] = $categoryEntity;
            }
        }
        if ($speciality) {
            $criteria['speciality'] = $speciality;
        }
        if ($location) {
            $criteria['location'] = $location;
        }

        // Get services
        if (!empty($criteria)) {
            $services = $serviceRepository->search($criteria);
        } else {
            $services = $serviceRepository->findActiveServices();
        }

        // Get filter options
        $categories = $categorieRepository->findCategoriesWithActiveServices();
        $specialities = $serviceRepository->getDistinctSpecialities();
        $locations = $serviceRepository->getDistinctLocations();

        return $this->render('services/index.html.twig', [
            'services' => $services,
            'categories' => $categories,
            'specialities' => $specialities,
            'locations' => $locations,
            'current_filters' => [
                'category' => $category,
                'speciality' => $speciality,
                'location' => $location,
                'search' => $search,
            ],
            'page_title' => 'Medical Services - Find Your Doctor',
        ]);
    }

    #[Route('/{id}', name: 'app_services_show', methods: ['GET'])]
    public function show(Service $service): Response
    {
        // Only show active services to public
        if (!$service->isActive()) {
            throw $this->createNotFoundException('Service not found or not available.');
        }

        // Get related services (same speciality, different doctors)
        $relatedServices = $service->getCategorie() 
            ? $service->getCategorie()->getServices()->filter(function($s) use ($service) {
                return $s->getId() !== $service->getId() && $s->isActive();
            })->slice(0, 4)
            : [];

        return $this->render('services/show.html.twig', [
            'service' => $service,
            'related_services' => $relatedServices,
            'page_title' => $service->getName() . ' - ' . $service->getSpeciality(),
        ]);
    }

    #[Route('/category/{id}', name: 'app_services_by_category', methods: ['GET'])]
    public function byCategory($id, ServiceRepository $serviceRepository, CategorieRepository $categorieRepository): Response
    {
        $category = $categorieRepository->find($id);
        
        if (!$category) {
            throw $this->createNotFoundException('Category not found.');
        }

        $services = $serviceRepository->findByCategory($category, true);

        return $this->render('services/by_category.html.twig', [
            'category' => $category,
            'services' => $services,
            'page_title' => $category->getType() . ' Services',
        ]);
    }

    #[Route('/speciality/{speciality}', name: 'app_services_by_speciality', methods: ['GET'])]
    public function bySpeciality(string $speciality, ServiceRepository $serviceRepository): Response
    {
        $services = $serviceRepository->findBySpeciality($speciality, true);

        if (empty($services)) {
            throw $this->createNotFoundException('No services found for this speciality.');
        }

        return $this->render('services/by_speciality.html.twig', [
            'speciality' => $speciality,
            'services' => $services,
            'page_title' => $speciality . ' Specialists',
        ]);
    }

    #[Route('/search', name: 'app_services_search', methods: ['GET'])]
    public function search(Request $request, ServiceRepository $serviceRepository): Response
    {
        $searchTerm = $request->query->get('q', '');
        
        if (empty($searchTerm)) {
            return $this->redirectToRoute('app_services_list');
        }

        $services = $serviceRepository->search(['search' => $searchTerm]);

        return $this->render('services/search.html.twig', [
            'services' => $services,
            'search_term' => $searchTerm,
            'page_title' => 'Search Results for "' . $searchTerm . '"',
        ]);
    }

    #[Route('/grouped', name: 'app_services_grouped', methods: ['GET'])]
    public function grouped(ServiceRepository $serviceRepository): Response
    {
        $groupedServices = $serviceRepository->findGroupedByCategory(true);

        return $this->render('services/grouped.html.twig', [
            'grouped_services' => $groupedServices,
            'page_title' => 'Services by Category',
        ]);
    }
}
