<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\User;
use App\Form\ResettingFormType;
use App\Repository\UserRepository;
use App\Service\Mailer\ResettingMailer;
use App\Util\TokenGenerator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

/**
 * Resetting Controller.
 *
 * @author JCHR <car.chr@gmail.com>
 */
#[Route('/restablecer')]
class ResettingController extends AbstractController
{
    #[Route('/solicitud', name: 'resetting_request', methods: ['GET'])]
    public function request(Request $request): Response
    {
        $template = $request->get('_modaltarget') ? 'request_modal' : 'request';

        return $this->render(sprintf('resetting/%s.html.twig', $template));
    }

    #[Route('/send-email', name: 'resetting_send_email', methods: ['POST'])]
    public function sendEmail(
        Request $request,
        UserRepository $userRepository,
        ResettingMailer $resettingMailer,
        TranslatorInterface $translator,
        EntityManagerInterface $em,
    ): Response {
        $username = $request->request->get('username');

        /** @var User $user */
        $user = $userRepository->findByEmail($username);

        $result = $this->validateNonExistUser($request, $user);

        if (!$result) {
            $result = $this->validatePasswordExpired($request, $translator, $user);
        }

        if (!$result) {
            $result = $this->sendNotification($request, $user, $resettingMailer, $em);
        }

        if (is_array($result)) {
            $result = $this->json($result);
        }

        return $result;
    }

    #[Route('/check-email', name: 'resetting_check_email', methods: ['GET'])]
    public function checkEmail(Request $request): Response
    {
        $retryTtl = $this->getParameter('resetting_retry_ttl');

        $template = $request->get('_modaltarget') ? 'check_email_modal' : 'check_email';

        return $this->render(sprintf('resetting/%s.html.twig', $template), [
            'tokenLifetime' => ceil($retryTtl / 3600),
        ]);
    }

    #[Route('/{token}', name: 'resetting_reset', methods: ['GET', 'POST'])]
    public function reset(
        Request $request,
        string $token,
        UserRepository $userRepository,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $em,
        Security $security,
    ): Response {
        $user = $userRepository->findByConfirmationToken($token);
        $retryTtl = $this->getParameter('resetting_retry_ttl');

        if (!$user || !$user->isPasswordRequestNonExpired($retryTtl)) {
            return $this->redirectToRoute('homepage');
        }

        $form = $this->createForm(ResettingFormType::class, null, [
            'validation_groups' => ['ResetPassword', 'Default'],
        ]);

        $form->setData($user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $hashedPassword = $passwordHasher->hashPassword($user, $user->getPlainPassword());

            $user
                ->setPassword($hashedPassword)
                ->setConfirmationToken(null)
                ->setPasswordRequestedAt(null)
            ;

            $em->persist($user);
            $em->flush();

            $security->login($user, 'form_login', 'main');

            return $this->redirectToRoute('profile');
        }

        return $this->render('resetting/reset.html.twig', [
            'token' => $token,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @param Request             $request
     * @param TranslatorInterface $translator
     * @param User|null           $user
     *
     * @return array|RedirectResponse|null
     */
    private function validatePasswordExpired(Request $request, TranslatorInterface $translator, User $user = null)
    {
        $result = null;
        $retryTtl = $this->getParameter('resetting_retry_ttl');

        if ($user && $user->isPasswordRequestNonExpired($retryTtl)) {
            $tokenLifetime = ceil($retryTtl / 3600);

            $error = $translator->trans('resetting.flash.error.active_request', [
                '%tokenLifetime%' => $tokenLifetime,
            ]);

            if ($request->request->has('_modaltarget')) {
                $result = ['error' => $error];
            } else {
                $this->addFlash('danger', $error);
                $result = $this->redirectToRoute('resetting_request');
            }
        }

        return $result;
    }

    /**
     * @param Request   $request
     * @param User|null $user
     *
     * @return array|RedirectResponse|null
     */
    private function validateNonExistUser(Request $request, User $user = null)
    {
        $result = null;

        if (!$user) {
            $error = 'La dirección de correo electrónico no existe.';

            if ($request->request->has('_modaltarget')) {
                $result = ['error' => $error];
            } else {
                $this->addFlash('danger', $error);

                $result = $this->redirectToRoute('resetting_request');
            }
        }

        return $result;
    }

    private function sendNotification(
        Request $request,
        User $user,
        ResettingMailer $resettingMailer,
        EntityManagerInterface $em,
    ) {
        try {
            $user
                ->setConfirmationToken(TokenGenerator::generateToken())
                ->setPasswordRequestedAt(new \DateTime())
            ;

            $em->persist($user);
            $em->flush();

            $resettingMailer->sendResetting($user);
        } catch (\Exception $e) {
        }

        if ($request->request->has('_modaltarget')) {
            $result = [
                'targetUrl' => $this->generateUrl('resetting_check_email', [
                    'username' => $user->getEmail(),
                    '_modaltarget' => 1,
                ]),
            ];
        } else {
            $result = $this->redirectToRoute('resetting_check_email', [
                'username' => $user->getEmail(),
            ]);
        }

        return $result;
    }
}
