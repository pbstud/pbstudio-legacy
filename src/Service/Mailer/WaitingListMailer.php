<?php

declare(strict_types=1);

namespace App\Service\Mailer;

use App\Entity\Session;
use App\Entity\User;
use App\Entity\WaitingList;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

/**
 * Waiting List Mailer.
 */
class WaitingListMailer extends AbstractMailManager
{
    /**
     * Envia un mail de confirmación al usuario.
     *
     * @param WaitingList $waitingList
     */
    public function sendRegistrationConfirmationEmail(WaitingList $waitingList): void
    {
        $user = $waitingList->getUser();

        /** @var Session $session */
        $session = $waitingList->getSession();
        $exerciseRoom = $session->getExerciseRoom();
        $discipline = $session->getDiscipline();
        $instructor = $session->getInstructor();

        $context = [
            'subject' => 'Clase en lista de espera',
            'user' => $user,
            'waitingList' => $waitingList,
            'session' => $session,
            'exerciseRoom' => $exerciseRoom,
            'discipline' => $discipline,
            'instructor' => $instructor,
        ];

        try {
            $this->sendMessage('mail/waiting_list_register.html.twig', $context, $user->getEmail());
        } catch (TransportExceptionInterface $e) {
        }
    }
}
