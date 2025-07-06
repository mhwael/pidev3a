<?php

namespace App\Entity;

use App\Repository\ServiceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ServiceRepository::class)]
#[ORM\Table(name: 'services')]
class Service
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: Types::INTEGER)]
    private ?int $id = null;

    #[ORM\Column(type: Types::STRING, length: 255)]
    #[Assert\NotBlank(message: 'Doctor name is required')]
    #[Assert\Length(
        min: 2,
        max: 255,
        minMessage: 'Doctor name must be at least {{ limit }} characters long',
        maxMessage: 'Doctor name cannot be longer than {{ limit }} characters'
    )]
    private ?string $name = null;

    #[ORM\Column(type: Types::STRING, length: 100)]
    #[Assert\NotBlank(message: 'Speciality is required')]
    #[Assert\Length(
        min: 2,
        max: 100,
        minMessage: 'Speciality must be at least {{ limit }} characters long',
        maxMessage: 'Speciality cannot be longer than {{ limit }} characters'
    )]
    private ?string $speciality = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message: 'Location is required')]
    #[Assert\Length(
        min: 5,
        max: 500,
        minMessage: 'Location must be at least {{ limit }} characters long',
        maxMessage: 'Location cannot be longer than {{ limit }} characters'
    )]
    private ?string $location = null;

    #[ORM\Column(type: Types::JSON)]
    private array $availableTimes = [];

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Assert\Length(
        max: 1000,
        maxMessage: 'Description cannot be longer than {{ limit }} characters'
    )]
    private ?string $description = null;

    #[ORM\Column(type: Types::STRING, length: 20, nullable: true)]
    #[Assert\Regex(
        pattern: '/^[\+]?[0-9\s\-\(\)]+$/',
        message: 'Please enter a valid phone number'
    )]
    private ?string $phone = null;

    #[ORM\Column(type: Types::STRING, length: 255, nullable: true)]
    #[Assert\Email(message: 'Please enter a valid email address')]
    private ?string $email = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 8, scale: 2, nullable: true)]
    #[Assert\PositiveOrZero(message: 'Price must be a positive number')]
    private ?string $price = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private bool $isActive = true;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE, nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\ManyToOne(targetEntity: Categorie::class, inversedBy: 'services')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: 'Category is required')]
    private ?Categorie $categorie = null;

    /**
     * @var Collection<int, Appointment>
     */
    #[ORM\OneToMany(targetEntity: Appointment::class, mappedBy: 'service', cascade: ['persist'])]
    private Collection $appointments;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
        $this->isActive = true;
        $this->appointments = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        $this->updatedAt = new \DateTimeImmutable();

        return $this;
    }

    public function getSpeciality(): ?string
    {
        return $this->speciality;
    }

    public function setSpeciality(string $speciality): static
    {
        $this->speciality = $speciality;
        $this->updatedAt = new \DateTimeImmutable();

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): static
    {
        $this->location = $location;
        $this->updatedAt = new \DateTimeImmutable();

        return $this;
    }

    public function getAvailableTimes(): array
    {
        return $this->availableTimes;
    }

    public function setAvailableTimes(array $availableTimes): static
    {
        $this->availableTimes = $availableTimes;
        $this->updatedAt = new \DateTimeImmutable();

        return $this;
    }

    // Methods for form handling - convert between string and array
    public function getAvailableTimesString(): string
    {
        return implode("\n", $this->availableTimes);
    }

    public function setAvailableTimesString(?string $availableTimesString): static
    {
        if ($availableTimesString === null || trim($availableTimesString) === '') {
            $this->availableTimes = [];
        } else {
            $this->availableTimes = array_filter(
                array_map('trim', explode("\n", $availableTimesString)),
                function($line) {
                    return !empty($line);
                }
            );
        }
        $this->updatedAt = new \DateTimeImmutable();

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
        $this->updatedAt = new \DateTimeImmutable();

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): static
    {
        $this->phone = $phone;
        $this->updatedAt = new \DateTimeImmutable();

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;
        $this->updatedAt = new \DateTimeImmutable();

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(?string $price): static
    {
        $this->price = $price;
        $this->updatedAt = new \DateTimeImmutable();

        return $this;
    }

    public function isActive(): bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): static
    {
        $this->isActive = $isActive;
        $this->updatedAt = new \DateTimeImmutable();

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): static
    {
        $this->categorie = $categorie;
        $this->updatedAt = new \DateTimeImmutable();

        return $this;
    }

    /**
     * Get formatted available times for display
     */
    public function getFormattedAvailableTimes(): string
    {
        if (empty($this->availableTimes)) {
            return 'No times available';
        }

        $formatted = [];
        foreach ($this->availableTimes as $day => $times) {
            if (!empty($times)) {
                $formatted[] = ucfirst($day) . ': ' . implode(', ', $times);
            }
        }

        return implode(' | ', $formatted);
    }

    /**
     * Check if service is available on a specific day
     */
    public function isAvailableOn(string $day): bool
    {
        return isset($this->availableTimes[strtolower($day)]) && 
               !empty($this->availableTimes[strtolower($day)]);
    }

    /**
     * Get the consultation type from category
     */
    public function getConsultationType(): ?string
    {
        return $this->categorie?->getType();
    }

    /**
     * String representation of the service
     */
    public function __toString(): string
    {
        return sprintf(
            'Dr. %s - %s (%s)', 
            $this->name ?? 'Unknown', 
            $this->speciality ?? 'Unknown Speciality',
            $this->getConsultationType() ?? 'Unknown Type'
        );
    }

    /**
     * Get common medical specialities
     */
    public static function getCommonSpecialities(): array
    {
        return [
            'Cardiology' => 'Cardiology',
            'Dermatology' => 'Dermatology',
            'Endocrinology' => 'Endocrinology',
            'Family Medicine' => 'Family Medicine',
            'Gastroenterology' => 'Gastroenterology',
            'Geriatrics' => 'Geriatrics',
            'Gynecology' => 'Gynecology',
            'Internal Medicine' => 'Internal Medicine',
            'Neurology' => 'Neurology',
            'Oncology' => 'Oncology',
            'Ophthalmology' => 'Ophthalmology',
            'Orthopedics' => 'Orthopedics',
            'Pediatrics' => 'Pediatrics',
            'Psychiatry' => 'Psychiatry',
            'Radiology' => 'Radiology',
            'Surgery' => 'Surgery',
            'Urology' => 'Urology'
        ];
    }

    /**
     * Example schedule structure for available times
     */
    public static function getExampleSchedule(): array
    {
        return [
            'monday' => ['09:00', '10:00', '11:00', '14:00', '15:00', '16:00'],
            'tuesday' => ['09:00', '10:00', '11:00', '14:00', '15:00', '16:00'],
            'wednesday' => ['09:00', '10:00', '11:00', '14:00', '15:00', '16:00'],
            'thursday' => ['09:00', '10:00', '11:00', '14:00', '15:00', '16:00'],
            'friday' => ['09:00', '10:00', '11:00', '14:00', '15:00'],
            'saturday' => ['09:00', '10:00', '11:00'],
            'sunday' => []
        ];
    }

    /**
     * @return Collection<int, Appointment>
     */
    public function getAppointments(): Collection
    {
        return $this->appointments;
    }

    public function addAppointment(Appointment $appointment): static
    {
        if (!$this->appointments->contains($appointment)) {
            $this->appointments->add($appointment);
            $appointment->setService($this);
        }

        return $this;
    }

    public function removeAppointment(Appointment $appointment): static
    {
        if ($this->appointments->removeElement($appointment)) {
            if ($appointment->getService() === $this) {
                $appointment->setService(null);
            }
        }

        return $this;
    }

    public function getAppointmentCount(): int
    {
        return $this->appointments->count();
    }

    public function getPendingAppointmentCount(): int
    {
        return $this->appointments->filter(function(Appointment $appointment) {
            return $appointment->getStatus() === 'pending';
        })->count();
    }
}
