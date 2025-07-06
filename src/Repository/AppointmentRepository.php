<?php

namespace App\Repository;

use App\Entity\Appointment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Appointment>
 */
class AppointmentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Appointment::class);
    }

    /**
     * Find appointments by status
     */
    public function findByStatus(string $status): array
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.status = :status')
            ->setParameter('status', $status)
            ->orderBy('a.preferredDate', 'ASC')
            ->addOrderBy('a.preferredTime', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find appointments for a specific service
     */
    public function findByService(int $serviceId): array
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.service = :serviceId')
            ->setParameter('serviceId', $serviceId)
            ->orderBy('a.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find recent appointments
     */
    public function findRecent(int $limit = 10): array
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Find appointments by date range
     */
    public function findByDateRange(\DateTimeImmutable $startDate, \DateTimeImmutable $endDate): array
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.preferredDate BETWEEN :startDate AND :endDate')
            ->setParameter('startDate', $startDate)
            ->setParameter('endDate', $endDate)
            ->orderBy('a.preferredDate', 'ASC')
            ->addOrderBy('a.preferredTime', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Get appointment statistics
     */
    public function getStatistics(): array
    {
        $qb = $this->createQueryBuilder('a');
        
        $total = $qb->select('COUNT(a.id)')
            ->getQuery()
            ->getSingleScalarResult();

        $pending = $this->createQueryBuilder('a')
            ->select('COUNT(a.id)')
            ->andWhere('a.status = :status')
            ->setParameter('status', 'pending')
            ->getQuery()
            ->getSingleScalarResult();

        $confirmed = $this->createQueryBuilder('a')
            ->select('COUNT(a.id)')
            ->andWhere('a.status = :status')
            ->setParameter('status', 'confirmed')
            ->getQuery()
            ->getSingleScalarResult();

        $today = $this->createQueryBuilder('a')
            ->select('COUNT(a.id)')
            ->andWhere('a.preferredDate = :today')
            ->setParameter('today', new \DateTimeImmutable('today'))
            ->getQuery()
            ->getSingleScalarResult();

        return [
            'total' => $total,
            'pending' => $pending,
            'confirmed' => $confirmed,
            'today' => $today
        ];
    }

    /**
     * Find appointments with service information
     */
    public function findAllWithService(): array
    {
        return $this->createQueryBuilder('a')
            ->leftJoin('a.service', 's')
            ->addSelect('s')
            ->orderBy('a.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Search appointments by patient info
     */
    public function searchByPatient(string $searchTerm): array
    {
        return $this->createQueryBuilder('a')
            ->leftJoin('a.service', 's')
            ->addSelect('s')
            ->andWhere('a.patientName LIKE :searchTerm OR a.email LIKE :searchTerm')
            ->setParameter('searchTerm', '%' . $searchTerm . '%')
            ->orderBy('a.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Count appointments by status
     */
    public function countByStatus(string $status): int
    {
        return $this->createQueryBuilder('a')
            ->select('COUNT(a.id)')
            ->andWhere('a.status = :status')
            ->setParameter('status', $status)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Find appointments by filters
     */
    public function findByFilters(?string $status = null, ?string $search = null): array
    {
        $qb = $this->createQueryBuilder('a')
            ->leftJoin('a.service', 's')
            ->addSelect('s');

        if ($status) {
            $qb->andWhere('a.status = :status')
               ->setParameter('status', $status);
        }

        if ($search) {
            $qb->andWhere('a.patientName LIKE :search OR a.email LIKE :search OR s.name LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        return $qb->orderBy('a.createdAt', 'DESC')
                  ->getQuery()
                  ->getResult();
    }
}
