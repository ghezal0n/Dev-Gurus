<?php

namespace App\Repository;

use App\Entity\ServiceGuide;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ServiceGuide|null find($id, $lockMode = null, $lockVersion = null)
 * @method ServiceGuide|null findOneBy(array $criteria, array $orderBy = null)
 * @method ServiceGuide[]    findAll()
 * @method ServiceGuide[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServiceGuideRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ServiceGuide::class);
    }

    // /**
    //  * @return ServiceGuide[] Returns an array of ServiceGuide objects
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
    public function findOneBySomeField($value): ?ServiceGuide
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function findCoachByGuide($id)
    {
        $entityManager=$this->getEntityManager();
        $query=$entityManager
            ->createQueryBuilder("SELECT coach_id FROM APP\Entity\ServiceGuide  WHERE id= $id ")
        ;
        return $query->getResult();
    }

    public function findByCoach($id)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.id= :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult()
            ;
    }

    

    function ListGuideByCoach($id){ // function by QueryBuilder 
        return $this-> createQueryBuilder('G')
        ->join('G.user' , 'a')
        ->addSelect('a')
        ->where('a.coach_id=:id')
        ->setParameter('coach_id',$id)
        ->getQuery()->getResult();
    }

    /*public function findBySearch(SearchData $search): array
    {
        return $this->createQueryBuilder('p')

            ->getQuery()
            ->getResult()
        ;
    }*/
    public function findBySearch($mots= null ){
        $query = $this->createQueryBuilder('p');

        if($mots != null){
            $query->Where('p.titre like :texte')
                ->setParameter('texte',$mots);
            return $query->getQuery()->getResult();
        }


    }

}
