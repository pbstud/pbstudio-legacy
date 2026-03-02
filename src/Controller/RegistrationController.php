<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Service\Mailer\UserMailer;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'register')]
    public function index(
        Request $request,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $em,
        UserMailer $userMailer,
        Security $security,
    ): Response {
        // Only ajax register.
        if (!$request->isXmlHttpRequest()) {
            return $this->redirectToRoute('homepage');
        }

        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $plainPassword = $form->get('plainPassword')->getData();

            // encode the plain password
            $user->setPassword($passwordHasher->hashPassword($user, $plainPassword));

            $user->setEnabled(true);

            $em->persist($user);
            $em->flush();

            $userMailer->sendWelcomeEmail($user);

            return $security->login($user, 'form_login', 'main');
        }

        $template = $request->get('_modaltarget') ? 'modal' : 'index';

        return $this->render(sprintf('registration/%s.html.twig', $template), [
            'form' => $form->createView(),
        ]);
    }
}
