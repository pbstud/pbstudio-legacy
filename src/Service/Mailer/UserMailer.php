<?php

declare(strict_types=1);

namespace App\Service\Mailer;

use App\Entity\User;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

/**
 * User Mailer.
 */
class UserMailer extends AbstractMailManager
{
    /**
     * @param User $user
     */
    public function sendWelcomeEmail(User $user): void
    {
        $template = 'mail/welcome.html.twig';

        $context = [
            'subject' => 'Bienvenido a P&B Studio',
            'user' => $user,
        ];

        try {
            $this->sendMessage($template, $context, $user->getEmail());
        } catch (TransportExceptionInterface $e) {
        }
    }
}
