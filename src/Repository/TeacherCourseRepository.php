<?php

namespace App\Repository;

use App\Entity\TeacherCourse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TeacherCourse|null find($id, $lockMode = null, $lockVersion = null)
 * @method TeacherCourse|null findOneBy(array $criteria, array $orderBy = null)
 * @method TeacherCourse[]    findAll()
 * @method TeacherCourse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TeacherCourseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TeacherCourse::class);
    }

    // /**
    //  * @return TeacherCourse[] Returns an array of TeacherCourse objects
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
    public function findOneBySomeField($value): ?TeacherCourse
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
