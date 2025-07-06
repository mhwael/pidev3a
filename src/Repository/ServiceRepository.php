<?php

namespace App\Repository;

use App\Entity\Service;
use App\Entity\Categorie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Service>
 */
class ServiceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Service::class);
    }

    /**
     * Save a service entity
     */
    public function save(Service $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Remove a service entity
     */
    public function remove(Service $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Find all active services for front office
     */
    public function findActiveServices(): array
    {
        return $this->createQueryBuilder('s')
            ->join('s.categorie', 'c')
            ->where('s.isActive = :active')
            ->setParameter('active', true)
            ->orderBy('s.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find services by category
     */
    public function findByCategory(Categorie $category, bool $activeOnly = true): array
    {
        $qb = $this->createQueryBuilder('s')
            ->where('s.categorie = :category')
            ->setParameter('category', $category)
            ->orderBy('s.name', 'ASC');

        if ($activeOnly) {
            $qb->andWhere('s.isActive = :active')
               ->setParameter('active', true);
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * Find services by speciality
     */
    public function findBySpeciality(string $speciality, bool $activeOnly = true): array
    {
        $qb = $this->createQueryBuilder('s')
            ->where('s.speciality = :speciality')
            ->setParameter('speciality', $speciality)
            ->orderBy('s.name', 'ASC');

        if ($activeOnly) {
            $qb->andWhere('s.isActive = :active')
               ->setParameter('active', true);
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * Search services by multiple criteria
     */
    public function search(array $criteria = []): array
    {
        $qb = $this->createQueryBuilder('s')
            ->join('s.categorie', 'c');

        // Search by name or speciality
        if (!empty($criteria['search'])) {
            $qb->andWhere('s.name LIKE :search OR s.speciality LIKE :search')
               ->setParameter('search', '%' . $criteria['search'] . '%');
        }

        // Filter by category
        if (!empty($criteria['category'])) {
            $qb->andWhere('s.categorie = :category')
               ->setParameter('category', $criteria['category']);
        }

        // Filter by location
        if (!empty($criteria['location'])) {
            $qb->andWhere('s.location LIKE :location')
               ->setParameter('location', '%' . $criteria['location'] . '%');
        }

        // Filter by speciality
        if (!empty($criteria['speciality'])) {
            $qb->andWhere('s.speciality = :speciality')
               ->setParameter('speciality', $criteria['speciality']);
        }

        // Only active services by default
        if (!isset($criteria['includeInactive']) || !$criteria['includeInactive']) {
            $qb->andWhere('s.isActive = :active')
               ->setParameter('active', true);
        }

        // Order by
        $orderBy = $criteria['orderBy'] ?? 'name';
        $direction = $criteria['direction'] ?? 'ASC';
        $qb->orderBy('s.' . $orderBy, $direction);

        return $qb->getQuery()->getResult();
    }

    /**
     * Find services available on a specific day
     */
    public function findAvailableOnDay(string $day): array
    {
        return $this->createQueryBuilder('s')
            ->where('s.isActive = :active')
            ->andWhere('JSON_EXTRACT(s.availableTimes, :dayPath) IS NOT NULL')
            ->andWhere('JSON_LENGTH(JSON_EXTRACT(s.availableTimes, :dayPath)) > 0')
            ->setParameter('active', true)
            ->setParameter('dayPath', '$.' . strtolower($day))
            ->orderBy('s.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Get recent services (for admin dashboard)
     */
    public function findRecent(int $limit = 5): array
    {
        return $this->createQueryBuilder('s')
            ->orderBy('s.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Get services grouped by category
     */
    public function findGroupedByCategory(bool $activeOnly = true): array
    {
        $qb = $this->createQueryBuilder('s')
            ->join('s.categorie', 'c')
            ->orderBy('c.type', 'ASC')
            ->addOrderBy('s.name', 'ASC');

        if ($activeOnly) {
            $qb->where('s.isActive = :active')
               ->setParameter('active', true);
        }

        $services = $qb->getQuery()->getResult();

        // Group by category
        $grouped = [];
        foreach ($services as $service) {
            $categoryType = $service->getCategorie()->getType();
            if (!isset($grouped[$categoryType])) {
                $grouped[$categoryType] = [];
            }
            $grouped[$categoryType][] = $service;
        }

        return $grouped;
    }

    /**
     * Get distinct specialities
     */
    public function getDistinctSpecialities(): array
    {
        $result = $this->createQueryBuilder('s')
            ->select('DISTINCT s.speciality')
            ->where('s.isActive = :active')
            ->setParameter('active', true)
            ->orderBy('s.speciality', 'ASC')
            ->getQuery()
            ->getScalarResult();

        return array_column($result, 'speciality');
    }

    /**
     * Get distinct locations
     */
    public function getDistinctLocations(): array
    {
        $result = $this->createQueryBuilder('s')
            ->select('DISTINCT s.location')
            ->where('s.isActive = :active')
            ->setParameter('active', true)
            ->orderBy('s.location', 'ASC')
            ->getQuery()
            ->getScalarResult();

        return array_column($result, 'location');
    }

    /**
     * Get statistics for admin dashboard
     */
    public function getStatistics(): array
    {
        $qb = $this->createQueryBuilder('s')
            ->join('s.categorie', 'c')
            ->select([
                'COUNT(s.id) as totalServices',
                'SUM(CASE WHEN s.isActive = true THEN 1 ELSE 0 END) as activeServices',
                'SUM(CASE WHEN s.isActive = false THEN 1 ELSE 0 END) as inactiveServices',
                'COUNT(DISTINCT s.speciality) as distinctSpecialities',
                'COUNT(DISTINCT s.location) as distinctLocations',
                'c.type as categoryType',
                'COUNT(s.id) as servicesPerCategory'
            ])
            ->groupBy('c.type');

        return $qb->getQuery()->getResult();
    }

    /**
     * Find services by price range
     */
    public function findByPriceRange(?float $minPrice = null, ?float $maxPrice = null): array
    {
        $qb = $this->createQueryBuilder('s')
            ->where('s.isActive = :active')
            ->setParameter('active', true);

        if ($minPrice !== null) {
            $qb->andWhere('s.price >= :minPrice')
               ->setParameter('minPrice', $minPrice);
        }

        if ($maxPrice !== null) {
            $qb->andWhere('s.price <= :maxPrice')
               ->setParameter('maxPrice', $maxPrice);
        }

        return $qb->orderBy('s.price', 'ASC')
                  ->getQuery()
                  ->getResult();
    }
}
