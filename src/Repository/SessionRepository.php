<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\BranchOffice;
use App\Entity\ExerciseRoom;
use App\Entity\Session;
use Carbon\CarbonPeriod;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query\Expr\Join;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Session>
 *
 * @method Session|null find($id, $lockMode = null, $lockVersion = null)
 * @method Session|null findOneBy(array $criteria, array $orderBy = null)
 * @method Session[]    findAll()
 * @method Session[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SessionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Session::class);
    }

    public function findForBackendList(array $filters = [], bool $isExport = false): array
    {
        $qb = $this->createQueryBuilder('s');

        $qb
            ->select('s.id, s.type, s.dateStart, s.timeStart, s.availableCapacity')
            ->addSelect('e.name exerciseRoom, b.name branchOffice, d.name discipline')
            ->addSelect('ip.firstname instructor, s.status')
            ->join('s.exerciseRoom', 'e')
            ->join('s.discipline', 'd')
            ->join('s.instructor', 'i')
            ->join('i.profile', 'ip')
            ->join('e.branchOffice', 'b')
            ->leftJoin('s.reservations', 'r', Join::WITH, $qb->expr()->eq('r.isAvailable', ':isAvailable'))
            ->setParameter('isAvailable', true)
            ->orderBy('s.dateStart', 'asc')
            ->addOrderBy('s.timeStart', 'asc')
        ;

        if (!$isExport) {
            $qb
                ->addSelect('COUNT(r.session) reservations')
                ->groupBy('s.id')
            ;
        }

        if ($isExport) {
            $qb
                ->addSelect('ruser.name userName', 'ruser.lastname userLastname', 'r.placeNumber')
                ->leftJoin('r.user', 'ruser')
                ->addOrderBy('s.id')
                ->addOrderBy('r.placeNumber')
            ;
        }

        if (!empty($filters['type'])) {
            $qb
                ->andWhere('s.type = :type')
                ->setParameter('type', $filters['type'])
            ;
        }

        if (!empty($filters['discipline'])) {
            $qb
                ->andWhere('s.discipline = :discipline')
                ->setParameter('discipline', $filters['discipline'])
            ;
        }

        if (!empty($filters['instructor'])) {
            $qb
                ->andWhere('s.instructor = :instructor')
                ->setParameter('instructor', $filters['instructor'])
            ;
        }

        if (!empty($filters['branchOffice'])) {
            $qb
                ->andWhere('s.branchOffice = :branchOffice')
                ->setParameter('branchOffice', $filters['branchOffice'])
            ;
        }

        $dateStart = !empty($filters['date_start']) ? \DateTime::createFromFormat('d/m/Y', $filters['date_start']) : null;
        if ($dateStart) {
            $qb
                ->andWhere($qb->expr()->gte('s.dateStart', ':date_start'))
                ->setParameter('date_start', $dateStart->format('Y-m-d 00:00:00'))
            ;
        }

        $dateEnd = !empty($filters['date_end']) ? \DateTime::createFromFormat('d/m/Y', $filters['date_end']) : null;
        if ($dateEnd) {
            $qb
                ->andWhere($qb->expr()->lte('s.dateStart', ':date_end'))
                ->setParameter('date_end', $dateEnd->format('Y-m-d 23:59:59'))
            ;
        }

        if (isset($filters['status']) && '' !== $filters['status']) {
            $status = (int) $filters['status'];

            if (Session::STATUS_NOT_CANCELED === $status) {
                $qb
                    ->andWhere('s.status != :statusCancel')
                    ->setParameter('statusCancel', Session::STATUS_CANCEL)
                ;
            } else {
                $qb
                    ->andWhere('s.status = :status')
                    ->setParameter('status', $filters['status'])
                ;
            }
        }

        if (!empty($filters['assigned_branches'])) {
            $qb
                ->andWhere($qb->expr()->in('s.branchOffice', ':branches'))
                ->setParameter('branches', $filters['assigned_branches'])
            ;
        }

        if (!empty($filters['exerciseRoom'])) {
            $qb
                ->andWhere('s.exerciseRoom = :exerciseRoom')
                ->setParameter('exerciseRoom', $filters['exerciseRoom'])
            ;
        }

        if (!empty($filters['schedule'])) {
            $qb
                ->andWhere('s.timeStart = :timeStart')
                ->setParameter('timeStart', $filters['schedule'])
            ;
        }

        return $qb->getQuery()->getResult();
    }

    public function getCalendar(CarbonPeriod $period, BranchOffice $branchOffice): array
    {
        $results = $this->getQueryBuilderInPeriod($period, $branchOffice)->getQuery()->getResult();
        $grouped = [];

        /** @var Session $result */
        foreach ($results as $result) {
            $grouped[$result->getDateStart()->format('Y-m-d')][] = $result;
        }

        return $grouped;
    }

    public function hasSessionsInPeriod(CarbonPeriod $period, BranchOffice $branchOffice): bool
    {
        $qb = $this->getQueryBuilderInPeriod($period, $branchOffice);
        $qb->select($qb->expr()->count('s.id'));

        return (bool) $qb->getQuery()->getSingleScalarResult();
    }

    public function findAllGroupByDateStart()
    {
        $qb = $this->createQueryBuilder('s');

        $qb
            ->select('DISTINCT s.dateStart, b.name branchOffice, b.id branchOfficeId')
            ->join('s.exerciseRoom', 'e')
            ->join('e.branchOffice', 'b')
            ->where('s.dateStart >= :current_date')
            ->andWhere('s.status = :status')
            ->setParameter('current_date', new \DateTime())
            ->setParameter('status', Session::STATUS_OPEN)
            ->groupBy('s.dateStart, b.name')
            ->orderBy('s.dateStart', 'DESC')
        ;

        return $qb->getQuery()->getResult();
    }

    public function updateCapacity(ExerciseRoom $exerciseRoom): void
    {
        try {
            $now = new \DateTime();
            $total = $exerciseRoom->getCapacity() - count($exerciseRoom->getPlacesNotAvailable());

            $qb = $this->getEntityManager()->createQueryBuilder();
            $qb
                ->update(Session::class, 's')
                ->set('s.exerciseRoomCapacity', ':capacity')
                ->set('s.placesNotAvailable', ':notAvailable')
                ->set('s.availableCapacity', ':availableCapacity')
                ->where('s.exerciseRoom = :exerciseRoom')
                ->andWhere('CONCAT(s.dateStart, \' \', s.timeStart) >= :now')

                ->setParameter('capacity', $exerciseRoom->getCapacity())
                ->setParameter('notAvailable', implode(',', $exerciseRoom->getPlacesNotAvailable()))
                ->setParameter('availableCapacity', $total)
                ->setParameter('exerciseRoom', $exerciseRoom->getId())
                ->setParameter('now', $now)
            ;

            $qb->getQuery()->execute();
        } catch (\Exception $e) {
            // Nothing
        }
    }

    /**
     * @return Session[]
     */
    public function getNotClosed(): array
    {
        $currentDate = new \DateTime();
        $qb = $this->createQueryBuilder('s');

        $qb
            ->andWhere('s.status IN (:status)')
            ->andWhere('(
                ( s.dateStart < :current_date ) OR
                ( s.dateStart = :current_date AND DATEADD(s.timeStart, 1, \'HOUR\') <= :current_time )
            )')
            ->setParameter('status', [
                Session::STATUS_OPEN,
                Session::STATUS_FULL,
            ])
            ->setParameter('current_date', $currentDate->format('Y-m-d'))
            ->setParameter('current_time', $currentDate->format('H:i:s'))
        ;

        return $qb->getQuery()->getResult();
    }

    /**
     * @return Session[]
     */
    public function getForChange(\DateTimeInterface $dateStart): array
    {
        $start = \DateTimeImmutable::createFromInterface($dateStart)->setTime(0, 0, 0);
        $end = $start->modify('+30 days')->setTime(23, 59, 59);

        $qb = $this->createQueryBuilder('s');
        $qb
            ->addSelect('e', 'd', 'i', 'ip', 'b')
            ->join('s.exerciseRoom', 'e')
            ->join('s.discipline', 'd')
            ->join('s.instructor', 'i')
            ->join('i.profile', 'ip')
            ->join('e.branchOffice', 'b')
            ->where('s.dateStart >= :dateStart')
            ->andWhere('s.dateStart <= :dateEnd')
            ->andWhere('s.status = :statusOpen')
            ->orderBy('s.dateStart', 'ASC')
            ->addOrderBy('s.timeStart', 'ASC')
            ->addOrderBy('s.branchOffice', 'ASC')
            ->setParameter('dateStart', $start)
            ->setParameter('dateEnd', $end)
            ->setParameter('statusOpen', Session::STATUS_OPEN)
        ;

        return $qb->getQuery()->getResult();
    }

    private function getQueryBuilderInPeriod(CarbonPeriod $period, BranchOffice $branchOffice): QueryBuilder
    {
        $now = new \DateTime('today');

        $qb = $this->createQueryBuilder('s');
        $qb
            ->where($qb->expr()->between('s.dateStart', ':begin', ':end'))
            ->andWhere('s.branchOffice = :branch_office')
            ->andWhere($qb->expr()->in('s.status', ':status'))
            ->andWhere($qb->expr()->gte('s.dateStart', ':today'))
            ->setParameter('begin', $period->start->toDateString())
            ->setParameter('end', $period->end->toDateString())
            ->setParameter('branch_office', $branchOffice)
            ->setParameter('status', [
                Session::STATUS_OPEN,
                Session::STATUS_FULL,
            ])
            ->setParameter('today', $now)
            ->orderBy('s.timeStart', 'ASC')
        ;

        return $qb;
    }
}
