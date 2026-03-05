<?php

namespace App\Repository;

use App\Entity\SessionAudit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SessionAudit>
 */
class SessionAuditRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SessionAudit::class);
    }

    /**
     * Obtiene auditoría de cambios en una sesión
     */
    public function findBySession($session): array
    {
        return $this->createQueryBuilder('a')
            ->where('a.session = :session')
            ->setParameter('session', $session)
            ->orderBy('a.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Obtiene auditoría por administrador
     */
    public function findByAdminUser($user): array
    {
        return $this->createQueryBuilder('a')
            ->where('a.adminUser = :user')
            ->setParameter('user', $user)
            ->orderBy('a.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }
}
