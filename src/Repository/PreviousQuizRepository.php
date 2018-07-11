<?php

namespace App\Repository;

use App\Entity\PreviousQuiz;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PreviousQuiz|null find($id, $lockMode = null, $lockVersion = null)
 * @method PreviousQuiz|null findOneBy(array $criteria, array $orderBy = null)
 * @method PreviousQuiz[]    findAll()
 * @method PreviousQuiz[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PreviousQuizRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PreviousQuiz::class);
    }

//    /**
//     * @return PreviousQuiz[] Returns an array of PreviousQuiz objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PreviousQuiz
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
