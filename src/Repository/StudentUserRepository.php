<?php

namespace App\Repository;

use App\Entity\StudentUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method StudentUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method StudentUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method StudentUser[]    findAll()
 * @method StudentUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StudentUserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StudentUser::class);
    }

    // /**
    //  * @return StudentUser[] Returns an array of StudentUser objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?StudentUser
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
