<?php

namespace App\Repository;

use App\Entity\ReserPassword;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ReserPassword|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReserPassword|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReserPassword[]    findAll()
 * @method ReserPassword[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReserPasswordRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReserPassword::class);
    }

    // /**
    //  * @return ReserPassword[] Returns an array of ReserPassword objects
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
    public function findOneBySomeField($value): ?ReserPassword
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
