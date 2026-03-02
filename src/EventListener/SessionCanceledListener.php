<?php

declare(strict_types=1);

namespace App\EventListener;

use App\Entity\Reservation;
use App\Entity\Transaction;
use App\Event\SessionCanceledEvent;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\EventDispatcher\Attribute\AsEventListener;

#[AsEventListener]
final readonly class SessionCanceledListener
{
    public function __construct(private EntityManagerInterface $em)
    {
    }

    public function __invoke(SessionCanceledEvent $event): void
    {
        $session = $event->getSession();

        /** @var Reservation $reservation */
        foreach ($session->getReservations() as $reservation) {
            /** @var Transaction $transaction */
            $transaction = $reservation->getTransaction();

            if (!$transaction->isHaveSessionsAvailable()) {
                $transaction->setHaveSessionsAvailable(true);

                $this->em->persist($transaction);
            }
        }

        $this->em->flush();
    }
}
