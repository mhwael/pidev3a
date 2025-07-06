<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use App\Entity\Service;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Create Categories
        $homeVisitCategory = new Categorie();
        $homeVisitCategory->setType('Home Visit');
        $homeVisitCategory->setDescription('Medical consultations at patient\'s home for convenience and comfort.');
        $manager->persist($homeVisitCategory);

        $inCabinetCategory = new Categorie();
        $inCabinetCategory->setType('In Cabinet');
        $inCabinetCategory->setDescription('Traditional medical consultations in our modern medical facilities.');
        $manager->persist($inCabinetCategory);

        $onlineCategory = new Categorie();
        $onlineCategory->setType('Online');
        $onlineCategory->setDescription('Virtual consultations via secure video conferencing for follow-ups and consultations.');
        $manager->persist($onlineCategory);

        // Create Services/Doctors
        $services = [
            [
                'name' => 'Dr. John Smith',
                'speciality' => 'Cardiology',
                'location' => 'Main Medical Center, Glasgow',
                'availableTimes' => ['09:00-12:00', '14:00-17:00'],
                'phoneNumber' => '+1-959-603-6001',
                'email' => 'dr.smith@salutem.org',
                'description' => 'Experienced cardiologist with over 15 years of practice. Specializes in heart disease prevention and treatment.',
                'category' => $inCabinetCategory
            ],
            [
                'name' => 'Dr. Sarah Johnson',
                'speciality' => 'Family Medicine',
                'location' => 'Salutem Family Clinic, Glasgow',
                'availableTimes' => ['08:00-12:00', '13:00-16:00'],
                'phoneNumber' => '+1-959-603-6002',
                'email' => 'dr.johnson@salutem.org',
                'description' => 'Family medicine specialist providing comprehensive care for patients of all ages.',
                'category' => $homeVisitCategory
            ],
            [
                'name' => 'Dr. Michael Brown',
                'speciality' => 'Pediatrics',
                'location' => 'Children\'s Medical Center, Glasgow',
                'availableTimes' => ['09:00-13:00', '15:00-18:00'],
                'phoneNumber' => '+1-959-603-6003',
                'email' => 'dr.brown@salutem.org',
                'description' => 'Pediatric specialist dedicated to providing excellent healthcare for children and adolescents.',
                'category' => $inCabinetCategory
            ],
            [
                'name' => 'Dr. Lisa Wilson',
                'speciality' => 'Dermatology',
                'location' => 'Skin Care Center, Glasgow',
                'availableTimes' => ['10:00-14:00', '15:00-19:00'],
                'phoneNumber' => '+1-959-603-6004',
                'email' => 'dr.wilson@salutem.org',
                'description' => 'Board-certified dermatologist specializing in skin conditions and cosmetic dermatology.',
                'category' => $onlineCategory
            ],
            [
                'name' => 'Dr. David Davis',
                'speciality' => 'Orthopedics',
                'location' => 'Orthopedic Surgery Center, Glasgow',
                'availableTimes' => ['08:00-12:00', '14:00-16:00'],
                'phoneNumber' => '+1-959-603-6005',
                'email' => 'dr.davis@salutem.org',
                'description' => 'Orthopedic surgeon with expertise in joint replacement and sports medicine.',
                'category' => $inCabinetCategory
            ],
            [
                'name' => 'Dr. Jennifer Taylor',
                'speciality' => 'Gynecology',
                'location' => 'Women\'s Health Center, Glasgow',
                'availableTimes' => ['09:00-13:00', '14:00-17:00'],
                'phoneNumber' => '+1-959-603-6006',
                'email' => 'dr.taylor@salutem.org',
                'description' => 'Women\'s health specialist providing comprehensive gynecological care and prenatal services.',
                'category' => $homeVisitCategory
            ],
            [
                'name' => 'Dr. Robert Anderson',
                'speciality' => 'Internal Medicine',
                'location' => 'Internal Medicine Clinic, Glasgow',
                'availableTimes' => ['08:30-12:30', '13:30-17:30'],
                'phoneNumber' => '+1-959-603-6007',
                'email' => 'dr.anderson@salutem.org',
                'description' => 'Internal medicine physician focusing on adult medical care and chronic disease management.',
                'category' => $onlineCategory
            ],
            [
                'name' => 'Dr. Emily Martinez',
                'speciality' => 'Neurology',
                'location' => 'Neurology Center, Glasgow',
                'availableTimes' => ['10:00-15:00'],
                'phoneNumber' => '+1-959-603-6008',
                'email' => 'dr.martinez@salutem.org',
                'description' => 'Neurologist specializing in brain and nervous system disorders, including headaches and epilepsy.',
                'category' => $inCabinetCategory
            ],
            [
                'name' => 'Dr. Thomas White',
                'speciality' => 'Psychiatry',
                'location' => 'Mental Health Center, Glasgow',
                'availableTimes' => ['09:00-17:00'],
                'phoneNumber' => '+1-959-603-6009',
                'email' => 'dr.white@salutem.org',
                'description' => 'Psychiatrist providing mental health services including therapy and medication management.',
                'category' => $onlineCategory
            ],
            [
                'name' => 'Dr. Maria Garcia',
                'speciality' => 'Endocrinology',
                'location' => 'Diabetes & Endocrine Center, Glasgow',
                'availableTimes' => ['08:00-16:00'],
                'phoneNumber' => '+1-959-603-6010',
                'email' => 'dr.garcia@salutem.org',
                'description' => 'Endocrinologist specializing in diabetes, thyroid disorders, and hormonal imbalances.',
                'category' => $homeVisitCategory
            ]
        ];

        foreach ($services as $serviceData) {
            $service = new Service();
            $service->setName($serviceData['name']);
            $service->setSpeciality($serviceData['speciality']);
            $service->setLocation($serviceData['location']);
            $service->setAvailableTimes($serviceData['availableTimes']);
            $service->setPhone($serviceData['phoneNumber']);
            $service->setEmail($serviceData['email']);
            $service->setDescription($serviceData['description']);
            $service->setCategorie($serviceData['category']);
            $service->setIsActive(true);

            $manager->persist($service);
        }

        $manager->flush();
    }
}
