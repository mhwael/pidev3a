<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contacts', name: 'app_contacts')]
    public function contacts(Request $request, MailerInterface $mailer): Response
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            
            // Create email
            $email = (new Email())
                ->from($data['email'])
                ->to('mail@demolink.org') // Replace with your actual email
                ->subject('A message from your site visitor ' . $data['name'])
                ->html($this->renderView('emails/contact.html.twig', [
                    'data' => $data
                ]));

            try {
                $mailer->send($email);
                $this->addFlash('success', 'Your message has been sent successfully!');
            } catch (\Exception $e) {
                $this->addFlash('error', 'There was an error sending your message. Please try again.');
            }

            return $this->redirectToRoute('app_contacts');
        }

        return $this->render('home/contacts.html.twig', [
            'page_title' => 'Contacts - Salutem Medical Center',
            'contact_form' => $form->createView(),
        ]);
    }
}
