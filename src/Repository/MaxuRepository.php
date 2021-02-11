<?php

namespace App\Repository;

use App\Entity\Maxu;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Maxu|null find($id, $lockMode = null, $lockVersion = null)
 * @method Maxu|null findOneBy(array $criteria, array $orderBy = null)
 * @method Maxu[]    findAll()
 * @method Maxu[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MaxuRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Maxu::class);
    }

    // /**
    //  * @return Maxu[] Returns an array of Maxu objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Maxu
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
