<?php

namespace App\Repository;

use App\Entity\Reservation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ReservationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservation::class);
    }

    public function findAllByInterval(\DateTimeInterface $from, \DateTimeInterface $to): array {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            "SELECT r
            FROM App\Entity\Reservation r
            WHERE
            (r.from <= :from_time AND r.to >= :to_time) OR
            (r.from >= :from_time AND r.to <= :to_time)"
        )
            ->setParameter('from_time', $from)
            ->setParameter('to_time', $to);

        return $query->getResult();
    }
}