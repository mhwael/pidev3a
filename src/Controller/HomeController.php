<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'page_title' => 'Home - Salutem Medical Center',
        ]);
    }

    #[Route('/services', name: 'app_services')]
    public function services(): Response
    {
        // Redirect to the new services list
        return $this->redirectToRoute('app_services_list');
    }

    #[Route('/physicians', name: 'app_physicians')]
    public function physicians(): Response
    {
        return $this->render('home/physicians.html.twig', [
            'page_title' => 'Physicians - Salutem Medical Center',
        ]);
    }

    #[Route('/patient-info', name: 'app_patient_info')]
    public function patientInfo(): Response
    {
        return $this->render('home/patient_info.html.twig', [
            'page_title' => 'Patient Info - Salutem Medical Center',
        ]);
    }

    #[Route('/blog', name: 'app_blog')]
    public function blog(): Response
    {
        return $this->render('home/blog.html.twig', [
            'page_title' => 'Blog - Salutem Medical Center',
        ]);
    }
}
