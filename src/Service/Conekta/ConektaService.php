<?php

declare(strict_types=1);

namespace App\Service\Conekta;

use App\Entity\Transaction;
use App\Entity\User;
use App\Util\PackageSessionType;
use Conekta\Handler;

/**
 * Conekta Service.
 */
class ConektaService extends ConektaBase
{
    /**
     * Realiza la petición de una transacción a conekta.
     *
     * @param Transaction $transaction
     * @param string      $conektaCardToken
     *
     * @return Transaction
     */
    public function chargeCard(Transaction $transaction, string $conektaCardToken): Transaction
    {
        try {
            /** @var User $user */
            $user = $transaction->getUser();

            // Conekta customer
            if (!$user->getConektaId()) {
                $conektaCustomer = $this->createConektaCustomer($user, $transaction, $conektaCardToken);
                $conektaCustomerCard = $conektaCustomer->payment_sources[0];
            } else {
                $conektaCustomer = $this->getCustomer($user->getConektaId());

                $conektaCustomerCard = $conektaCustomer->createPaymentSource([
                    'type' => 'card',
                    'token_id' => $conektaCardToken,
                ]);
            }

            // Conekta customer card
            $transaction
                ->setCardName($conektaCustomerCard->name)
                ->setCardType($conektaCustomerCard->type)
                ->setCardBrand(mb_strtolower($conektaCustomerCard->brand))
                ->setCardLast4($conektaCustomerCard->last4)
            ;

            // Save partial data.
            $this->em->persist($transaction);
            $this->em->flush();

            // Conekta order
            $conektaOrder = $this->createConektaOrder($transaction, $conektaCustomer->id, $conektaCustomerCard->id);

            // Se elimina la tarjeta asociada al customer.
            $conektaCustomerCard->delete();

            if (isset($conektaOrder->errorCode)) {
                $transaction
                    ->setStatus(Transaction::STATUS_DENIED)
                    ->setErrorCode($conektaOrder->errorCode)
                    ->setErrorMessage($conektaOrder->errorMessage)
                ;

                throw new \Exception($conektaOrder->errorMessage);
            }

            $expirationAt = new \DateTime();
            $expirationAt->add(new \DateInterval(sprintf('P%sD', $transaction->getPackageDaysExpiry())));

            $transaction
                ->setChargeId($conektaOrder->id)
                ->setChargeAuthCode($conektaOrder->charges[0]->payment_method->auth_code)
                ->setStatus(Transaction::STATUS_PAID)
                ->setExpirationAt($expirationAt)
                ->setHaveSessionsAvailable(true)
            ;
        } catch (\Exception $e) {
            $this->processError('Conekta charge card error.', $e);

            if (empty($transaction->getErrorMessage())) {
                $transaction
                    ->setStatus(Transaction::STATUS_DENIED)
                    ->setErrorCode($e->getCode())
                    ->setErrorMessage($e->getMessage())
                ;
            }
        }

        $this->em->persist($transaction);
        $this->em->flush();

        return $transaction;
    }

    /**
     * @param Transaction $transaction
     *
     * @return array
     */
    public function chargeRefund(Transaction $transaction): array
    {
        $response = [];

        try {
            $order = $this->getOrder($transaction->getChargeId());

            $order->refund();
        } catch (Handler $error) {
            $this->processError('Conekta charge refund error.', $error);

            $response['error'] = [
                'code' => $error->getCode(),
                'message' => $error->getMessage(),
            ];
        }

        return $response;
    }

    /**
     * @param User        $user
     * @param Transaction $transaction
     * @param string      $conektaCardToken
     *
     * @return mixed|\stdClass
     *
     * @throws \Exception
     */
    private function createConektaCustomer(User $user, Transaction $transaction, string $conektaCardToken)
    {
        $conektaCustomer = $this->createCustomer([
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'phone' => $user->getPhone(),
            'payment_sources' => [
                [
                    'type' => 'card',
                    'token_id' => $conektaCardToken,
                ],
            ],
        ]);

        if (isset($conektaCustomer->errorCode)) {
            $transaction
                ->setStatus(Transaction::STATUS_DENIED)
                ->setErrorCode($conektaCustomer->errorCode)
                ->setErrorMessage($conektaCustomer->errorMessage)
            ;

            throw new \Exception($conektaCustomer->errorMessage);
        }

        $user->setConektaId($conektaCustomer->id);

        return $conektaCustomer;
    }

    /**
     * @param Transaction $transaction
     * @param string      $conektaCustomerId
     * @param string      $conektaCardId
     *
     * @return mixed|\stdClass
     */
    private function createConektaOrder(Transaction $transaction, string $conektaCustomerId, string $conektaCardId)
    {
        $total = $this->formatDecimalAmount($transaction->getTotal());

        // Conekta order
        $orderData = [
            'currency' => 'MXN',
            'line_items' => [
                [
                    'name' => sprintf(
                        'Paquete %s clase(s) %s(es)',
                        $transaction->isPackageIsUnlimited() ? '∞' : $transaction->getPackageTotalClasses(),
                        PackageSessionType::getDescription($transaction->getPackageType())
                    ),
                    'unit_price' => $total,
                    'quantity' => 1,
                ],
            ],
            'customer_info' => [
                'customer_id' => $conektaCustomerId,
            ],
            'metadata' => [
                'transaction_id' => $transaction->getId(),
            ],
            'charges' => [
                [
                    'payment_method' => [
                        'payment_source_id' => $conektaCardId,
                        'type' => 'card',
                    ],
                    'amount' => $total,
                ],
            ],
        ];

        $this->logger->info('Create order', $orderData);

        return $this->createOrder($orderData);
    }
}
