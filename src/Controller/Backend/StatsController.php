<?php

declare(strict_types=1);

namespace App\Controller\Backend;

use App\Entity\Transaction;
use App\Repository\ConfigurationRepository;
use App\Repository\ExerciseRoomRepository;
use App\Repository\ReservationRepository;
use App\Repository\TransactionRepository;
use App\Repository\UserRepository;
use Carbon\Carbon;
use Carbon\CarbonImmutable;
use Carbon\CarbonPeriod;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/backend/stats')]
#[IsGranted('ROLE_ADMIN')]
class StatsController extends AbstractController
{
    public function __construct(
        private readonly TransactionRepository $transactionRepository,
        private readonly UserRepository $userRepository,
        private readonly ReservationRepository $reservationRepository,
        private readonly ConfigurationRepository $configurationRepository,
        private readonly ExerciseRoomRepository $exerciseRoomRepository,
    ) {
    }

    #[Route('/', name: 'backend_stats', methods: ['GET'])]
    public function index(): Response
    {
        $now = CarbonImmutable::today();
        $currentMonth = $now->startOfMonth();
        $currentYear = $now->startOfYear();
        $currentWeek = $now->startOfWeek();

        $amountDaily = $this->transactionRepository->getTotalAmount($now->toDate());
        $amountWeekly = $this->transactionRepository->getTotalAmount($currentWeek->toDate());
        $amountMonthly = $this->transactionRepository->getTotalAmount($currentMonth->toDate());
        $amountAnnually = $this->transactionRepository->getTotalAmount($currentYear->toDate());
        $amountProcessed = $this->transactionRepository->getTotalAmount();

        $totalUsers = $this->userRepository->getTotal();
        $totalUsersMonthly = $this->userRepository->getTotal($currentMonth->toDate());
        $totalUsersActive = $this->userRepository->getTotalWithTransactionActive();

        $studioInstructors = $this->getInstructorReservations();
        $studioExerciseRooms = $this->getStudiosExerciseRooms();

        $ranking = $this->getRanking();

        $totalNoDiscountAnnually = $this->transactionRepository->getTotalAmount($currentYear->toDate(), true);
        $totalNoDiscountMonthly = $this->transactionRepository->getTotalAmount($currentMonth->toDate(), true);

        $totalDiscountAnnually = $this->transactionRepository->getTotalAmount($currentYear->toDate(), true, true);
        $totalDiscountMonthly = $this->transactionRepository->getTotalAmount($currentMonth->toDate(), true, true);

        $totalCashAnnually = $this->transactionRepository->getTotalByChargeMethod(
            Transaction::CHARGE_METHOD_CASH,
            $currentYear->toDate()
        );
        $totalCashMonthly = $this->transactionRepository->getTotalByChargeMethod(
            Transaction::CHARGE_METHOD_CASH,
            $currentMonth->toDate()
        );

        $totalCardAnnually = $this->transactionRepository->getTotalByChargeMethod(
            Transaction::CHARGE_METHOD_CARD,
            $currentYear->toDate()
        );
        $totalCardMonthly = $this->transactionRepository->getTotalByChargeMethod(
            Transaction::CHARGE_METHOD_CARD,
            $currentMonth->toDate()
        );

        $totalTerminalAnnually = $this->transactionRepository->getTotalByChargeMethod(
            Transaction::CHARGE_METHOD_POS,
            $currentYear->toDate()
        );
        $totalTerminalMonthly = $this->transactionRepository->getTotalByChargeMethod(
            Transaction::CHARGE_METHOD_POS,
            $currentMonth->toDate()
        );


        return $this->render('backend/stats/index.html.twig', [
            'amountDaily' => $amountDaily,
            'amountWeekly' => $amountWeekly,
            'amountMonthly' => $amountMonthly,
            'amountAnnually' => $amountAnnually,
            'amountProcessed' => $amountProcessed,
            'totalUsers' => $totalUsers,
            'totalUsersMonthly' => $totalUsersMonthly,
            'totalUsersActive' => $totalUsersActive,
            'studioInstructors' => $studioInstructors,
            'studioExerciseRooms' => $studioExerciseRooms,
            'ranking' => $ranking,
            'totalNoDiscountAnnually' => $totalNoDiscountAnnually,
            'totalNoDiscountMonthly' => $totalNoDiscountMonthly,
            'totalDiscountAnnually' => $totalDiscountAnnually,
            'totalDiscountMonthly' => $totalDiscountMonthly,
            'totalCashAnnually' => $totalCashAnnually,
            'totalCashMonthly' => $totalCashMonthly,
            'totalCardAnnually' => $totalCardAnnually,
            'totalCardMonthly' => $totalCardMonthly,
            'totalTerminalAnnually' => $totalTerminalAnnually,
            'totalTerminalMonthly' => $totalTerminalMonthly,
            'currentYear' => $currentYear,
            'currentMonth' => $currentMonth,
            'currentWeek' => $currentWeek,
            'transactionDateStart' => \DateTime::createFromFormat('Y-m-d H:i:s', Transaction::DATE_START),
        ]);
    }

    private function getInstructorReservations(): array
    {
        $startDate = $this->configurationRepository->findStats()?->getData()['start_date'] ?? null;

        if (!$startDate) {
            $this->addFlash('danger', 'No se ha definido la fecha de inicio en configuración.');

            return [];
        }

        $period = CarbonPeriod::create($startDate, '14 days', Carbon::today());
        $startWeekly = $period->last();
        $endWeekly = $startWeekly->copy()->addDays(13);

        $total = $period->count();
        $indexMonth = (($total % 2) === 0) ? $total - 2 : $total - 1;
        $startMonth = $period->toArray()[$indexMonth];

        $studioInstructors = [];

        $grouped = function (array $reservations, string $reservationsKey) use (&$studioInstructors) {
            foreach ($reservations as $reservation) {
                $studioId = $reservation['studioId'];
                $instructorId = $reservation['instructorId'];
                $total = $reservation['reservations'];

                if (!isset($studioInstructors[$studioId])) {
                    $studioInstructors[$studioId] = [
                        'studio' => $reservation['studio'],
                        'instructors' => [],
                    ];
                }

                if (isset($studioInstructors[$studioId]['instructors'][$instructorId])) {
                    $reservation = $studioInstructors[$studioId]['instructors'][$instructorId];
                }

                $reservation[$reservationsKey] = $total;
                $studioInstructors[$studioId]['instructors'][$instructorId] = $reservation;
            }
        };

        $instructorReservations = $this->reservationRepository->getGroupedInstructorStudio(
            $startMonth->toDate(),
            $endWeekly->toDate()
        );
        $grouped($instructorReservations, 'monthly');

        $instructorReservations = $this->reservationRepository->getGroupedInstructorStudio(
            $startWeekly->toDate(),
            $endWeekly->toDate()
        );
        $grouped($instructorReservations, 'weekly');

        return [
            'startMonth' => $startMonth->toDate(),
            'endMonth' => $endWeekly->toDate(),
            'startWeekly' => $startWeekly->toDate(),
            'endWeekly' => $endWeekly->toDate(),
            'data' => $studioInstructors,
        ];
    }

    private function getStudiosExerciseRooms(): array
    {
        $now = CarbonImmutable::today();

        $reservationsMonthly = $this->reservationRepository->getGroupedByExerciseRoom($now->startOfMonth()->toDate());
        $reservationsMonthly = array_column($reservationsMonthly, 'reservations', 'exerciseRoomId');

        $reservationsWeekly = $this->reservationRepository->getGroupedByExerciseRoom($now->startOfWeek()->toDate());
        $reservationsWeekly = array_column($reservationsWeekly, 'reservations', 'exerciseRoomId');

        $reservationsDaily = $this->reservationRepository->getGroupedByExerciseRoom($now->startOfWeek()->toDate());
        $reservationsDaily = array_column($reservationsDaily, 'reservations', 'exerciseRoomId');

        $exerciseRooms = $this->exerciseRoomRepository->getAllActive();
        $groupExerciseRooms = [];
        foreach ($exerciseRooms as $exerciseRoom) {
            $branchOfficeId = $exerciseRoom->getBranchOffice()->getId();

            if (!isset($groupExerciseRooms[$branchOfficeId])) {
                $groupExerciseRooms[$branchOfficeId] = [
                    'studio' => $exerciseRoom->getBranchOffice()->getName(),
                    'exerciseRooms' => [],
                ];
            }

            $groupExerciseRooms[$branchOfficeId]['exerciseRooms'][$exerciseRoom->getId()] = [
                'name' => $exerciseRoom->getName(),
                'monthly' => $reservationsMonthly[$exerciseRoom->getId()] ?? 0,
                'weekly' => $reservationsWeekly[$exerciseRoom->getId()] ?? 0,
                'daily' => $reservationsDaily[$exerciseRoom->getId()] ?? 0,
            ];
        }

        return $groupExerciseRooms;
    }

    private function getRanking(): array
    {
        $now = CarbonImmutable::today();

        // Último trimestre.
        $dateStart = $now->startOfMonth()->subMonths(2)->toDate();

        $ranking = [];

        $grouped = function (array $reservations, string $key) use (&$ranking) {
            foreach ($reservations as $reservation) {
                $studioId = $reservation['studioId'];
                $ranking[$studioId]['studio'] = $reservation['studio'];
                $ranking[$studioId][$key][] = $reservation[$key];
            }
        };

        $reservationsDay = $this->reservationRepository->getGroupedByDay($dateStart);
        $grouped($reservationsDay, 'day');

        $reservationsSchedule = $this->reservationRepository->getGroupedBySchedule($dateStart);
        $grouped($reservationsSchedule, 'schedule');

        $transactionsPackage = $this->transactionRepository->getGroupedByPackage($dateStart);
        $grouped($transactionsPackage, 'package');

        $studiosCustomer = $this->reservationRepository->getStudiosGroupedByCustomer($dateStart);
        foreach ($studiosCustomer as $studioId) {
            $reservationsCustomer = $this->reservationRepository->getGroupedByCustomer($studioId, $dateStart);

            if (!$reservationsCustomer) {
                continue;
            }

            if (!isset($ranking[$studioId]['studio'])) {
                $ranking[$studioId]['studio'] = $reservationsCustomer[0]['studio'];
            }

            $ranking[$studioId]['customer'] = $reservationsCustomer;
        }

        return [
            'dateStart' => $dateStart,
            'data' => $ranking,
        ];
    }
}
