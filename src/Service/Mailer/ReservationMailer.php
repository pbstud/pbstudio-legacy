<?php

declare(strict_types=1);

namespace App\Service\Mailer;

use App\Entity\Reservation;
use App\Entity\Session;
use App\Entity\User;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

/**
 * Reservation Mailer.
 */
class ReservationMailer extends AbstractMailManager
{
    /**
     * Envia un mail de confirmación al usuario.
     *
     * @param Reservation $reservation
     */
    public function sendConfirmationEmail(Reservation $reservation): void
    {
        $this->send(
            'mail/reservation/confirmation.html.twig',
            'Tu reservación ha sido registrada correctamente',
            $reservation
        );
    }

    /**
     * Envia un mail de confirmación al usuario cuando la reservacion
     * proviene de la lista de espera.
     *
     * @param Reservation $reservation
     */
    public function sendWaitingListConfirmationEmail(Reservation $reservation): void
    {
        $this->send(
            'mail/reservation/waitinglist-confirmation.html.twig',
            'Asignación de lugar - Lista de espera',
            $reservation
        );
    }

    /**
     * Envia un mail de confirmación al cancelar una reservación.
     *
     * @param Reservation $reservation
     */
    public function sendCancellationMail(Reservation $reservation): void
    {
        $this->send(
            'mail/reservation/cancellation.html.twig',
            'Tu reservación ha sido cancelada',
            $reservation
        );
    }

    /**
     * Send.
     *
     * @param string      $template
     * @param string      $subject
     * @param Reservation $reservation
     */
    private function send(string $template, string $subject, Reservation $reservation): void
    {
        /** @var Session $session */
        $session = $reservation->getSession();
        $exerciseRoom = $session->getExerciseRoom();
        $discipline = $session->getDiscipline();
        $instructor = $session->getInstructor();

        /** @var User $user */
        $user = $reservation->getUser();

        $context = [
            'subject' => $subject,
            'user' => $user,
            'reservation' => $reservation,
            'session' => $session,
            'exerciseRoom' => $exerciseRoom,
            'discipline' => $discipline,
            'instructor' => $instructor,
        ];

        try {
            $this->sendMessage($template, $context, $user->getEmail());
        } catch (TransportExceptionInterface $e) {
            $this->logger->error('Error sending email: '.$e->getMessage());
        }
    }
}
