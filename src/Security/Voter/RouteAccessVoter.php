<?php

declare(strict_types=1);

namespace App\Security\Voter;

use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;

class RouteAccessVoter extends Voter
{
    public const ALLOWED_ROUTE_ACCESS = 'ALLOWED_ROUTE_ACCESS';

    public function __construct(private RequestStack $requestStack)
    {
    }

    protected function supports(string $attribute, mixed $subject): bool
    {
        return self::ALLOWED_ROUTE_ACCESS === $attribute;
    }

    protected function voteOnAttribute(string $attribute, mixed $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();

        // if the user is anonymous, do not grant access
        if (!$user instanceof UserInterface) {
            return false;
        }

        $roles = $user->getRoles();

        if (in_array('ROLE_ADMIN', $roles)) {
            return true;
        }

        if (!is_string($subject)) {
            $subject = $this->requestStack->getCurrentRequest()->attributes->get('_route');
        }

        return in_array($subject, $user->getPermissions(), true);
    }
}
