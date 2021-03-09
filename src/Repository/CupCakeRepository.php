<?php

namespace App\Repository;

use App\Entity\CupCake;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CupCake|null find($id, $lockMode = null, $lockVersion = null)
 * @method CupCake|null findOneBy(array $criteria, array $orderBy = null)
 * @method CupCake[]    findAll()
 * @method CupCake[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CupCakeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CupCake::class);
    }

    // /**
    //  * @return CupCake[] Returns an array of CupCake objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CupCake
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
