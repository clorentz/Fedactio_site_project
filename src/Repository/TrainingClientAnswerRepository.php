<?php

namespace App\Repository;

use App\Entity\TrainingClientAnswer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TrainingClientAnswer|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrainingClientAnswer|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrainingClientAnswer[]    findAll()
 * @method TrainingClientAnswer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrainingClientAnswerRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TrainingClientAnswer::class);
    }

//    /**
//     * @return TrainingClientAnswer[] Returns an array of TrainingClientAnswer objects
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
    public function findOneBySomeField($value): ?TrainingClientAnswer
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
