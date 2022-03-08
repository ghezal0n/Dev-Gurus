<?php

namespace App\Repository;

use App\Entity\Matchs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Matchs|null find($id, $lockMode = null, $lockVersion = null)
 * @method Matchs|null findOneBy(array $criteria, array $orderBy = null)
 * @method Matchs[]    findAll()
 * @method Matchs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MatchsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Matchs::class);
    }

    // /**
    //  * @return Matchs[] Returns an array of Matchs objects
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
    public function findOneBySomeField($value): ?Matchs
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function getUpcomingMatchs()
    {
        return $this
            ->createQueryBuilder('m')
            ->addOrderBy('m.DateMatch', 'ASC')
            ->andWhere('m.DateMatch > :now')
            ->setMaxResults(5)
            ->setParameter('now', new \DateTime())
            ->getQuery()
            ->execute()
        ;
    }
    public function getLatestMatchs()
    {
        return $this
            ->createQueryBuilder('m')
            ->addOrderBy('m.DateMatch', 'ASC')
            ->andWhere('m.DateMatch <= :now')
            ->setMaxResults(3)
            ->setParameter('now', new \DateTime())
            ->getQuery()
            ->execute()
        ;
    }
}
