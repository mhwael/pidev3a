<?php

namespace App\Repository;

use App\Entity\Categorie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Categorie>
 */
class CategorieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Categorie::class);
    }

    /**
     * Save a category entity
     */
    public function save(Categorie $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Remove a category entity
     */
    public function remove(Categorie $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Find all categories with their service count
     */
    public function findAllWithServiceCount(): array
    {
        return $this->createQueryBuilder('c')
            ->leftJoin('c.services', 's')
            ->addSelect('s')
            ->orderBy('c.type', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find categories that have active services
     */
    public function findCategoriesWithActiveServices(): array
    {
        return $this->createQueryBuilder('c')
            ->innerJoin('c.services', 's')
            ->where('s.isActive = :active')
            ->setParameter('active', true)
            ->distinct()
            ->orderBy('c.type', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find category by type
     */
    public function findByType(string $type): ?Categorie
    {
        return $this->createQueryBuilder('c')
            ->where('c.type = :type')
            ->setParameter('type', $type)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * Get categories for dropdown/select options
     */
    public function findForChoices(): array
    {
        $categories = $this->createQueryBuilder('c')
            ->orderBy('c.type', 'ASC')
            ->getQuery()
            ->getResult();

        $choices = [];
        foreach ($categories as $category) {
            $choices[$category->getType()] = $category->getId();
        }

        return $choices;
    }

    /**
     * Search categories by type
     */
    public function searchByType(string $searchTerm): array
    {
        return $this->createQueryBuilder('c')
            ->where('c.type LIKE :searchTerm')
            ->setParameter('searchTerm', '%' . $searchTerm . '%')
            ->orderBy('c.type', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Get categories ordered by creation date
     */
    public function findOrderedByCreationDate(string $order = 'DESC'): array
    {
        $qb = $this->createQueryBuilder('c');
        
        if ($order === 'ASC') {
            $qb->orderBy('c.createdAt', 'ASC');
        } else {
            $qb->orderBy('c.createdAt', 'DESC');
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * Check if a category can be safely deleted (no associated services)
     */
    public function canBeDeleted(Categorie $category): bool
    {
        $serviceCount = $this->getEntityManager()
            ->getRepository(\App\Entity\Service::class)
            ->count(['categorie' => $category]);

        return $serviceCount === 0;
    }

    /**
     * Get statistics for admin dashboard
     */
    public function getStatistics(): array
    {
        $qb = $this->createQueryBuilder('c')
            ->leftJoin('c.services', 's')
            ->select([
                'c.type',
                'COUNT(c.id) as categoryCount',
                'COUNT(s.id) as totalServices',
                'SUM(CASE WHEN s.isActive = true THEN 1 ELSE 0 END) as activeServices'
            ])
            ->groupBy('c.type')
            ->orderBy('c.type', 'ASC');

        return $qb->getQuery()->getResult();
    }
}
