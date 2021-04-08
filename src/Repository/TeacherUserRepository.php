<?php

namespace App\Repository;

use App\Entity\TeacherUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TeacherUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method TeacherUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method TeacherUser[]    findAll()
 * @method TeacherUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TeacherUserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TeacherUser::class);
    }

    // /**
    //  * @return TeacherUser[] Returns an array of TeacherUser objects
    //  */
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
    public function findOneBySomeField($value): ?TeacherUser
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
