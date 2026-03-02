<?php
/**
 * Created by.
 *
 * User: JCHR <car.chr@gmail.com>
 * Date: 2020-11-07
 * Time: 16:14
 */

declare(strict_types=1);

namespace App\Service;

use App\Entity\Coupon;
use App\Entity\CouponHistory;
use App\Entity\Package;
use App\Entity\Transaction;
use App\Repository\CouponRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

/**
 * Coupon Service.
 *
 * @author JCHR <car.chr@gmail.com>
 */
readonly class CouponService
{
    /**
     * Coupon Service constructor.
     *
     * @param EntityManagerInterface $entityManager
     * @param TranslatorInterface    $translator
     * @param CouponRepository       $couponRepository
     */
    public function __construct(
        private EntityManagerInterface $entityManager,
        private TranslatorInterface $translator,
        private CouponRepository $couponRepository
    ) {
    }

    /**
     * @param Package $package
     * @param string  $code
     *
     * @return Coupon|null
     */
    public function validate(Package $package, string $code): ?Coupon
    {
        $coupon = $this->couponRepository->getActiveByCode($code);

        // Coupon not found.
        if (!$coupon) {
            return null;
        }

        // Validate coupon apply in special price.
        if ($package->hasSpecialPrice() && !$coupon->isApplySpecialPrice()) {
            return null;
        }

        // Validate has package in coupon.
        if (!$coupon->hasPackage($package) && $coupon->getPackages()->count() > 0) {
            return null;
        }

        return $coupon;
    }

    /**
     * @param Transaction $transaction
     * @param string|null $code
     *
     * @throws \Exception
     */
    public function apply(Transaction $transaction, string $code = null): void
    {
        if (empty($code)) {
            return;
        }

        $coupon = $this->validate($transaction->getPackage(), $code);

        if (!$coupon) {
            throw new \Exception($this->translator->trans('error.invalid_coupon'));
        }

        $transaction
            ->setCouponDiscount($coupon->getDiscount())
            ->setCoupon($coupon)
        ;

        $transaction->calculateTotal();
        $this->entityManager->persist($transaction);
    }

    /**
     * @param Transaction $transaction
     */
    public function addHistory(Transaction $transaction): void
    {
        /** @var Coupon $coupon */
        $coupon = $transaction->getCoupon();
        $coupon->incrementUsed();

        $history = new CouponHistory();
        $history
            ->setDiscount($coupon->getDiscount())
            ->setCoupon($coupon)
            ->setTransaction($transaction)
            ->setUser($transaction->getUser())
        ;

        $coupon->addCouponHistory($history);
        $this->entityManager->persist($coupon);
        $this->entityManager->flush();
    }
}
