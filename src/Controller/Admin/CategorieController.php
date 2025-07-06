<?php

namespace App\Controller\Admin;

use App\Entity\Categorie;
use App\Form\CategorieType;
use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/categories')]
class CategorieController extends AbstractController
{
    #[Route('/', name: 'admin_categorie_index', methods: ['GET'])]
    public function index(CategorieRepository $categorieRepository): Response
    {
        $categories = $categorieRepository->findAllWithServiceCount();
        $statistics = $categorieRepository->getStatistics();

        return $this->render('admin/categorie/index.html.twig', [
            'categories' => $categories,
            'statistics' => $statistics,
        ]);
    }

    #[Route('/new', name: 'admin_categorie_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $categorie = new Categorie();
        $form = $this->createForm(CategorieType::class, $categorie, [
            'submit_label' => 'Create Category'
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($categorie);
            $entityManager->flush();            $this->addFlash('success', sprintf(
                'Category "%s" has been created successfully!',
                $categorie->getType()
            ));

            return $this->redirectToRoute('admin_categorie_index');
        }

        return $this->render('admin/categorie/new.html.twig', [
            'categorie' => $categorie,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'admin_categorie_show', methods: ['GET'])]
    public function show(Categorie $categorie): Response
    {
        return $this->render('admin/categorie/show.html.twig', [
            'categorie' => $categorie,
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_categorie_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Categorie $categorie, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CategorieType::class, $categorie, [
            'submit_label' => 'Update Category'
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();            $this->addFlash('success', sprintf(
                'Category "%s" has been updated successfully!',
                $categorie->getType()
            ));

            return $this->redirectToRoute('admin_categorie_index');
        }

        return $this->render('admin/categorie/edit.html.twig', [
            'categorie' => $categorie,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'admin_categorie_delete', methods: ['POST'])]
    public function delete(Request $request, Categorie $categorie, EntityManagerInterface $entityManager, CategorieRepository $categorieRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$categorie->getId(), $request->request->get('_token'))) {
            // Check if category can be safely deleted
            if (!$categorieRepository->canBeDeleted($categorie)) {
                $this->addFlash('error', sprintf(
                    'Cannot delete category "%s" because it has associated services. Please remove or reassign the services first.',
                    $categorie->getType()
                ));
                
                return $this->redirectToRoute('admin_categorie_index');
            }

            $categoryType = $categorie->getType();
            $entityManager->remove($categorie);
            $entityManager->flush();

            $this->addFlash('success', sprintf(
                'Category "%s" has been deleted successfully!', 
                $categoryType
            ));
        } else {
            $this->addFlash('error', 'Invalid security token. Please try again.');
        }

        return $this->redirectToRoute('admin_categorie_index');
    }

    #[Route('/search', name: 'admin_categorie_search', methods: ['GET'])]
    public function search(Request $request, CategorieRepository $categorieRepository): Response
    {
        $searchTerm = $request->query->get('q', '');
        
        if (empty($searchTerm)) {
            return $this->redirectToRoute('admin_categorie_index');
        }

        $categories = $categorieRepository->searchByType($searchTerm);

        return $this->render('admin/categorie/search.html.twig', [
            'categories' => $categories,
            'search_term' => $searchTerm,
        ]);
    }
}
