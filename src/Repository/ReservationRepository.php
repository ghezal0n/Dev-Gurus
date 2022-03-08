<?php

namespace App\Repository;

use App\Entity\Reservation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Reservation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reservation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reservation[]    findAll()
 * @method Reservation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservation::class);
    }

    // /**
    //  * @return Reservation[] Returns an array of Reservation objects
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
    public function findOneBySomeField($value): ?Reservation
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    function findReservationByClient(){ // function by QueryBuilder 
        return $this-> createQueryBuilder('r')
        ->join('r.user' , 'u')
        ->addSelect('u')
        ->where('r.guide_id=:id')
        ->setParameter('id',$id)
        ->getQuery()->getResult();
    }

    public function findbyguide()
    {
        $entityManager=$this->getEntityManager();
        $query=$entityManager
            ->createQueryBuilder("SELECT g.titre FROM APP\Entity\Reservation r , APP\Entity\ServiceGuide g   WHERE  r.guide_id= g.id")
        ;
        return $query->getResult();
    }

    public function findbyidJo($id)
    {
        $entityManager=$this->getEntityManager();
        $query=$entityManager
            ->createQueryBuilder("SELECT * FROM APP\Entity\Reservation  WHERE idjoueur= $id ")
        ;
        return $query->getResult();
    }
    public function findbyidJou($id)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.idjoueur= :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult()
            ;
    }
}
