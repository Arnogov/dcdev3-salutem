<?php

namespace App\Repository;
use App\Entity\OpeningHour;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
/**
 * @method OpeningHour|null find($id, $lockMode = null, $lockVersion = null)
 * @method OpeningHour|null findOneBy(array $criteria, array $orderBy = null)
 * @method OpeningHour[]    findAll()
 * @method OpeningHour[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OpeningHourRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OpeningHour::class);
    }
    // /**
    //  * @return OpeningHour[] Returns an array of OpeningHour objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
    /*
    public function findOneBySomeField($value): ?OpeningHour
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}