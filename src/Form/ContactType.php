<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Your Name',
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new NotBlank(['message' => 'Please enter your name']),
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email Address',
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new NotBlank(['message' => 'Please enter your email address']),
                    new Email(['message' => 'Please enter a valid email address']),
                ],
            ])
            ->add('state', TextType::class, [
                'label' => 'State',
                'attr' => ['class' => 'form-control'],
                'required' => false,
            ])
            ->add('phone', TelType::class, [
                'label' => 'Phone Number',
                'attr' => ['class' => 'form-control'],
                'required' => false,
            ])
            ->add('fax', TelType::class, [
                'label' => 'Fax Number',
                'attr' => ['class' => 'form-control'],
                'required' => false,
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Message',
                'attr' => ['class' => 'form-control', 'rows' => 5],
                'constraints' => [
                    new NotBlank(['message' => 'Please enter your message']),
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Send Message',
                'attr' => ['class' => 'btn btn-primary'],
            ]);
    }
}
