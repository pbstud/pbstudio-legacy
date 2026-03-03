<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Discipline;
use App\Entity\Reservation;
use App\Entity\Session;
use App\Entity\User;
use App\Form\ProfileFormType;
use App\Repository\BranchOfficeRepository;
use App\Repository\DisciplineRepository;
use App\Repository\ReservationRepository;
use App\Repository\SessionRepository;
use App\Repository\StaffRepository;
use App\Repository\TransactionRepository;
use App\Repository\UserRepository;
use App\Repository\WaitingListRepository;
use App\Service\Reservation\ReservationException;
use App\Service\Reservation\ReservationService;
use App\Service\SessionTimeCancel\TimeToCancel;
use App\Util\PackageSessionType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\String\Slugger\AsciiSlugger;

#[Route('/mi-cuenta')]
#[IsGranted('ROLE_USER')]
class ProfileController extends AbstractController
{
    #[Route('/', name: 'profile', methods: ['GET'])]
    public function index(
        TransactionRepository $transactionRepository,
    ): Response {
        /** @var User $user */
        $user = $this->getUser();

        return $this->render('profile/index.html.twig', [
            'user' => $user,
            'lastTransactions' => $transactionRepository->getLastCompletedByUser($user),
        ]);
    }

    #[Route('/clases-disponibles', name: 'sessions_available', methods: ['GET'])]
    public function sessionsAvailable(
        ReservationRepository $reservationRepository,
        TransactionRepository $transactionRepository,
    ): Response {
        /** @var User $user */
        $user = $this->getUser();

        $transactions = [];
        $transactionsAvailable = $transactionRepository->findAllTransactionAvailableByUser($user);

        foreach ($transactionsAvailable as $transaction) {
            $reservedSessions = $reservationRepository->getTotalAvailableByTransaction($transaction);
            $sessionsUsed = $reservationRepository->getTotalUsedByTransaction($transaction);

            $transactions[] = [
                'package_total_sessions' => $transaction->getPackageTotalClasses(),
                'package_is_unlimited' => $transaction->isPackageIsUnlimited(),
                'package_alt_text' => $transaction->getPackage()->getAltText(),
                'package_type' => PackageSessionType::getDescription($transaction->getPackageType()),
                'total_sessions_available' => $transaction->getPackageTotalClasses() - ($sessionsUsed + $reservedSessions),
                'total_sessions_used' => $sessionsUsed,
                'total_reserved_sessions' => $reservedSessions,
                'expiration_at' => $transaction->getExpirationAt(),
            ];
        }

        return $this->render('profile/sessions_available.html.twig', [
            'transactions' => $transactions,
        ]);
    }

    #[Route('/clases-tomadas', name: 'sessions_used', methods: ['GET'])]
    public function sessionsUsed(ReservationRepository $reservationRepository): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        $reservations = $reservationRepository->getSessionsTakenByUser($user);

        return $this->render('profile/sessions_used.html.twig', [
            'reservations' => $reservations,
        ]);
    }

    #[Route('/proximas-clases', name: 'reserved_sessions', methods: ['GET'])]
    public function reservedSessions(
        ReservationRepository $reservationRepository,
    ): Response {
        /** @var User $user */
        $user = $this->getUser();
        $reservations = $reservationRepository->getReservedSessionsByUser($user);

        return $this->render('profile/reserved_sessions.html.twig', [
            'reservations' => $reservations,
        ]);
    }

    #[Route('/lista-espera', name: 'profile_waiting_list', methods: ['GET'])]
    public function waitingList(
        WaitingListRepository $waitingListRepository,
    ): Response {
        /** @var User $user */
        $user = $this->getUser();
        $waitingList = $waitingListRepository->getByUser($user);

        return $this->render('profile/waiting_list.html.twig', [
            'waitingList' => $waitingList,
        ]);
    }

    #[Route('/editar', name: 'profile_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        TransactionRepository $transactionRepository,
        EntityManagerInterface $em,
    ): Response {
        /** @var User $user */
        $user = $this->getUser();

        $form = $this->createForm(ProfileFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('profile', [
                '_fragment' => 'perfil',
            ]);
        }

        return $this->render('profile/edit.html.twig', [
            'form' => $form->createView(),
            'lastTransactions' => $transactionRepository->getLastCompletedByUser($user),
        ]);
    }

    #[Route('/transaccion', name: 'transaction', methods: ['GET'])]
    public function transaction(
        TransactionRepository $transactionRepository,
    ): Response {
        /** @var User $user */
        $user = $this->getUser();

        $transactions = $transactionRepository->getAllCompletedByUser($user);

        return $this->render('profile/transaction_list.html.twig', [
            'transactions' => $transactions,
        ]);
    }

    #[Route('/reservacion/{id}/cancelar', name: 'reservation_cancel', methods: ['GET', 'POST'])]
    public function reservationCancel(
        Request $request,
        Reservation $reservation,
        ReservationRepository $reservationRepository,
        TimeToCancel $timeToCancelService,
        ReservationService $reservationService,
    ): Response {
        /** @var User $loggedUser */
        $loggedUser = $this->getUser();

        if ($loggedUser->getId() !== $reservation->getUser()->getId()) {
            throw new AccessDeniedHttpException('La clase que intentas cancelar no te pertenece.');
        }

        if ($request->isMethod('POST')) {
            if (!$this->isCsrfTokenValid('reservation_cancel', $request->request->get('_token'))) {
                throw $this->createAccessDeniedException('Invalid CSRF token');
            }

            try {
                $reservationService->cancel($reservation);

                return $this->render('profile/reservation_cancel_success.html.twig');
            } catch (ReservationException $e) {
                $json['error'] = $e->getMessage();

                return $this->json($json);
            }
        }

        /** @var Session $session */
        $session = $reservation->getSession();

        $reservations = [];
        $sessionReservations = $reservationRepository->getReservationsBySession($session);

        foreach ($sessionReservations as $sessionReservation) {
            $reservations[$sessionReservation->getPlaceNumber()] = $sessionReservation;
        }

        $timeToCancel = $session->isIndividual() ?
            $timeToCancelService->getTimeToCancelIndividual() :
            $timeToCancelService->getTimeToCancelGroup()
        ;

        return $this->render('profile/reservation_cancel.html.twig', [
            'discipline' => $session->getDiscipline(),
            'reservations' => $reservations,
            'session' => $session,
            'reservation' => $reservation,
            'time_to_cancel' => $timeToCancel->toHours(),
        ]);
    }

    #[Route('/reservacion/{id}/cambiar', name: 'reservation_change', methods: ['GET'])]
    public function reservationChange(
        Reservation $reservation,
        SessionRepository $sessionRepository,
        ReservationService $reservationService,
        BranchOfficeRepository $branchOfficeRepository,
        DisciplineRepository $disciplineRepository,
        StaffRepository $staffRepository,
    ): Response {
        /** @var User $loggedUser */
        $loggedUser = $this->getUser();

        if ($loggedUser->getId() !== $reservation->getUser()->getId()) {
            throw new AccessDeniedHttpException('La clase que intentas cambiar no te pertenece.');
        }

        if (!$reservationService->canChange($reservation)) {
            $this->addFlash('danger', 'Lo sentimos, la reservación no acepta cambios.');

            return $this->redirectToRoute('reserved_sessions', [
                '_fragment' => 'section-content',
            ]);
        }

        $sessions = $sessionRepository->getForChange(new \DateTime('today'));

        $currentDate = new \DateTime();
        $sessions = array_filter($sessions, function (Session $session) use ($currentDate, $reservation) {
            return $session->getDateTimeStart() > $currentDate
                && $session->getId() !== $reservation->getSession()->getId();
        });

        if (!$sessions) {
            $this->addFlash('danger', 'Lo sentimos, no hay clases disponibles.');

            return $this->redirectToRoute('reserved_sessions', [
                '_fragment' => 'section-content',
            ]);
        }

        return $this->render('profile/reservation_change.html.twig', [
            'reservation' => $reservation,
            'sessions' => $sessions,
            'branchOffices' => $branchOfficeRepository->getPublic(),
            'disciplines' => $disciplineRepository->getAllActives(),
            'instructors' => $staffRepository->getAllActiveInstructors(),
        ]);
    }

    #[Route('/reservacion/{id}/cambiar/{sessionId}', name: 'reservation_change_session', methods: ['GET', 'POST'])]
    public function reservationChangeSession(
        Request $request,
        Reservation $reservation,
        #[MapEntity(mapping: ['sessionId' => 'id'])]
        Session $session,
        ReservationRepository $reservationRepository,
        ReservationService $reservationService,
    ): Response {
        /** @var User $loggedUser */
        $loggedUser = $this->getUser();

        if ($loggedUser->getId() !== $reservation->getUser()->getId()) {
            throw new AccessDeniedHttpException('La clase que intentas cambiar no te pertenece.');
        }

        if ($request->isMethod('POST') && $request->request->has('place_number')) {
            if (!$this->isCsrfTokenValid('reservation_change_session', $request->request->get('_token'))) {
                throw $this->createAccessDeniedException('Invalid CSRF token');
            }

            try {
                if (!$reservationService->canChange($reservation)) {
                    throw new ReservationException('La reservación no acepta cambios.');
                }

                $placeNumber = $request->request->getInt('place_number');
                $reservationService->change($reservation, $session, $placeNumber);

                return $this->render('profile/reservation_change_session_success.html.twig');
            } catch (ReservationException $e) {
                $json['error'] = $e->getMessage();

                return $this->json($json);
            }
        }

        $reservations = [];
        $sessionReservations = $reservationRepository->getReservationsBySession($session);
        foreach ($sessionReservations as $sessionReservation) {
            $reservations[$sessionReservation->getPlaceNumber()] = $sessionReservation;
        }

        $userReservations = $reservationRepository->getReservationPlacesByUserSession($loggedUser, $session);

        $branchOfficePlace = $session->getBranchOffice()->getPlace();
        $branchOfficeSlug = (new AsciiSlugger())->slug($branchOfficePlace)->lower();

        /** @var Discipline $discipline */
        $discipline = $session->getDiscipline();
        $gridClass = str_replace(' ', '-', strtolower($discipline->getName()));
        $gridClass .= '-'.$branchOfficeSlug;

        return $this->render('profile/reservation_change_session.html.twig', [
            'discipline' => $session->getDiscipline(),
            'grid_class' => $gridClass,
            'reservation' => $reservation,
            'session' => $session,
            'reservations' => $reservations,
            'userReservations' => $userReservations,
        ]);
    }

    #[Route('/waiting-list/{sessionId}/remove', name: 'waiting_list_remove', methods: ['POST'])]
    public function waitingListRemove(
        int $sessionId,
        Request $request,
        WaitingListRepository $waitingListRepository,
        EntityManagerInterface $em,
    ): Response {
        /** @var User $user */
        $user = $this->getUser();

        // Validar token CSRF
        if (!$this->isCsrfTokenValid('waiting_list_remove_'.$sessionId, (string) $request->request->get('_token'))) {
            throw $this->createAccessDeniedException('Invalid CSRF token.');
        }

        $waitingList = $waitingListRepository->getOneBySession($sessionId, $user);

        if ($waitingList) {
            $em->remove($waitingList);
            $em->flush();
        }

        return $this->redirectToRoute('reserved_sessions');
    }

    public function resume(
        TransactionRepository $transactionRepository,
        UserRepository $userRepository,
        ReservationRepository $reservationRepository,
        WaitingListRepository $waitingListRepository,
    ): Response {
        /** @var User $user */
        $user = $this->getUser();

        $data = [
            'sessions' => $transactionRepository->getCountSessionsAvailableByUser($user),
            'sessions_used' => $reservationRepository->getSessionsTakenByUser($user, true),
            'reserved_sessions' => $reservationRepository->getReservedSessionsByUser($user, true),
            'waiting_list' => $waitingListRepository->getByUser($user, true),
        ];

        $data['sessions_available'] = $data['sessions'] - ($data['sessions_used'] + $data['reserved_sessions']);
        $data['sessions_available'] = max(0, $data['sessions_available']);

        $data['free_session'] = $user->isFreeSession();

        $data['unlimited_transactions'] = $userRepository->getUnlimitedTransactionsAvailable($user);

        return $this->render('profile/_resume.html.twig', $data);
    }
}
