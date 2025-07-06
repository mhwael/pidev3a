<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\Service;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ServiceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Doctor Name',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Dr. John Smith'
                ],
                'help' => 'Enter the full name of the doctor'
            ])
            ->add('speciality', ChoiceType::class, [
                'label' => 'Medical Speciality',
                'choices' => Service::getCommonSpecialities(),
                'placeholder' => 'Select a speciality',
                'attr' => [
                    'class' => 'form-control',
                ],
                'help' => 'Choose the doctor\'s medical speciality'
            ])
            ->add('location', TextareaType::class, [
                'label' => 'Practice Location',
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 3,
                    'placeholder' => 'Full address of the medical practice...'
                ],
                'help' => 'Enter the complete address where the doctor practices'
            ])
            ->add('availableTimesString', TextareaType::class, [
                'label' => 'Available Schedule',
                'mapped' => false,
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 4,
                    'placeholder' => 'Example: Monday 9:00-17:00, Tuesday 9:00-17:00, Wednesday 9:00-12:00',
                    'data-bs-toggle' => 'tooltip',
                    'data-bs-placement' => 'top',
                    'title' => 'Enter available schedule in a readable format'
                ],
                'help' => 'Enter the doctor\'s available days and hours (e.g., "Monday-Friday 9:00-17:00, Saturday 9:00-13:00")'
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 4,
                    'placeholder' => 'Additional information about the doctor and services...'
                ],
                'help' => 'Provide additional details about the doctor\'s experience and services (optional)'
            ])
            ->add('phone', TelType::class, [
                'label' => 'Phone Number',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => '+1 555 123 4567'
                ],
                'help' => 'Contact phone number for appointments'
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email Address',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'doctor@example.com'
                ],
                'help' => 'Contact email address'
            ])
            ->add('price', MoneyType::class, [
                'label' => 'Consultation Fee',
                'required' => false,
                'currency' => 'USD',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => '0.00'
                ],
                'help' => 'Cost per consultation (leave empty if not applicable)'
            ])
            ->add('categorie', EntityType::class, [
                'label' => 'Consultation Category',
                'class' => Categorie::class,
                'choice_label' => 'type',
                'placeholder' => 'Select a category',
                'attr' => [
                    'class' => 'form-control',
                ],
                'help' => 'Choose the type of consultation offered'
            ])
            ->add('isActive', CheckboxType::class, [
                'label' => 'Active Service',
                'required' => false,
                'attr' => [
                    'class' => 'form-check-input',
                ],
                'help' => 'Check to make this service visible to patients'
            ])
            ->add('submit', SubmitType::class, [
                'label' => $options['submit_label'] ?? 'Save Service',
                'attr' => [
                    'class' => 'btn btn-primary'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Service::class,
            'submit_label' => 'Save Service'
        ]);
    }
}
