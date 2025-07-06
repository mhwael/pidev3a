<?php

namespace App\Controller;

use App\Entity\Appointment;
use App\Entity\Service;
use App\Form\AppointmentType;
use App\Repository\AppointmentRepository;
use App\Repository\ServiceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Knp\Snappy\Pdf;
use Dompdf\Dompdf;
use Dompdf\Options;

#[Route('/appointments')]
class AppointmentController extends AbstractController
{
    #[Route('/', name: 'app_appointments')]
    public function index(ServiceRepository $serviceRepository): Response
    {
        $services = $serviceRepository->findBy(['isActive' => true], ['name' => 'ASC']);

        return $this->render('appointment/index.html.twig', [
            'services' => $services,
            'page_title' => 'Book an Appointment - Salutem Medical Center',
        ]);
    }

    #[Route('/book', name: 'app_appointment_book')]
    public function book(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $appointment = new Appointment();
        
        // Pre-select service if passed as parameter
        $serviceId = $request->query->get('service');
        if ($serviceId) {
            $service = $entityManager->getRepository(Service::class)->find($serviceId);
            if ($service) {
                $appointment->setService($service);
            }
        }

        $form = $this->createForm(AppointmentType::class, $appointment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($appointment);
            $entityManager->flush();

            // Send confirmation email
            try {
                $email = (new Email())
                    ->from('no-reply@salutem-medical.com')
                    ->to($appointment->getEmail())
                    ->subject('Appointment Booking Confirmation - Salutem Medical Center')
                    ->html($this->renderView('emails/appointment_confirmation.html.twig', [
                        'appointment' => $appointment
                    ]));

                $mailer->send($email);

                // Send notification to admin
                $adminEmail = (new Email())
                    ->from('no-reply@salutem-medical.com')
                    ->to('mail@demolink.org') // Replace with actual admin email
                    ->subject('New Appointment Booking - ' . $appointment->getPatientName())
                    ->html($this->renderView('emails/appointment_admin_notification.html.twig', [
                        'appointment' => $appointment
                    ]));

                $mailer->send($adminEmail);
            } catch (\Exception $e) {
                // Log email error but don't fail the appointment creation
                $this->addFlash('warning', 'Your appointment has been booked, but we couldn\'t send the confirmation email. Please contact us if you need confirmation.');
            }

            $this->addFlash('success', sprintf(
                'Your appointment has been successfully booked! We will contact you at %s to confirm the details.',
                $appointment->getPhone()
            ));

            return $this->redirectToRoute('app_appointment_success', ['id' => $appointment->getId()]);
        }

        return $this->render('appointment/book.html.twig', [
            'form' => $form,
            'appointment' => $appointment,
            'page_title' => 'Book Appointment - Salutem Medical Center',
        ]);
    }

    #[Route('/book/{id}', name: 'app_appointment_book_service')]
    public function bookService(Service $service, Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $appointment = new Appointment();
        $appointment->setService($service);

        $form = $this->createForm(AppointmentType::class, $appointment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($appointment);
            $entityManager->flush();

            // Send confirmation email
            try {
                $email = (new Email())
                    ->from('no-reply@salutem-medical.com')
                    ->to($appointment->getEmail())
                    ->subject('Appointment Booking Confirmation - Salutem Medical Center')
                    ->html($this->renderView('emails/appointment_confirmation.html.twig', [
                        'appointment' => $appointment
                    ]));

                $mailer->send($email);
            } catch (\Exception $e) {
                $this->addFlash('warning', 'Your appointment has been booked, but we couldn\'t send the confirmation email.');
            }

            $this->addFlash('success', sprintf(
                'Your appointment with %s has been successfully booked!',
                $service->getName()
            ));

            return $this->redirectToRoute('app_appointment_success', ['id' => $appointment->getId()]);
        }

        return $this->render('appointment/book_service.html.twig', [
            'form' => $form,
            'service' => $service,
            'appointment' => $appointment,
            'page_title' => 'Book Appointment with ' . $service->getName(),
        ]);
    }

    #[Route('/success/{id}', name: 'app_appointment_success')]
    public function success(Appointment $appointment): Response
    {
        return $this->render('appointment/success.html.twig', [
            'appointment' => $appointment,
            'page_title' => 'Appointment Confirmed - Salutem Medical Center',
        ]);
    }

    #[Route('/my-appointments', name: 'app_my_appointments')]
    public function myAppointments(Request $request, AppointmentRepository $appointmentRepository): Response
    {
        $email = $request->query->get('email');
        $appointments = [];

        if ($email) {
            $appointments = $appointmentRepository->searchByPatient($email);
        }

        return $this->render('appointment/my_appointments.html.twig', [
            'appointments' => $appointments,
            'email' => $email,
            'page_title' => 'My Appointments - Salutem Medical Center',
        ]);
    }

    #[Route('/view/{id}', name: 'app_appointment_view')]
    public function view(Appointment $appointment): Response
    {
        return $this->render('appointment/view.html.twig', [
            'appointment' => $appointment,
            'page_title' => 'Appointment Details - Salutem Medical Center',
        ]);
    }

    #[Route('/view/{id}/pdf', name: 'app_appointment_pdf')]
    public function generatePdf(Appointment $appointment): Response
    {
        $html = $this->renderView('appointment/pdf.html.twig', [
            'appointment' => $appointment,
        ]);

        // Try to use Snappy first, fallback to DOMPdf if wkhtmltopdf is not available
        try {
            // Check if wkhtmltopdf is available by trying to use the service
            $snappyPdf = $this->container->get('knp_snappy.pdf');
            $pdfContent = $snappyPdf->getOutputFromHtml($html);
            
            return new PdfResponse(
                $pdfContent,
                'appointment-' . $appointment->getId() . '.pdf'
            );
        } catch (\Exception $e) {
            // Fallback to DOMPdf
            $options = new Options();
            $options->set('defaultFont', 'Arial');
            $options->set('isRemoteEnabled', true);
            
            $dompdf = new Dompdf($options);
            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();
            
            $response = new Response($dompdf->output());
            $response->headers->set('Content-Type', 'application/pdf');
            $response->headers->set(
                'Content-Disposition',
                'attachment; filename="appointment-' . $appointment->getId() . '.pdf"'
            );
            
            return $response;
        }
    }
}
