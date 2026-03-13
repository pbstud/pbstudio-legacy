<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Reservation;
use App\Entity\Session;
use App\Entity\Transaction;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reservation>
 *
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

    public function getTotalReservationsForSession(Session $session): int
    {
        $qb = $this
            ->createQueryBuilder('r')
            ->select('COUNT(r)')
            ->where('r.session = :session')
            ->andWhere('r.isAvailable = :isAvailable')
            ->setParameters([
                'session' => $session,
                'isAvailable' => true,
            ])
        ;

        return (int) $qb->getQuery()->getSingleScalarResult();
    }

    public function getTotalReservationsForTransaction(Transaction $transaction): int
    {
        $qb = $this
            ->createQueryBuilder('r')
            ->select('COUNT(r)')
            ->join('r.session', 's')
            ->where('r.transaction = :transaction')
            ->andWhere('r.isAvailable = :isAvailable')
            ->andWhere('s.status != :sessionStatusCancel')
            ->setParameters([
                'transaction' => $transaction,
                'isAvailable' => true,
                'sessionStatusCancel' => Session::STATUS_CANCEL,
            ])
        ;

        return (int) $qb->getQuery()->getSingleScalarResult();
    }

    /**
     * @return Reservation[]
     */
    public function getReservationsBySession(Session $session): array
    {
        $qb = $this
            ->createQueryBuilder('r')
            ->addSelect('u')
            ->join('r.user', 'u')
            ->where('r.session = :session')
            ->andWhere('r.isAvailable = :isAvailable')
            ->setParameters([
                'session' => $session,
                'isAvailable' => true,
            ])
        ;

        return $qb->getQuery()->getResult();
    }

    public function getTotalAvailableByTransaction(Transaction $transaction): int
    {
        $qb = $this->createQueryBuilder('r');

        $qb
            ->select('COUNT(r)')
            ->join('r.session', 's')
            ->where('r.transaction = :transaction')
            ->andWhere('r.isAvailable = :available')
            ->andWhere('s.status IN (:session_status)')
            ->setParameter('transaction', $transaction)
            ->setParameter('available', true)
            ->setParameter('session_status', [
                Session::STATUS_OPEN,
                Session::STATUS_FULL,
            ])
        ;

        return $qb->getQuery()->getSingleScalarResult();
    }

    public function getTotalUsedByTransaction(Transaction $transaction): int
    {
        $qb = $this->createQueryBuilder('r');

        $qb
            ->select('COUNT(r)')
            ->join('r.session', 's')
            ->where('r.transaction = :transaction')
            ->andWhere('r.isAvailable = :available')
            ->andWhere('s.status = :session_status')
            ->setParameter('transaction', $transaction)
            ->setParameter('available', true)
            ->setParameter('session_status', Session::STATUS_CLOSED)
        ;

        return $qb->getQuery()->getSingleScalarResult();
    }

    /**
     * @return Reservation[]|int
     */
    public function getSessionsTakenByUser(User $user, bool $count = false): array|int
    {
        $qb = $this->createQueryBuilder('r');

        $qb
            ->join('r.session', 's')
            ->join('r.transaction', 't')
            ->where('r.user = :user')
            ->andWhere('r.isAvailable = true')
            ->andWhere('s.status = :session_status')
            ->andWhere('t.isExpired = :isExpired')
            ->andWhere('t.status = :isPaid')
            ->setParameters([
                'user' => $user,
                'session_status' => Session::STATUS_CLOSED,
                'isExpired' => false,
                'isPaid' => Transaction::STATUS_PAID,
            ])
            ->orderBy('s.dateStart', 'DESC')
            ->addOrderBy('s.timeStart', 'DESC')
        ;

        if ($count) {
            $qb->select('COUNT(r)');

            return $qb->getQuery()->getSingleScalarResult();
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * @return Reservation[]|int
     */
    public function getReservedSessionsByUser(User $user, bool $count = false): array|int
    {
        $qb = $this->createQueryBuilder('r');

        $qb
            ->addSelect('s', 'd', 'i', 'p', 'bo', 'er')
            ->join('r.session', 's')
            ->join('s.discipline', 'd')
            ->join('s.instructor', 'i')
            ->join('i.profile', 'p')
            ->join('s.branchOffice', 'bo')
            ->join('s.exerciseRoom', 'er')
            ->where('r.user = :user')
            ->andWhere('r.isAvailable = true')
            ->andWhere('s.status IN (:session_status)')
            ->setParameters([
                'user' => $user,
                'session_status' => [Session::STATUS_OPEN, Session::STATUS_FULL],
            ])
            ->orderBy('s.dateStart', 'ASC')
            ->addOrderBy('s.timeStart', 'ASC')
        ;

        if ($count) {
            $qb->select('COUNT(r)');

            return $qb->getQuery()->getSingleScalarResult();
        }

        return $qb->getQuery()->getResult();
    }

    public function getReservationPlacesByUserSession(User $user, Session $session): array
    {
        $qb = $this->createQueryBuilder('r');

        $qb
            ->select('r.placeNumber')
            ->where('r.session = :session')
            ->andWhere('r.user = :user')
            ->andWhere('r.isAvailable = :isAvailable')
            ->setParameter('session', $session)
            ->setParameter('user', $user)
            ->setParameter('isAvailable', true)
        ;

        return $qb->getQuery()->getSingleColumnResult();
    }

    public function hasUnlimitedReservationsByUserSession(User $user, Session $session): bool
    {
        $qb = $this->createQueryBuilder('r');

        $qb
            ->select($qb->expr()->count('r.id'))
            ->join('r.transaction', 't')
            ->where('r.session = :session')
            ->andWhere('r.user = :user')
            ->andWhere('r.isAvailable = :isAvailable')
            ->andWhere('t.packageIsUnlimited = :packageUnlimited')
            ->setParameter('session', $session)
            ->setParameter('user', $user)
            ->setParameter('isAvailable', true)
            ->setParameter('packageUnlimited', true)
        ;

        return $qb->getQuery()->getSingleScalarResult() > 0;
    }

    public function getUnlimitedReservationsByUser(User $user, \DateTimeInterface $date): int
    {
        $qb = $this->createQueryBuilder('r');

        $qb
            ->select($qb->expr()->count('r.id'))
            ->join('r.session', 's')
            ->join('r.transaction', 't')
            ->where('s.dateStart = :date')
            ->andWhere('r.user = :user')
            ->andWhere('t.packageIsUnlimited = :packageUnlimited')
            ->andWhere('r.isAvailable = :isAvailable')
            ->setParameter('date', $date)
            ->setParameter('user', $user)
            ->setParameter('packageUnlimited', true)
            ->setParameter('isAvailable', true)
        ;

        return $qb->getQuery()->getSingleScalarResult();
    }

    public function getByUserList(User $user, array $filters): QueryBuilder
    {
        $qb = $this->createQueryBuilder('r');

        $qb
            ->addSelect('s', 'i', 'p', 'bo', 'er')
            ->join('r.session', 's')
            ->join('s.instructor', 'i')
            ->join('i.profile', 'p')
            ->join('s.branchOffice', 'bo')
            ->join('s.exerciseRoom', 'er')
            ->where('r.user = :user')
            ->andWhere('s.status != :session_status_cancel')
            ->orderBy('r.createdAt', 'DESC')
            ->setParameter('user', $user)
            ->setParameter('session_status_cancel', Session::STATUS_CANCEL)
        ;

        if ('' !== $filters['filter_status']) {
            $qb
                ->andWhere('r.isAvailable = :isAvailable')
                ->setParameter('isAvailable', $filters['filter_status'])
            ;
        }

        if ($filters['filter_session_date_start'] && $filters['filter_session_date_end']) {
            $dateStart = \DateTime::createFromFormat('d/m/Y', $filters['filter_session_date_start']);
            $dateEnd = \DateTime::createFromFormat('d/m/Y', $filters['filter_session_date_end']);

            $qb
                ->andWhere('s.dateStart BETWEEN :date_start AND :date_end')
                ->setParameter('date_start', $dateStart->format('Y-m-d 00:00:00'))
                ->setParameter('date_end', $dateEnd->format('Y-m-d 23:59:59'))
            ;
        } elseif ($filters['filter_session_date_start']) {
            $dateStart = \DateTime::createFromFormat('d/m/Y', $filters['filter_session_date_start']);

            $qb
                ->andWhere('s.dateStart >= :date_start')
                ->setParameter('date_start', $dateStart->format('Y-m-d 00:00:00'))
            ;
        } elseif ($filters['filter_session_date_end']) {
            $dateEnd = \DateTime::createFromFormat('d/m/Y', $filters['filter_session_date_end']);

            $qb
                ->andWhere('s.dateStart <= :date_end')
                ->setParameter('date_end', $dateEnd->format('Y-m-d 23:59:59'))
            ;
        }

        if (!empty($filters['filter_branch_office'])) {
            $qb
                ->andWhere('s.branchOffice = :branchOffice')
                ->setParameter('branchOffice', $filters['filter_branch_office'])
            ;
        }

        if (!empty($filters['filter_exercise_room'])) {
            $qb
                ->andWhere('s.exerciseRoom = :exerciseRoom')
                ->setParameter('exerciseRoom', $filters['filter_exercise_room'])
            ;
        }

        return $qb;
    }

    public function getGroupedInstructorStudio(\DateTime $from, \DateTime $to): array
    {
        $qb = $this->createQueryBuilder('r');

        $qb
            ->select('COUNT(r.id) as reservations')
            ->addSelect('b.id as studioId', 'b.name as studio')
            ->addSelect('i.id as instructorId', 'p.firstname', 'p.paternalSurname', 'p.maternalSurname')
            ->join('r.session', 's')
            ->join('s.instructor', 'i')
            ->join('i.profile', 'p')
            ->join('s.branchOffice', 'b')
            ->where($qb->expr()->between('s.dateStart', ':from', ':to'))
            ->andWhere('r.isAvailable = :isAvailable')
            ->andWhere('s.status = :statusClosed')
            ->groupBy('s.branchOffice')
            ->addGroupBy('s.instructor')
            ->orderBy('b.name', 'ASC')
            ->addOrderBy('p.firstname', 'ASC')
            ->setParameter('from', $from->format('Y-m-d'))
            ->setParameter('to', $to->format('Y-m-d'))
            ->setParameter('isAvailable', true)
            ->setParameter('statusClosed', Session::STATUS_CLOSED)
        ;

        return $qb->getQuery()->getScalarResult();
    }

    public function getGroupedByDay(?\DateTime $from = null): array
    {
        $qb = $this->createQueryBuilder('r');

        $qb
            ->select('COUNT(r.id) as reservations')
            ->addSelect('DAYNAME(s.dateStart) as day')
            ->addSelect('b.id as studioId', 'b.name as studio')
            ->join('r.session', 's')
            ->join('s.branchOffice', 'b')
            ->where('r.isAvailable = :isAvailable')
            ->andWhere('b.public = :public')
            ->groupBy('s.branchOffice')
            ->addGroupBy('day')
            ->orderBy('reservations', 'DESC')
            ->setParameter('isAvailable', true)
            ->setParameter('public', true)
        ;

        if ($from) {
            $qb
                ->andWhere('s.dateStart >= :from')
                ->setParameter('from', $from->format('Y-m-d'));
        }

        return $qb->getQuery()->getScalarResult();
    }

    public function getGroupedBySchedule(?\DateTime $from = null): array
    {
        $qb = $this->createQueryBuilder('r');

        $qb
            ->select('COUNT(r.id) as reservations')
            ->addSelect('s.timeStart as schedule')
            ->addSelect('b.id as studioId', 'b.name as studio')
            ->join('r.session', 's')
            ->join('s.branchOffice', 'b')
            ->where('r.isAvailable = :isAvailable')
            ->andWhere('b.public = :public')
            ->groupBy('s.branchOffice')
            ->addGroupBy('s.timeStart')
            ->orderBy('reservations', 'DESC')
            ->setParameter('isAvailable', true)
            ->setParameter('public', true)
        ;

        if ($from) {
            $qb
                ->andWhere('s.dateStart >= :from')
                ->setParameter('from', $from->format('Y-m-d'));
        }

        return $qb->getQuery()->getScalarResult();
    }

    public function getStudiosGroupedByCustomer(\DateTime $from): array
    {
        $qb = $this->createQueryBuilder('r');

        $qb
            ->select('b.id')
            ->distinct()
            ->join('r.session', 's')
            ->join('s.branchOffice', 'b')
            ->where('DATE(r.createdAt) >= :from')
            ->andWhere('r.isAvailable = :isAvailable')
            ->andWhere('b.public = :public')
            ->orderBy('b.name', 'ASC')
            ->setParameter('from', $from->format('Y-m-d'))
            ->setParameter('isAvailable', true)
            ->setParameter('public', true)
        ;

        return $qb->getQuery()->getSingleColumnResult();
    }

    public function getGroupedByCustomer(int $studioId, \DateTime $from): array
    {
        $qb = $this->createQueryBuilder('r');

        $qb
            ->select('COUNT(r.id) as reservations')
            ->addSelect('u.email', 'CONCAT(u.name, \' \', u.lastname) as customer')
            ->addSelect('b.id as studioId', 'b.name as studio')
            ->join('r.session', 's')
            ->join('s.branchOffice', 'b')
            ->join('r.user', 'u')
            ->join('r.transaction', 't')
            ->where('DATE(r.createdAt) >= :from')
            ->andWhere('s.branchOffice = :studio')
            ->andWhere('r.isAvailable = :isAvailable')
            ->andWhere('t.chargeMethod != :notChargeMethod')
            ->groupBy('u.id')
            ->orderBy('reservations', 'DESC')
            ->setParameter('from', $from->format('Y-m-d'))
            ->setParameter('studio', $studioId)
            ->setParameter('isAvailable', true)
            ->setParameter('notChargeMethod', Transaction::CHARGE_METHOD_FREE)
            ->setMaxResults(5)
        ;

        return $qb->getQuery()->getScalarResult();
    }

    public function getGroupedByExerciseRoom(?\DateTime $from = null): array
    {
        $qb = $this->createQueryBuilder('r');

        $qb
            ->select('COUNT(r.id) as reservations')
            ->addSelect('e.id as exerciseRoomId')
            ->join('r.session', 's')
            ->join('s.exerciseRoom', 'e')
            ->where('s.dateStart >= :from')
            ->andWhere('s.status != :statusCancel')
            ->andWhere('r.isAvailable = :isAvailable')
            ->groupBy('s.exerciseRoom')
            ->setParameter('statusCancel', Session::STATUS_CANCEL)
            ->setParameter('from', $from->format('Y-m-d'))
            ->setParameter('isAvailable', true)
        ;

        return $qb->getQuery()->getScalarResult();
    }

    /**
     * Encuentra reservaciones activas en sesión con lugares específicos
     * Utilizado para detectar conflictos cuando se deshabilitan asientos
     * 
     * @param Session $session Sesión a evaluar
     * @param array $placeNumbers Asientos a verificar [1, 3, 5]
     * @return Reservation[] Array de reservaciones afectadas
     */
    public function findActiveBySessionAndPlaces(Session $session, array $placeNumbers): array
    {
        if (empty($placeNumbers)) {
            return [];
        }

        return $this->createQueryBuilder('r')
            ->addSelect('u', 't')  // Eager load de User y Transaction para evitar N+1
            ->join('r.user', 'u')
            ->join('r.transaction', 't')
            ->where('r.session = :session')
            ->andWhere('r.isAvailable = :isAvailable')
            ->andWhere('r.placeNumber IN (:places)')
            ->setParameter('session', $session)
            ->setParameter('isAvailable', true)
            ->setParameter('places', $placeNumbers)
            ->orderBy('r.placeNumber', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
