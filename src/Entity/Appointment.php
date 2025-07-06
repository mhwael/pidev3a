<?php

namespace App\Entity;

use App\Repository\AppointmentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: AppointmentRepository::class)]
#[ORM\Table(name: 'appointments')]
class Appointment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: Types::INTEGER)]
    private ?int $id = null;

    #[ORM\Column(type: Types::STRING, length: 255)]
    #[Assert\NotBlank(message: 'Patient name is required')]
    #[Assert\Length(
        min: 2,
        max: 255,
        minMessage: 'Patient name must be at least {{ limit }} characters long',
        maxMessage: 'Patient name cannot be longer than {{ limit }} characters'
    )]
    private ?string $patientName = null;

    #[ORM\Column(type: Types::STRING, length: 255)]
    #[Assert\NotBlank(message: 'Email is required')]
    #[Assert\Email(message: 'Please enter a valid email address')]
    private ?string $email = null;

    #[ORM\Column(type: Types::STRING, length: 20)]
    #[Assert\NotBlank(message: 'Phone number is required')]
    #[Assert\Regex(
        pattern: '/^[\+]?[0-9\s\-\(\)]+$/',
        message: 'Please enter a valid phone number'
    )]
    private ?string $phone = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE)]
    #[Assert\NotBlank(message: 'Preferred date is required')]
    #[Assert\GreaterThan(
        value: 'today',
        message: 'Appointment date must be in the future'
    )]
    private ?\DateTimeImmutable $preferredDate = null;

    #[ORM\Column(type: Types::TIME_IMMUTABLE)]
    #[Assert\NotBlank(message: 'Preferred time is required')]
    private ?\DateTimeImmutable $preferredTime = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Assert\Length(
        max: 1000,
        maxMessage: 'Message cannot be longer than {{ limit }} characters'
    )]
    private ?string $message = null;

    #[ORM\Column(type: Types::STRING, length: 50)]
    private string $status = 'pending';

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE, nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\ManyToOne(targetEntity: Service::class, inversedBy: 'appointments')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: 'Service selection is required')]
    private ?Service $service = null;

    #[ORM\Column(type: Types::STRING, length: 100, nullable: true)]
    private ?string $patientAge = null;

    #[ORM\Column(type: Types::STRING, length: 20, nullable: true)]
    private ?string $gender = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $medicalHistory = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $cancellationReason = null;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
        $this->status = 'pending';
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPatientName(): ?string
    {
        return $this->patientName;
    }

    public function setPatientName(string $patientName): static
    {
        $this->patientName = $patientName;
        $this->updatedAt = new \DateTimeImmutable();
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
        $this->updatedAt = new \DateTimeImmutable();
        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): static
    {
        $this->phone = $phone;
        $this->updatedAt = new \DateTimeImmutable();
        return $this;
    }

    public function getPreferredDate(): ?\DateTimeImmutable
    {
        return $this->preferredDate;
    }

    public function setPreferredDate(\DateTimeImmutable $preferredDate): static
    {
        $this->preferredDate = $preferredDate;
        $this->updatedAt = new \DateTimeImmutable();
        return $this;
    }

    public function getPreferredTime(): ?\DateTimeImmutable
    {
        return $this->preferredTime;
    }

    public function setPreferredTime(\DateTimeImmutable $preferredTime): static
    {
        $this->preferredTime = $preferredTime;
        $this->updatedAt = new \DateTimeImmutable();
        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): static
    {
        $this->message = $message;
        $this->updatedAt = new \DateTimeImmutable();
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;
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

    public function getService(): ?Service
    {
        return $this->service;
    }

    public function setService(?Service $service): static
    {
        $this->service = $service;
        $this->updatedAt = new \DateTimeImmutable();
        return $this;
    }

    public function getPatientAge(): ?string
    {
        return $this->patientAge;
    }

    public function setPatientAge(?string $patientAge): static
    {
        $this->patientAge = $patientAge;
        $this->updatedAt = new \DateTimeImmutable();
        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): static
    {
        $this->gender = $gender;
        $this->updatedAt = new \DateTimeImmutable();
        return $this;
    }

    public function getMedicalHistory(): ?string
    {
        return $this->medicalHistory;
    }

    public function setMedicalHistory(?string $medicalHistory): static
    {
        $this->medicalHistory = $medicalHistory;
        $this->updatedAt = new \DateTimeImmutable();
        return $this;
    }

    public function getCancellationReason(): ?string
    {
        return $this->cancellationReason;
    }

    public function setCancellationReason(?string $cancellationReason): static
    {
        $this->cancellationReason = $cancellationReason;
        $this->updatedAt = new \DateTimeImmutable();
        return $this;
    }

    public function getStatusBadgeClass(): string
    {
        return match($this->status) {
            'confirmed' => 'bg-success',
            'cancelled' => 'bg-danger',
            'completed' => 'bg-info',
            default => 'bg-warning'
        };
    }

    public function getFormattedDate(): string
    {
        return $this->preferredDate ? $this->preferredDate->format('M d, Y') : '';
    }

    public function getFormattedTime(): string
    {
        return $this->preferredTime ? $this->preferredTime->format('H:i') : '';
    }
}
