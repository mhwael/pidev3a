<?php

namespace App\Controller\Admin;

use App\Entity\Appointment;
use App\Repository\AppointmentRepository;
use App\Service\TwilioService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

#[Route('/admin/appointment')]
class AppointmentController extends AbstractController
{
    #[Route('/', name: 'admin_appointment_index', methods: ['GET'])]
    public function index(Request $request, AppointmentRepository $appointmentRepository): Response
    {
        $status = $request->query->get('status');
        $search = $request->query->get('search');
        
        if ($status || $search) {
            $appointments = $appointmentRepository->findByFilters($status, $search);
        } else {
            $appointments = $appointmentRepository->findBy([], ['createdAt' => 'DESC']);
        }
        
        $stats = [
            'pending' => $appointmentRepository->countByStatus('pending'),
            'confirmed' => $appointmentRepository->countByStatus('confirmed'),
            'cancelled' => $appointmentRepository->countByStatus('cancelled'),
            'completed' => $appointmentRepository->countByStatus('completed'),
        ];

        return $this->render('admin/appointment/index.html.twig', [
            'appointments' => $appointments,
            'stats' => $stats,
            'currentStatus' => $status,
            'currentSearch' => $search,
        ]);
    }

    #[Route('/{id}', name: 'admin_appointment_show', methods: ['GET'])]
    public function show(Appointment $appointment): Response
    {
        return $this->render('admin/appointment/show.html.twig', [
            'appointment' => $appointment,
        ]);
    }

    #[Route('/{id}/confirm', name: 'admin_appointment_confirm', methods: ['POST'])]
    public function confirm(Appointment $appointment, EntityManagerInterface $entityManager, MailerInterface $mailer, TwilioService $twilioService): Response
    {
        if ($appointment->getStatus() !== 'pending') {
            $this->addFlash('error', 'Only pending appointments can be confirmed.');
            return $this->redirectToRoute('admin_appointment_show', ['id' => $appointment->getId()]);
        }

        $appointment->setStatus('confirmed');
        $appointment->setUpdatedAt(new \DateTimeImmutable());
        $entityManager->flush();

        $successMessages = [];
        $warningMessages = [];

        // Skip email sending for now (email service not configured)
        // Uncomment the block below when you want to enable email notifications
        /*
        // Send confirmation email
        try {
            $email = (new Email())
                ->from('no-reply@salutem-medical.com')
                ->to($appointment->getEmail())
                ->subject('Appointment Confirmed - Salutem Medical Center')
                ->html($this->renderView('emails/appointment_confirmed.html.twig', [
                    'appointment' => $appointment
                ]));

            $mailer->send($email);
            $successMessages[] = 'Confirmation email sent successfully';
        } catch (\Exception $e) {
            $warningMessages[] = 'Email could not be sent: ' . $e->getMessage();
        }
        */

        // Send confirmation SMS if phone number is provided
        if ($appointment->getPhone()) {
            try {
                $appointmentData = [
                    'patientName' => $appointment->getPatientName(),
                    'serviceName' => $appointment->getService()->getName(),
                    'date' => $appointment->getFormattedDate(),
                    'time' => $appointment->getFormattedTime(),
                    'location' => $appointment->getService()->getLocation(),
                    'id' => $appointment->getId()
                ];

                $smsSent = $twilioService->sendAppointmentConfirmationSms(
                    $appointment->getPhone(),
                    $appointmentData
                );

                if ($smsSent) {
                    $successMessages[] = 'Confirmation SMS sent successfully';
                } else {
                    $warningMessages[] = 'SMS could not be sent';
                }
            } catch (\Exception $e) {
                $warningMessages[] = 'SMS sending failed: ' . $e->getMessage();
            }
        }

        // Display appropriate flash messages
        if (!empty($successMessages)) {
            $this->addFlash('success', 'Appointment confirmed! ' . implode(' and ', $successMessages) . '.');
        }
        
        if (!empty($warningMessages)) {
            $this->addFlash('warning', 'Appointment confirmed but: ' . implode(', ', $warningMessages) . '.');
        }

        if (empty($successMessages) && empty($warningMessages)) {
            $this->addFlash('success', 'Appointment has been confirmed.');
        }

        return $this->redirectToRoute('admin_appointment_show', ['id' => $appointment->getId()]);
    }

    #[Route('/{id}/cancel', name: 'admin_appointment_cancel', methods: ['POST'])]
    public function cancel(Request $request, Appointment $appointment, EntityManagerInterface $entityManager, MailerInterface $mailer, TwilioService $twilioService): Response
    {
        $cancellationReason = $request->request->get('cancellation_reason', '');
        
        $appointment->setStatus('cancelled');
        $appointment->setCancellationReason($cancellationReason);
        $appointment->setUpdatedAt(new \DateTimeImmutable());
        $entityManager->flush();

        $successMessages = [];
        $warningMessages = [];

        // Skip email sending for now (email service not configured)
        // Uncomment the block below when you want to enable email notifications
        /*
        // Send cancellation email
        try {
            $email = (new Email())
                ->from('no-reply@salutem-medical.com')
                ->to($appointment->getEmail())
                ->subject('Appointment Cancelled - Salutem Medical Center')
                ->html($this->renderView('emails/appointment_cancelled.html.twig', [
                    'appointment' => $appointment,
                    'reason' => $cancellationReason
                ]));

            $mailer->send($email);
            $successMessages[] = 'Cancellation email sent successfully';
        } catch (\Exception $e) {
            $warningMessages[] = 'Email could not be sent: ' . $e->getMessage();
        }
        */

        // Send cancellation SMS if phone number is provided
        if ($appointment->getPhone()) {
            try {
                $appointmentData = [
                    'patientName' => $appointment->getPatientName(),
                    'serviceName' => $appointment->getService()->getName(),
                    'date' => $appointment->getFormattedDate(),
                    'time' => $appointment->getFormattedTime(),
                    'location' => $appointment->getService()->getLocation(),
                    'id' => $appointment->getId()
                ];

                $smsSent = $twilioService->sendAppointmentCancellationSms(
                    $appointment->getPhone(),
                    $appointmentData,
                    $cancellationReason
                );

                if ($smsSent) {
                    $successMessages[] = 'Cancellation SMS sent successfully';
                } else {
                    $warningMessages[] = 'SMS could not be sent';
                }
            } catch (\Exception $e) {
                $warningMessages[] = 'SMS sending failed: ' . $e->getMessage();
            }
        }

        // Display appropriate flash messages
        if (!empty($successMessages)) {
            $this->addFlash('success', 'Appointment cancelled! ' . implode(' and ', $successMessages) . '.');
        }
        
        if (!empty($warningMessages)) {
            $this->addFlash('warning', 'Appointment cancelled but: ' . implode(', ', $warningMessages) . '.');
        }

        if (empty($successMessages) && empty($warningMessages)) {
            $this->addFlash('success', 'Appointment has been cancelled.');
        }

        return $this->redirectToRoute('admin_appointment_show', ['id' => $appointment->getId()]);
    }

    #[Route('/{id}/complete', name: 'admin_appointment_complete', methods: ['POST'])]
    public function complete(Appointment $appointment, EntityManagerInterface $entityManager): Response
    {
        if ($appointment->getStatus() !== 'confirmed') {
            $this->addFlash('error', 'Only confirmed appointments can be marked as completed.');
            return $this->redirectToRoute('admin_appointment_show', ['id' => $appointment->getId()]);
        }

        $appointment->setStatus('completed');
        $appointment->setUpdatedAt(new \DateTimeImmutable());
        $entityManager->flush();

        $this->addFlash('success', 'Appointment has been marked as completed.');

        return $this->redirectToRoute('admin_appointment_show', ['id' => $appointment->getId()]);
    }

    #[Route('/{id}/delete', name: 'admin_appointment_delete', methods: ['POST'])]
    public function delete(Request $request, Appointment $appointment, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$appointment->getId(), $request->request->get('_token'))) {
            $entityManager->remove($appointment);
            $entityManager->flush();
            $this->addFlash('success', 'Appointment has been deleted.');
        }

        return $this->redirectToRoute('admin_appointment_index');
    }
}
