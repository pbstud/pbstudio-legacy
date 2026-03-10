<?php

declare(strict_types=1);

namespace App\Tests\Service\Reservation;

use App\Entity\Reservation;
use App\Entity\Session;
use App\Entity\Transaction;
use App\Entity\User;
use App\Repository\ReservationRepository;
use App\Repository\TransactionRepository;
use App\Service\Reservation\ReservationException;
use App\Service\Reservation\ReservationService;
use App\Service\SessionTimeCancel\TimeToCancel;
use Doctrine\ORM\EntityManagerInterface;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class ReservationServiceTest extends TestCase
{
    private ReservationService $service;

    /** @var EntityManagerInterface&MockObject */
    private EntityManagerInterface $em;

    /** @var EventDispatcherInterface&MockObject */
    private EventDispatcherInterface $dispatcher;

    /** @var TimeToCancel&MockObject */
    private TimeToCancel $sessionTimeToCancel;

    /** @var AuthorizationCheckerInterface&MockObject */
    private AuthorizationCheckerInterface $authorizationChecker;

    /** @var TransactionRepository&MockObject */
    private TransactionRepository $transactionRepository;

    /** @var ReservationRepository&MockObject */
    private ReservationRepository $reservationRepository;

    /** @var LoggerInterface&MockObject */
    private LoggerInterface $logger;

    protected function setUp(): void
    {
        $this->em = $this->createMock(EntityManagerInterface::class);
        $this->dispatcher = $this->createMock(EventDispatcherInterface::class);
        $this->sessionTimeToCancel = $this->createMock(TimeToCancel::class);
        $this->authorizationChecker = $this->createMock(AuthorizationCheckerInterface::class);
        $this->transactionRepository = $this->createMock(TransactionRepository::class);
        $this->reservationRepository = $this->createMock(ReservationRepository::class);
        $this->logger = $this->createMock(LoggerInterface::class);

        $this->service = new ReservationService(
            $this->em,
            $this->dispatcher,
            $this->sessionTimeToCancel,
            $this->authorizationChecker,
            $this->transactionRepository,
            $this->reservationRepository,
            $this->logger,
        );
    }

    public function testReservateThrowsWhenSeatAlreadyReservedBySameUser(): void
    {
        $user = $this->createUserMock(10);
        $session = $this->createSession(20, 20);
        $occupiedReservation = (new Reservation())->setUser($user);

        $this->reservationRepository
            ->expects($this->once())
            ->method('findOneBy')
            ->willReturn($occupiedReservation);

        $this->expectException(ReservationException::class);
        $this->expectExceptionMessage('Ya tienes reservada este asiento en esta sesión.');

        $this->service->reservate($user, $session, 3);
    }

    public function testReservateThrowsWhenSeatAlreadyReservedByAnotherUser(): void
    {
        $user = $this->createUserMock(10);
        $otherUser = $this->createUserMock(11);
        $session = $this->createSession(20, 20);
        $occupiedReservation = (new Reservation())->setUser($otherUser);

        $this->reservationRepository
            ->expects($this->once())
            ->method('findOneBy')
            ->willReturn($occupiedReservation);

        $this->expectException(ReservationException::class);
        $this->expectExceptionMessage('El asiento seleccionado ya está ocupado por otro usuario en esta sesión.');

        $this->service->reservate($user, $session, 3);
    }

    public function testReservateAllowsSameUserToReserveDifferentSeatInSameSession(): void
    {
        $user = $this->createUserMock(10);
        $session = $this->createSession(20, 20);
        $transaction = (new Transaction())->setPackageIsUnlimited(true);

        $this->reservationRepository
            ->expects($this->once())
            ->method('findOneBy')
            ->willReturn(null);

        $this->reservationRepository
            ->expects($this->once())
            ->method('getTotalReservationsForSession')
            ->with($session)
            ->willReturn(0);

        $this->reservationRepository
            ->expects($this->once())
            ->method('hasUnlimitedReservationsByUserSession')
            ->with($user, $session)
            ->willReturn(false);

        $this->reservationRepository
            ->expects($this->once())
            ->method('getUnlimitedReservationsByUser')
            ->with($user, $session->getDateStart())
            ->willReturn(0);

        $this->transactionRepository
            ->expects($this->once())
            ->method('findFirstTransactionGroupAvailableByUserAndExpirationAt')
            ->with($user, $session->getDateStart(), false)
            ->willReturn($transaction);

        $this->em
            ->expects($this->once())
            ->method('persist');

        $this->em
            ->expects($this->once())
            ->method('flush');

        $this->dispatcher
            ->expects($this->once())
            ->method('dispatch');

        $result = $this->service->reservate($user, $session, 4);

        self::assertInstanceOf(Reservation::class, $result);
        self::assertSame($user, $result->getUser());
        self::assertSame($session, $result->getSession());
        self::assertSame(4, $result->getPlaceNumber());
    }

    public function testChangeThrowsWhenDestinationSeatIsOccupiedByAnotherUser(): void
    {
        $currentUser = $this->createUserMock(10);
        $otherUser = $this->createUserMock(11);
        $targetSession = $this->createSession(20, 20);

        $reservation = $this->createMock(Reservation::class);
        $reservation
            ->method('getUser')
            ->willReturn($currentUser);

        $occupiedReservation = (new Reservation())->setUser($otherUser);

        $this->reservationRepository
            ->expects($this->once())
            ->method('findOneBy')
            ->willReturn($occupiedReservation);

        $this->expectException(ReservationException::class);
        $this->expectExceptionMessage('El asiento destino ya está ocupado por otro usuario en esta sesión.');

        $this->service->change($reservation, $targetSession, 2);
    }

    public function testChangeThrowsWhenSameUserAlreadyHasDestinationSeat(): void
    {
        $currentUser = $this->createUserMock(10);
        $targetSession = $this->createSession(20, 20);

        $reservation = $this->createMock(Reservation::class);
        $reservation
            ->method('getUser')
            ->willReturn($currentUser);
        $reservation
            ->method('getId')
            ->willReturn(100);

        $occupiedBySameUser = (new Reservation())->setUser($currentUser);

        $sameSeatReservation = $this->createMock(Reservation::class);
        $sameSeatReservation
            ->method('getId')
            ->willReturn(101);

        $this->reservationRepository
            ->expects($this->exactly(2))
            ->method('findOneBy')
            ->willReturnOnConsecutiveCalls($occupiedBySameUser, $sameSeatReservation);

        $this->expectException(ReservationException::class);
        $this->expectExceptionMessage('Ya tienes reservado este asiento en la sesión destino.');

        $this->service->change($reservation, $targetSession, 2);
    }

    public function testChangeAllowsMoveWhenDestinationSeatIsFree(): void
    {
        $currentUser = $this->createUserMock(10);
        $currentSession = $this->createSession(20, 20);
        $targetSession = $this->createSession(20, 20);

        $reservation = (new Reservation())
            ->setUser($currentUser)
            ->setSession($currentSession)
            ->setPlaceNumber(1)
        ;

        $this->reservationRepository
            ->expects($this->exactly(2))
            ->method('findOneBy')
            ->willReturnOnConsecutiveCalls(null, null);

        $this->reservationRepository
            ->expects($this->once())
            ->method('getTotalReservationsForSession')
            ->with($targetSession)
            ->willReturn(1);

        $this->em
            ->expects($this->once())
            ->method('persist')
            ->with($reservation);

        $this->em
            ->expects($this->once())
            ->method('flush');

        $this->dispatcher
            ->expects($this->once())
            ->method('dispatch');

        $result = $this->service->change($reservation, $targetSession, 2);

        self::assertSame($reservation, $result);
        self::assertSame($targetSession, $result->getSession());
        self::assertSame(2, $result->getPlaceNumber());
        self::assertInstanceOf(\DateTimeInterface::class, $result->getChangedAt());
    }

    private function createUserMock(int $id): User
    {
        $user = $this->createMock(User::class);
        $user
            ->method('getId')
            ->willReturn($id);

        return $user;
    }

    private function createSession(int $exerciseRoomCapacity, int $availableCapacity): Session
    {
        $session = new Session();
        $session->setExerciseRoomCapacity($exerciseRoomCapacity);
        $session->setAvailableCapacity($availableCapacity);
        $session->setDateStart(new \DateTimeImmutable('2026-03-10 00:00:00'));

        return $session;
    }
}
