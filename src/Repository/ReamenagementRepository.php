<?php

namespace App\Repository;

use App\Entity\Reamenagement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Reamenagement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reamenagement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reamenagement[]    findAll()
 * @method Reamenagement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReamenagementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reamenagement::class);
    }

    // /**
    //  * @return Reamenagement[] Returns an array of Reamenagement objects
    //  */
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
    public function findOneBySomeField($value): ?Reamenagement
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
