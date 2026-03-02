<?php

declare(strict_types=1);

namespace App\Service\WaitingList;

use App\Entity\Reservation;
use App\Entity\Session;
use App\Entity\User;
use App\Entity\WaitingList;
use App\Event\WaitingListSuccessEvent;
use App\Repository\ReservationRepository;
use App\Repository\TransactionRepository;
use App\Repository\WaitingListRepository;
use App\Service\Reservation\ReservationException;
use App\Service\Reservation\ReservationService;
use App\Service\SessionTimeCancel\TimeToCancel;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\NoResultException;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Waiting List Service.
 */
readonly class WaitingListService
{
    /**
     * WaitingListService constructor.
     */
    public function __construct(
        private EntityManagerInterface $em,
        private EventDispatcherInterface $dispatcher,
        private TimeToCancel $sessionTimeToCancel,
        private ReservationService $reservationService,
        private WaitingListRepository $waitingListRepository,
        private TransactionRepository $transactionRepository,
        private ReservationRepository $reservationRepository,
    ) {
    }

    /**
     * @param User    $user
     * @param Session $session
     *
     * @throws WaitingListException
     */
    public function add(User $user, Session $session): void
    {
        $this->validate($user, $session);

        try {
            $waitingList = new WaitingList();
            $waitingList
                ->setUser($user)
                ->setSession($session)
            ;

            $this->em->persist($waitingList);
            $this->em->flush();

            $event = new WaitingListSuccessEvent($waitingList);
            $this->dispatcher->dispatch($event);
        } catch (\Exception $e) {
            throw new WaitingListException('Ha ocurrido un error en el registro.');
        }
    }

    public function checkAndReserve(Session $session, int $placeNumber): void
    {
        $waitingLists = $this->waitingListRepository->getAvailableBySession($session);

        foreach ($waitingLists as $waitingList) {
            $waitingList->setIsAvailable(false);

            try {
                $user = $waitingList->getUser();
                $this->reservationService->reservate($user, $session, $placeNumber, $waitingList);
                $this->em->flush();

                break;
            } catch (ReservationException $e) {
                $waitingList->setError($e->getMessage());

                $this->em->flush();
            }
        }
    }

    /**
     * Valida que se pueda registrar en la lista de espera.
     *
     * @param User    $user
     * @param Session $session
     *
     * @throws WaitingListException
     */
    public function validate(User $user, Session $session): void
    {
        if (Session::STATUS_FULL !== $session->getStatus()) {
            throw new WaitingListException('La clase aún cuenta con lugares disponibles.', 1000);
        }

        // Valida aun queda tiempo para registrarse en la lista, tomando en cuenta
        // el limite de tiempo para poder cancelar una reservación.
        $currentDate = new \DateTimeImmutable();

        $dateStartInterface = $session->getDateStart();
        if (!$dateStartInterface) {
            throw new WaitingListException('Session dateStart is not set.');
        }
        
        $timeStartInterface = $session->getTimeStart();
        if (!$timeStartInterface) {
            throw new WaitingListException('Session timeStart is not set.');
        }
        
        $dateStart = \DateTimeImmutable::createFromInterface($dateStartInterface);
        $dateStart = $dateStart->setTime(
            (int) $timeStartInterface->format('H'),
            (int) $timeStartInterface->format('i')
        );

        $diffSeconds = $dateStart->getTimestamp() - $currentDate->getTimestamp();

        $timeToCancel = $session->isIndividual() ?
            $this->sessionTimeToCancel->getTimeToCancelIndividual() :
            $this->sessionTimeToCancel->getTimeToCancelGroup()
        ;

        if ($timeToCancel->toSeconds() > $diffSeconds) {
            throw new WaitingListException('El registro en la lista de espera ha sido cerrado.', 1010);
        }

        try {
            $hasUserReservations = $this->reservationRepository->hasUnlimitedReservationsByUserSession($user, $session);

            $totalUnlimited = $this->reservationRepository->getUnlimitedReservationsByUser(
                $user,
                $session->getDateStart()
            );
            $isFullUnlimited = $totalUnlimited >= Reservation::MAX_UNLIMITED_RESERVATIONS;

            if ($session->isIndividual()) {
                $this->transactionRepository->findFirstTransactionIndividualAvailableByUserAndExpirationAt(
                    $user,
                    $session->getDateStart(),
                    $hasUserReservations || $isFullUnlimited
                );
            } else {
                $this->transactionRepository->findFirstTransactionGroupAvailableByUserAndExpirationAt(
                    $user,
                    $session->getDateStart(),
                    $hasUserReservations || $isFullUnlimited
                );
            }
        } catch (NoResultException $e) {
            throw new WaitingListException('¡No cuentas con clases disponibles! Pero no te preocupes, adquiere más clases para poder realizar la reservación.', 1020);
        }
    }

    /**
     * Busca un usuario dentreo de la lista de espera de la clase.
     *
     * @param Session $session
     * @param User    $user
     *
     * @return WaitingList|null
     */
    public function findUser(Session $session, User $user): ?WaitingList
    {
        return $this->waitingListRepository->findOneBy([
            'user' => $user,
            'session' => $session,
            'isAvailable' => true,
        ]);
    }
}
