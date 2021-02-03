<?php

namespace App\Repository;

use App\Entity\Plat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Plat|null find($id, $lockMode = null, $lockVersion = null)
 * @method Plat|null findOneBy(array $criteria, array $orderBy = null)
 * @method Plat[]    findAll()
 * @method Plat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Plat::class);
    }

    // /**
    //  * @return Plat[] Returns an array of Plat objects
    //  */
    public function findByRestaurant($value, $type)
    {
        $query = $this
            ->createQueryBuilder('plat')
            ->Where('plat.Restaurant = :value')
            ->setParameter('value', $value);

        if (!empty($type)) {
            $query = $query
                ->andWhere('plat.type = :type')
                ->setParameter('type', $type);
        }

        return $query->getQuery()->getResult();
    }
    
    // /**
    //  * @return Plat[] Returns an array of Plat objects
    //  */
    public function findRestaurant($value)
    {
        $query = $this
            ->createQueryBuilder('plat')
            ->Where('plat.id = :value')
            ->setParameter('value', $value);

        return $query->getQuery()->getResult();
    }

    /*
    public function findOneBySomeField($value): ?Plat
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
