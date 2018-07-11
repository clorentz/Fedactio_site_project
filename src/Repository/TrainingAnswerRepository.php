<?php

namespace App\Repository;

use App\Entity\TrainingAnswer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TrainingAnswer|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrainingAnswer|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrainingAnswer[]    findAll()
 * @method TrainingAnswer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrainingAnswerRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TrainingAnswer::class);
    }

//    /**
//     * @return TrainingAnswer[] Returns an array of TrainingAnswer objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TrainingAnswer
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
