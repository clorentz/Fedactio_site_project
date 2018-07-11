<?php

namespace App\Repository;

use App\Entity\RegulationItem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method RegulationItem|null find($id, $lockMode = null, $lockVersion = null)
 * @method RegulationItem|null findOneBy(array $criteria, array $orderBy = null)
 * @method RegulationItem[]    findAll()
 * @method RegulationItem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RegulationItemRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, RegulationItem::class);
    }

//    /**
//     * @return RegulationItem[] Returns an array of RegulationItem objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RegulationItem
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
