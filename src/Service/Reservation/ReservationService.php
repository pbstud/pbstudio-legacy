<?php

declare(strict_types=1);

namespace App\Service\Reservation;

use App\Entity\Reservation;
use App\Entity\Session;
use App\Entity\Transaction;
use App\Entity\User;
use App\Entity\WaitingList;
use App\Event\ReservationCanceledEvent;
use App\Event\ReservationSuccessEvent;
use App\Repository\ReservationRepository;
use App\Repository\TransactionRepository;
use App\Service\SessionTimeCancel\TimeToCancel;
use App\Util\PackageSessionType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\NoResultException;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

/**
 * Reservation Service.
 */
readonly class ReservationService
{
    public function __construct(
        private EntityManagerInterface $em,
        private EventDispatcherInterface $dispatcher,
        private TimeToCancel $sessionTimeToCancel,
        private AuthorizationCheckerInterface $authorizationChecker,
        private TransactionRepository $transactionRepository,
        private ReservationRepository $reservationRepository,
        private LoggerInterface $logger,
    ) {
    }

    /**
     * @param User             $user
     * @param Session          $session
     * @param int              $placeNumber
     * @param WaitingList|null $waitingList
     *
     * @return Reservation
     *
     * @throws ReservationException
     */
    public function reservate(
        User $user,
        Session $session,
        int $placeNumber,
        ?WaitingList $waitingList = null
    ): Reservation {

        if (1 > $placeNumber || $session->getExerciseRoomCapacity() < $placeNumber) {
            throw new ReservationException('El lugar seleccionado no es válido.');
        }

        // Validación: ¿El asiento ya está ocupado en esta sesión?
        $asientoOcupado = $this->reservationRepository->findOneBy([
            'session' => $session,
            'placeNumber' => $placeNumber,
            'isAvailable' => true,
        ]);
        if ($asientoOcupado) {
            // Si el asiento está ocupado por el mismo usuario, es duplicidad
            if ($asientoOcupado->getUser() && $asientoOcupado->getUser()->getId() === $user->getId()) {
                throw new ReservationException('Ya tienes reservada este asiento en esta sesión.');
            } else {
                throw new ReservationException('El asiento seleccionado ya está ocupado por otro usuario en esta sesión.');
            }
        }

        // Verifica si hay que indicar que esta full la clase.
        $totalReservationsForSession = $this->reservationRepository->getTotalReservationsForSession($session) + 1;

        if ($totalReservationsForSession === $session->getAvailableCapacity()) {
            $session->setStatus(Session::STATUS_FULL);
        } elseif ($totalReservationsForSession > $session->getAvailableCapacity()) {
            throw new ReservationException('La reservación no puede ser registrada porque la clase esta completa.');
        }

        $hasUserReservations = false;
        $isFullUnlimited = false;

        try {
            $hasUserReservations = $this->reservationRepository->hasUnlimitedReservationsByUserSession($user, $session);

            $totalUnlimited = $this->reservationRepository->getUnlimitedReservationsByUser(
                $user,
                $session->getDateStart()
            );
            $isFullUnlimited = $totalUnlimited >= Reservation::MAX_UNLIMITED_RESERVATIONS;

            if ($session->isIndividual()) {
                $transaction = $this->transactionRepository->findFirstTransactionIndividualAvailableByUserAndExpirationAt(
                    $user,
                    $session->getDateStart(),
                    $hasUserReservations || $isFullUnlimited
                );
            } else {
                $transaction = $this->transactionRepository->findFirstTransactionGroupAvailableByUserAndExpirationAt(
                    $user,
                    $session->getDateStart(),
                    $hasUserReservations || $isFullUnlimited
                );
            }
        } catch (NoResultException $e) {
            if ($isFullUnlimited) {
                $msg = '¡No cuentas con clases disponibles! Sólo puedes reservar 2 clases por día con paquetes ilimitados.';
            } elseif ($hasUserReservations) {
                $msg = '¡No cuentas con clases disponibles! Sólo puedes reservar 1 lugar en la misma clase con paquetes ilimitados.';
            } else {
                $msg = 'No cuentas con clases disponibles o la fecha de la reservación es superior a la expiración de tu transacción.';
            }

            throw new ReservationException($msg);
        }

        /** @var Transaction $transaction */

        if (!$transaction->isPackageIsUnlimited()) {
            // Verifica si hay que deshabilitar la transacción porque se ocuparon todas las clases.
            $totalReservationsForTransaction = $this->reservationRepository->getTotalReservationsForTransaction($transaction) + 1;

            if ($totalReservationsForTransaction >= $transaction->getPackageTotalClasses()) {
                $transaction->setHaveSessionsAvailable(false);

                $this->em->persist($transaction);

                if ($totalReservationsForTransaction > $transaction->getPackageTotalClasses()) {
                    $this->em->flush();

                    throw new ReservationException('No cuentas con clases disponibles o la fecha de la reservación es superior a la expiración de tu transacción.');
                }
            }
        }

        $reservation = new Reservation();
        $reservation
            ->setUser($user)
            ->setTransaction($transaction)
            ->setSession($session)
            ->setPlaceNumber($placeNumber)
        ;

        $this->em->persist($reservation);
        $this->em->flush();

        $event = new ReservationSuccessEvent($reservation);
        if ($waitingList instanceof WaitingList) {
            $event->setWaitingList($waitingList);
        }

        $this->dispatcher->dispatch($event);

        return $reservation;
    }

    /**
     * @param Reservation $reservation
     *
     * @throws ReservationException
     */
    public function cancel(Reservation $reservation): void
    {
        if (!$reservation->isIsAvailable()) {
            throw new ReservationException('La reservación ya ha sido cancelada.');
        }

        /** @var Session $session */
        $session = $reservation->getSession();

        /** @var Transaction $transaction */
        $transaction = $reservation->getTransaction();
        if ($transaction->isIsExpired()) {
            throw new ReservationException('No puedes cancelar la clase porque el paquete ha expirado.');
        }

        if ($this->authorizationChecker->isGranted('ROLE_USER')) {
            if (Session::STATUS_CLOSED === $session->getStatus()) {
                throw new ReservationException('La clase ya ha sido tomada y no se puede cancelar.');
            }

            if (!$this->canCancel($reservation)) {
                $timeToCancel = $session->isIndividual() ?
                    $this->sessionTimeToCancel->getTimeToCancelIndividual() :
                    $this->sessionTimeToCancel->getTimeToCancelGroup()
                ;

                throw new ReservationException(sprintf('Recuerda cancelar máximo %s horas antes de la clase reservada.', $timeToCancel->toHours()));
            }
        }

        $reservation
            ->setIsAvailable(false)
            ->setCancellationAt(new \DateTime())
        ;

        $transaction->setHaveSessionsAvailable(true);

        $session->setStatus(Session::STATUS_OPEN);

        $this->em->flush();

        $event = new ReservationCanceledEvent($reservation);
        $this->dispatcher->dispatch($event);
    }

    public function canCancel(Reservation $reservation): bool
    {
        $session = $reservation->getSession();
        $secondsToStart = $this->getSecondsToStart($session);

        if ($secondsToStart <= 0) {
            return false;
        }

        $timeToCancel = $session->isIndividual() ?
            $this->sessionTimeToCancel->getTimeToCancelIndividual() :
            $this->sessionTimeToCancel->getTimeToCancelGroup()
        ;

        return $secondsToStart > $timeToCancel->toSeconds();
    }

    public function canChange(Reservation $reservation): bool
    {
        if ($reservation->getChangedAt()) {
            return false;
        }

        $secondsToStart = $this->getSecondsToStart($reservation->getSession());

        if ($secondsToStart <= 0) {
            return false;
        }

        return Session::TIME_CHANGE_FROM_SECONDS >= $secondsToStart && Session::TIME_CHANGE_TO_SECONDS <= $secondsToStart;
    }

    public function change(
        Reservation $reservation,
        Session $session,
        int $placeNumber,
    ): Reservation {

        if (1 > $placeNumber || $session->getExerciseRoomCapacity() < $placeNumber) {
            throw new ReservationException('El lugar seleccionado no es válido.');
        }

        // Validación: ¿El asiento destino está ocupado por otro usuario?
        $asientoOcupado = $this->reservationRepository->findOneBy([
            'session' => $session,
            'placeNumber' => $placeNumber,
            'isAvailable' => true,
        ]);
        if ($asientoOcupado && $asientoOcupado->getUser()->getId() !== $reservation->getUser()->getId()) {
            throw new ReservationException('El asiento destino ya está ocupado por otro usuario en esta sesión.');
        }

        // Validación: ¿El usuario ya tiene ese asiento reservado en la sesión destino?
        $misAsientos = $this->reservationRepository->findOneBy([
            'session' => $session,
            'placeNumber' => $placeNumber,
            'user' => $reservation->getUser(),
            'isAvailable' => true,
        ]);
        if ($misAsientos && $misAsientos->getId() !== $reservation->getId()) {
            throw new ReservationException('Ya tienes reservado este asiento en la sesión destino.');
        }

        // Verifica si hay que indicar que esta full la clase.
        $totalReservationsForSession = $this->reservationRepository->getTotalReservationsForSession($session) + 1;

        if ($totalReservationsForSession === $session->getAvailableCapacity()) {
            $session->setStatus(Session::STATUS_FULL);
        } elseif ($totalReservationsForSession > $session->getAvailableCapacity()) {
            throw new ReservationException('La reservación no puede ser registrada porque la clase esta completa.');
        }

        $curSession = $reservation->getSession();
        if ($curSession->isFull()) {
            $curSession->setStatus(Session::STATUS_OPEN);
            $this->em->persist($curSession);
        }

        $reservation
            ->setSession($session)
            ->setPlaceNumber($placeNumber)
            ->setChangedAt(new \DateTime())
        ;

        $this->em->persist($reservation);
        $this->em->flush();

        $event = new ReservationSuccessEvent($reservation);
        $this->dispatcher->dispatch($event);

        return $reservation;
    }

    private function getSecondsToStart(Session $session): int
    {
        $dateStartValue = $session->getDateStart();
        $timeStartValue = $session->getTimeStart();

        if (!$dateStartValue || !$timeStartValue) {
            throw new \RuntimeException('La sesión no tiene fecha u hora de inicio configurada.');
        }

        $currentDate = new \DateTimeImmutable();
        $dateStart = \DateTimeImmutable::createFromInterface($dateStartValue);
        $dateStart = $dateStart->setTime(
            (int) $timeStartValue->format('H'),
            (int) $timeStartValue->format('i')
        );

        return $dateStart->getTimestamp() - $currentDate->getTimestamp();
    }
}
