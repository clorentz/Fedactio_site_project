<?php

namespace App\Repository;

use App\Entity\TrainingQuiz;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TrainingQuiz|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrainingQuiz|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrainingQuiz[]    findAll()
 * @method TrainingQuiz[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrainingQuizRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TrainingQuiz::class);
    }

//    /**
//     * @return TrainingQuiz[] Returns an array of TrainingQuiz objects
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
    public function findOneBySomeField($value): ?TrainingQuiz
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
