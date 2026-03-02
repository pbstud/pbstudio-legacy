<?php

declare(strict_types=1);

namespace App\EventListener;

use App\Event\TransactionExpiredEvent;
use App\Service\Mailer\TransactionMailer;
use Symfony\Component\EventDispatcher\Attribute\AsEventListener;

#[AsEventListener]
final readonly class TransactionExpiredListener
{
    /**
     * Expired Transaction Listener constructor.
     *
     * @param TransactionMailer $mailer
     */
    public function __construct(private TransactionMailer $mailer)
    {
    }

    public function __invoke(TransactionExpiredEvent $event): void
    {
        $transaction = $event->getTransaction();
        $this->mailer->sendExpirationNotificationEmail($transaction);
    }
}
