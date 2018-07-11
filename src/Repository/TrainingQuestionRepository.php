<?php

namespace App\Repository;

use App\Entity\TrainingQuestion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TrainingQuestion|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrainingQuestion|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrainingQuestion[]    findAll()
 * @method TrainingQuestion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrainingQuestionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TrainingQuestion::class);
    }

//    /**
//     * @return TrainingQuestion[] Returns an array of TrainingQuestion objects
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
    public function findOneBySomeField($value): ?TrainingQuestion
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
