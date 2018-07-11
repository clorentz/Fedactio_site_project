<?php

namespace App\Repository;

use App\Entity\InformationsItem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method InformationsItem|null find($id, $lockMode = null, $lockVersion = null)
 * @method InformationsItem|null findOneBy(array $criteria, array $orderBy = null)
 * @method InformationsItem[]    findAll()
 * @method InformationsItem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InformationsItemRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, InformationsItem::class);
    }

//    /**
//     * @return InformationsItem[] Returns an array of InformationsItem objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?InformationsItem
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
