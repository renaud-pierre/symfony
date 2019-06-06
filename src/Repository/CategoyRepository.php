<?php

namespace App\Repository;

use App\Entity\Categoy;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Categoy|null find($id, $lockMode = null, $lockVersion = null)
 * @method Categoy|null findOneBy(array $criteria, array $orderBy = null)
 * @method Categoy[]    findAll()
 * @method Categoy[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoyRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Categoy::class);
    }

    // /**
    //  * @return Categoy[] Returns an array of Categoy objects
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
    public function findOneBySomeField($value): ?Categoy
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
