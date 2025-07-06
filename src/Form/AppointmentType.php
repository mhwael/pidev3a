<?php

namespace App\Form;

use App\Entity\Appointment;
use App\Entity\Service;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\GreaterThan;

class AppointmentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('service', EntityType::class, [
                'class' => Service::class,
                'choice_label' => function(Service $service) {
                    return $service->getName() . ' (' . $service->getSpeciality() . ')';
                },
                'placeholder' => 'Select a service...',
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new NotBlank(['message' => 'Please select a service']),
                ],
                'query_builder' => function($er) {
                    return $er->createQueryBuilder('s')
                        ->where('s.isActive = :active')
                        ->setParameter('active', true)
                        ->orderBy('s.name', 'ASC');
                }
            ])
            ->add('patientName', TextType::class, [
                'label' => 'Patient Name',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Enter patient full name'],
                'constraints' => [
                    new NotBlank(['message' => 'Please enter the patient name']),
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email Address',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Enter email address'],
                'constraints' => [
                    new NotBlank(['message' => 'Please enter an email address']),
                    new Email(['message' => 'Please enter a valid email address']),
                ],
            ])
            ->add('phone', TelType::class, [
                'label' => 'Phone Number',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Enter phone number'],
                'constraints' => [
                    new NotBlank(['message' => 'Please enter a phone number']),
                ],
            ])
            ->add('patientAge', TextType::class, [
                'label' => 'Patient Age',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Enter patient age'],
                'required' => false,
            ])
            ->add('gender', ChoiceType::class, [
                'label' => 'Gender',
                'choices' => [
                    'Select Gender' => '',
                    'Male' => 'male',
                    'Female' => 'female',
                    'Other' => 'other',
                ],
                'attr' => ['class' => 'form-control'],
                'required' => false,
            ])
            ->add('preferredDate', DateType::class, [
                'label' => 'Preferred Date',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control', 'min' => (new \DateTime('+1 day'))->format('Y-m-d')],
                'constraints' => [
                    new NotBlank(['message' => 'Please select a preferred date']),
                    new GreaterThan([
                        'value' => 'today',
                        'message' => 'Appointment date must be in the future'
                    ]),
                ],
            ])
            ->add('preferredTime', TimeType::class, [
                'label' => 'Preferred Time',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new NotBlank(['message' => 'Please select a preferred time']),
                ],
            ])
            ->add('medicalHistory', TextareaType::class, [
                'label' => 'Medical History (Optional)',
                'attr' => ['class' => 'form-control', 'rows' => 3, 'placeholder' => 'Brief medical history or relevant information'],
                'required' => false,
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Additional Message (Optional)',
                'attr' => ['class' => 'form-control', 'rows' => 4, 'placeholder' => 'Any additional information or special requests'],
                'required' => false,
            ])
            ->add('submit', SubmitType::class, [
                'label' => $options['submit_label'] ?? 'Book Appointment',
                'attr' => ['class' => 'btn btn-primary btn-lg'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Appointment::class,
            'submit_label' => 'Book Appointment',
        ]);
    }
}
