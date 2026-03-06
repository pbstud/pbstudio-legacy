<?php

declare(strict_types=1);

namespace App\Service;

use App\Entity\Reservation;
use App\Entity\Session;
use App\Entity\SessionAudit;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Servicio para cancelar reservaciones y devolver créditos cuando
 * un admin deshabilita asientos con reservaciones existentes.
 */
class ReservationCancellationService
{
    public function __construct(
        private readonly EntityManagerInterface $em,
        private readonly LoggerInterface $logger,
    ) {
    }

    /**
     * Cancela UNA reservación y devuelve crédito a la transacción.
     *
     * @param Reservation $reservation La reservación a cancelar
     *
     * @return bool true si se canceló exitosamente, false si ya estaba cancelada
     *
     * @throws \LogicException Si la reservación no tiene Transaction asociada
     */
    public function cancelAndRefund(Reservation $reservation): bool
    {
        // Validar que la reservación está activa
        if (!$reservation->isIsAvailable()) {
            $this->logger->warning('Intento de cancelar reservación ya cancelada', [
                'reservation_id' => $reservation->getId(),
            ]);

            return false;
        }

        // Validar que tiene Transaction
        $transaction = $reservation->getTransaction();
        if ($transaction === null) {
            throw new \LogicException(sprintf(
                'La reservación ID %d no tiene Transaction asociada',
                $reservation->getId()
            ));
        }

        // Marcar reservación como cancelada
        $reservation->setIsAvailable(false);
        $reservation->setCancellationAt(new \DateTime());

        // Devolver crédito SOLO si el paquete NO es ilimitado
        if (!$transaction->isPackageIsUnlimited()) {
            $transaction->setHaveSessionsAvailable(true);

            $this->logger->info('Crédito devuelto a Transaction', [
                'transaction_id' => $transaction->getId(),
                'reservation_id' => $reservation->getId(),
                'user_id' => $reservation->getUser()?->getId(),
            ]);
        } else {
            $this->logger->info('Reservación cancelada (paquete ilimitado, sin devolución crédito)', [
                'transaction_id' => $transaction->getId(),
                'reservation_id' => $reservation->getId(),
            ]);
        }

        return true;
    }

    /**
     * Cancela múltiples reservaciones, devuelve créditos y crea auditoría.
     *
     * @param Reservation[] $reservations    Reservaciones a cancelar
     * @param Session       $session         Sesión donde ocurre el cambio
     * @param UserInterface $adminUser       Usuario admin que realiza el cambio
     * @param array         $disabledPlaces  Array de números de asientos deshabilitados
     * @param string        $reason          Motivo de la deshabilitación (10-500 chars)
     *
     * @return array ['success' => int, 'failed' => int]
     */
    public function cancelMultipleAndAudit(
        array $reservations,
        Session $session,
        UserInterface $adminUser,
        array $disabledPlaces,
        string $reason
    ): array {
        // Validar datos de entrada
        if (!$this->validateData($session, $reservations)) {
            $this->logger->error('Datos inválidos para cancelación múltiple', [
                'session_id' => $session->getId(),
                'reservations_count' => count($reservations),
            ]);

            return ['success' => 0, 'failed' => count($reservations)];
        }

        // Validar motivo
        $reasonLength = mb_strlen(trim($reason));
        if ($reasonLength < 10 || $reasonLength > 500) {
            $this->logger->error('Motivo inválido (debe tener 10-500 caracteres)', [
                'reason_length' => $reasonLength,
            ]);

            throw new \InvalidArgumentException('El motivo debe tener entre 10 y 500 caracteres');
        }

        $successCount = 0;
        $failedCount = 0;
        $affectedUsers = [];

        // Cancelar cada reservación
        foreach ($reservations as $reservation) {
            try {
                if ($this->cancelAndRefund($reservation)) {
                    ++$successCount;

                    // Recolectar datos del usuario afectado
                    $user = $reservation->getUser();
                    if ($user !== null) {
                        $affectedUsers[] = [
                            'id' => $user->getId(),
                            'name' => $user->getName().' '.$user->getLastname(),
                            'email' => $user->getEmail(),
                            'place' => $reservation->getPlaceNumber(),
                        ];
                    }
                } else {
                    ++$failedCount;
                }
            } catch (\Exception $e) {
                ++$failedCount;
                $this->logger->error('Error cancelando reservación', [
                    'reservation_id' => $reservation->getId(),
                    'error' => $e->getMessage(),
                ]);
            }
        }

        // Crear registro de auditoría
        if ($successCount > 0) {
            $audit = new SessionAudit();
            $audit->setSession($session);
            $audit->setAdminUserIdentifier($adminUser->getUserIdentifier());
            $audit->setAuditType('place_disabled');
            $audit->setReason($reason);
            $audit->setDisabledPlaces($disabledPlaces);
            $audit->setAffectedUsers($affectedUsers);
            $audit->setAffectedReservationsCount($successCount);

            $this->em->persist($audit);

            $this->logger->info('Auditoría de deshabilitación creada', [
                'session_id' => $session->getId(),
                'admin_user_identifier' => $adminUser->getUserIdentifier(),
                'affected_count' => $successCount,
                'disabled_places' => $disabledPlaces,
            ]);
        }

        // Flush todos los cambios juntos
        $this->em->flush();

        return [
            'success' => $successCount,
            'failed' => $failedCount,
        ];
    }

    /**
     * Valida que los datos son correctos antes de procesar.
     *
     * @param Session       $session      Sesión a validar
     * @param Reservation[] $reservations Reservaciones a validar
     *
     * @return bool true si los datos son válidos
     */
    public function validateData(Session $session, array $reservations): bool
    {
        // Validar que la sesión tiene ID
        if ($session->getId() === null) {
            $this->logger->error('Session sin ID');

            return false;
        }

        // Validar cada reservación
        foreach ($reservations as $reservation) {
            // Validar que es una instancia de Reservation
            if (!$reservation instanceof Reservation) {
                $this->logger->error('Elemento no es una Reservation', [
                    'type' => get_class($reservation),
                ]);

                return false;
            }

            // Validar que pertenece a esta sesión
            if ($reservation->getSession()?->getId() !== $session->getId()) {
                $this->logger->error('Reservación no pertenece a esta sesión', [
                    'reservation_id' => $reservation->getId(),
                    'reservation_session_id' => $reservation->getSession()?->getId(),
                    'expected_session_id' => $session->getId(),
                ]);

                return false;
            }

            // Validar que tiene usuario asignado
            if ($reservation->getUser() === null) {
                $this->logger->error('Reservación sin usuario asignado', [
                    'reservation_id' => $reservation->getId(),
                ]);

                return false;
            }
        }

        return true;
    }
}
