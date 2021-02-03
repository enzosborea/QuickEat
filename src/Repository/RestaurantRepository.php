<?php

namespace App\Repository;

use App\Data\SearchData;
use App\Entity\Restaurant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Restaurant|null find($id, $lockMode = null, $lockVersion = null)
 * @method Restaurant|null findOneBy(array $criteria, array $orderBy = null)
 * @method Restaurant[]    findAll()
 * @method Restaurant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RestaurantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Restaurant::class);
    }

    // /**
    //  * @return Restaurant[]
    //  */
    
    public function findByFilter(SearchData $search)
    {
        $query = $this
            ->createQueryBuilder('restaurant')
            ->select('Localisation', 'restaurant')
            ->join('restaurant.Localisation', 'Localisation');

        if (!empty($search->name)) {
            $query = $query
                ->andWhere('restaurant.name LIKE :name')
                ->setParameter('name', "%{$search->name}%");
        }
        if (!empty($search->city)) {
            $query = $query
                ->andWhere('Localisation.city LIKE :city')
                ->setParameter('city', "%{$search->city}%");
        }
        if (!empty($search->categories)) {
            $query = $query
                ->andWhere('restaurant.categories LIKE :categories')
                ->setParameter('categories', "%{$search->categories}%");
        }



        return $query->getQuery()->getResult();
    }

    public function findByRestaurateur($value)
    {
        $query = $this
            ->createQueryBuilder('restaurant')
            ->Where('restaurant.user = :value')
            ->setParameter('value', $value);

        return $query->getQuery()->getResult();
    }

    public function findById($value)
    {
        $query = $this
            ->createQueryBuilder('restaurant')
            ->Where('restaurant.id = :value')
            ->setParameter('value', $value);

        return $query->getQuery()->getResult();
    }
}
