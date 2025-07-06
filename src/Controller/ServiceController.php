<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\ServiceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServiceController extends AbstractController
{
    #[Route('/services', name: 'app_services', methods: ['GET'])]
    public function index(ServiceRepository $serviceRepository, CategorieRepository $categorieRepository, Request $request): Response
    {
        $categoryId = $request->query->get('category');
        $speciality = $request->query->get('speciality');
        $search = $request->query->get('search');

        // Get all active services
        $queryBuilder = $serviceRepository->createQueryBuilder('s')
            ->where('s.isActive = :active')
            ->setParameter('active', true)
            ->orderBy('s.createdAt', 'DESC');

        // Apply filters
        if ($categoryId) {
            $queryBuilder
                ->andWhere('s.categorie = :category')
                ->setParameter('category', $categoryId);
        }

        if ($speciality) {
            $queryBuilder
                ->andWhere('s.speciality LIKE :speciality')
                ->setParameter('speciality', '%' . $speciality . '%');
        }

        if ($search) {
            $queryBuilder
                ->andWhere('s.name LIKE :search OR s.description LIKE :search OR s.location LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }

        $services = $queryBuilder->getQuery()->getResult();

        // Get all categories for filter dropdown
        $categories = $categorieRepository->findBy([], ['type' => 'ASC']);

        // Get all specialities for filter dropdown
        $specialities = $serviceRepository->createQueryBuilder('s')
            ->select('DISTINCT s.speciality')
            ->where('s.isActive = :active')
            ->setParameter('active', true)
            ->orderBy('s.speciality', 'ASC')
            ->getQuery()
            ->getScalarResult();

        return $this->render('service/index.html.twig', [
            'services' => $services,
            'categories' => $categories,
            'specialities' => array_column($specialities, 'speciality'),
            'currentCategory' => $categoryId,
            'currentSpeciality' => $speciality,
            'currentSearch' => $search,
            'page_title' => 'Medical Services - Salutem Medical Center',
        ]);
    }

    #[Route('/services/list', name: 'app_services_list', methods: ['GET'])]
    public function servicesList(ServiceRepository $serviceRepository): Response
    {
        return $this->redirectToRoute('app_services');
    }

    #[Route('/services/{id}', name: 'app_service_show', methods: ['GET'])]
    public function show($id, ServiceRepository $serviceRepository): Response
    {
        $service = $serviceRepository->find($id);

        if (!$service || !$service->isActive()) {
            throw $this->createNotFoundException('Service not found or not available.');
        }

        // Get related services (same speciality)
        $relatedServices = $serviceRepository->createQueryBuilder('s')
            ->where('s.speciality = :speciality')
            ->andWhere('s.id != :currentId')
            ->andWhere('s.isActive = :active')
            ->setParameter('speciality', $service->getSpeciality())
            ->setParameter('currentId', $service->getId())
            ->setParameter('active', true)
            ->setMaxResults(3)
            ->getQuery()
            ->getResult();

        return $this->render('service/show.html.twig', [
            'service' => $service,
            'relatedServices' => $relatedServices,
            'page_title' => $service->getName() . ' - ' . $service->getSpeciality(),
        ]);
    }
}
