<?php

declare(strict_types=1);

namespace App\Controller\Backend;

use App\Entity\ExerciseRoom;
use App\Form\Backend\ExerciseRoomType;
use App\Repository\ExerciseRoomRepository;
use App\Repository\SessionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapQueryParameter;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

/**
 * Exercise Room Controller.
 */
#[IsGranted('ALLOWED_ROUTE_ACCESS')]
#[Route('backend/exerciseroom')]
class ExerciseRoomController extends AbstractController
{
    #[Route('/', name: 'backend_exerciseroom', methods: ['GET'])]
    public function index(
        PaginatorInterface $paginator,
        ExerciseRoomRepository $exerciseRoomRepository,
        #[MapQueryParameter] int $page = 1,
    ): Response {
        $pagination = $paginator->paginate(
            $exerciseRoomRepository->getQueryAll(),
            $page,
            Exerciseroom::NUMBER_OF_ITEMS
        );

        return $this->render('backend/exerciseroom/index.html.twig', [
            'pagination' => $pagination,
        ]);
    }

    #[Route('/new', name: 'backend_exerciseroom_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $exerciseRoom = new Exerciseroom();
        $form = $this->createForm(ExerciseRoomType::class, $exerciseRoom);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($exerciseRoom);
            $em->flush();

            $this->addFlash('success', 'El Salón ha sido creado.');

            return $this->redirectToRoute('backend_exerciseroom_edit', [
                'id' => $exerciseRoom->getId(),
            ]);
        }

        return $this->render('backend/exerciseroom/new.html.twig', [
            'exerciseRoom' => $exerciseRoom,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/edit', name: 'backend_exerciseroom_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        ExerciseRoom $exerciseRoom,
        EntityManagerInterface $em,
        SessionRepository $sessionRepository,
    ): Response {
        $editForm = $this->createForm(ExerciseRoomType::class, $exerciseRoom);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $sessionRepository->updateCapacity($exerciseRoom);

            $em->flush();

            $this->addFlash('success', 'El Salón ha sido actualizado.');

            return $this->redirectToRoute('backend_exerciseroom_edit', [
                'id' => $exerciseRoom->getId(),
            ]);
        }

        return $this->render('backend/exerciseroom/edit.html.twig', [
            'exerciseRoom' => $exerciseRoom,
            'form' => $editForm->createView(),
        ]);
    }
}
