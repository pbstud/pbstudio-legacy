<?php

declare(strict_types=1);

namespace App\EventListener;

use App\Event\TransactionSuccessEvent;
use App\Service\CouponService;
use App\Service\Mailer\TransactionMailer;
use Symfony\Component\EventDispatcher\Attribute\AsEventListener;

/**
 * Transaction Success Listener.
 */
#[AsEventListener]
final readonly class TransactionSuccessListener
{
    /**
     * Transaction Success Listener constructor.
     *
     * @param TransactionMailer $mailer
     * @param CouponService     $couponService
     */
    public function __construct(
        private TransactionMailer $mailer,
        private CouponService $couponService
    ) {
    }

    public function __invoke(TransactionSuccessEvent $event): void
    {
        if ($event->getTransaction()->getCoupon()) {
            $this->couponService->addHistory($event->getTransaction());
        }

        $this->mailer->sendConfirmationEmail($event->getPackage(), $event->getTransaction(), $event->getuser());
    }
}
