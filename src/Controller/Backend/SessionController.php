<?php

declare(strict_types=1);

namespace App\Controller\Backend;

use App\Entity\BranchOffice;
use App\Entity\ExerciseRoom;
use App\Entity\Reservation;
use App\Entity\Session;
use App\Entity\Staff;
use App\Event\SessionCanceledEvent;
use App\Form\Backend\SessionType;
use App\Repository\BranchOfficeRepository;
use App\Repository\ExerciseRoomRepository;
use App\Repository\ReservationRepository;
use App\Repository\SessionRepository;
use App\Repository\StaffRepository;
use App\Util\Schedule;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\HttpKernel\Attribute\MapQueryParameter;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/backend/session')]
class SessionController extends AbstractController
{
    #[Route('/get', name: 'backend_session_get', methods: ['GET'])]
    public function getJson(
        SessionRepository $sessionRepository,
        #[MapQueryParameter] array $filters = [],
    ): JsonResponse {
        $json = [];

        if (empty($filters['date_start'])) {
            $filters['date_start'] = (new \DateTime('today'))->format('d/m/Y');
        }

        $filters['date_end'] = $filters['date_start'];

        $sessions = $sessionRepository->findForBackendList($filters);

        if ($sessions) {
            foreach ($sessions as $session) {
                if (Session::STATUS_CANCEL !== $session['status']) {
                    $json[] = [
                        'id' => $session['id'],
                        'type' => $session['type'],
                        'date_start' => $session['dateStart']->format('d/m/Y'),
                        'time_start' => $session['timeStart']->format('h:i a'),
                        'discipline' => $session['discipline'],
                        'instructor' => $session['instructor'],
                        'status' => $session['status'],
                        'branch_office' => $session['branchOffice'],
                    ];
                }
            }
        }

        return new JsonResponse($json);
    }

    #[Route('/', name: 'backend_session', methods: ['GET'])]
    #[IsGranted('ALLOWED_ROUTE_ACCESS')]
    public function index(
        Request $request,
        PaginatorInterface $paginator,
        SessionRepository $sessionRepository,
        StaffRepository $staffRepository,
        BranchOfficeRepository $branchOfficeRepository,
        ExerciseRoomRepository $exerciseRoomRepository,
        Schedule $schedule,
        #[MapQueryParameter] array $filters = [],
        #[MapQueryParameter] int $page = 1,
    ): Response {
        $isInstructor = $this->isGranted('ROLE_INSTRUCTOR');

        /** @var Staff $staff */
        $staff = $this->getUser();
        $assignedBranches = $staff->getBranchOfficesIds();

        if ($isInstructor) {
            $filters['instructor'] = $staff->getId();
        }

        // Filters
        $currentDate = new \DateTime();
        if (empty($filters['date_start'])) {
            $filters['date_start'] = $currentDate->modify('FIRST DAY OF THIS MONTH')->format('d/m/Y');
        }

        if (empty($filters['date_end'])) {
            $filters['date_end'] = $currentDate->modify('LAST DAY OF THIS MONTH')->format('d/m/Y');
        }

        $filters['assigned_branches'] = $assignedBranches;

        $isExport = $request->query->has('export');
        $sessions = $sessionRepository->findForBackendList($filters, $isExport);

        // Export
        if ($isExport) {
            $response = new StreamedResponse();
            $response->setCallback(static function () use ($sessions) {
                $handle = fopen('php://output', 'w');
                $bom = chr(0xEF).chr(0xBB).chr(0xBF);
                fputs($handle, $bom);

                fputcsv($handle, [
                    'ID',
                    'Día',
                    'Hora',
                    'Salón',
                    'Instructor',
                    'Sucursal',
                    'Alumno',
                    'Lugar',
                ]);

                foreach ($sessions as $session) {
                    fputcsv($handle, [
                        $session['id'],
                        $session['dateStart']->format('d/m/Y'),
                        $session['timeStart']->format('H:i'),
                        $session['exerciseRoom'],
                        $session['instructor'],
                        $session['branchOffice'],
                        sprintf('%s %s', $session['userName'], $session['userLastname']),
                        $session['placeNumber'],
                    ]);
                }

                fclose($handle);
            });

            $response->headers->set('Content-Type', 'application/force-download');
            $response->headers->set('Content-Disposition', 'attachment; filename="sessions.csv"');

            return $response;
        }

        $pagination = $paginator->paginate($sessions, $page, Session::NUMBER_OF_ITEMS);
        $urlExport = $this->generateUrl('backend_session', [
            'filters' => $filters,
            'export' => true,
        ]);
        $instructors = $staffRepository->getAllInstructors();
        $branchOffices = $branchOfficeRepository->findAll();

        if (!empty($assignedBranches)) {
            $branchOffices = array_filter($branchOffices, static function (BranchOffice $branchOffice) use ($assignedBranches) {
                return in_array($branchOffice->getId(), $assignedBranches, true);
            });
        }

        $exerciseRoomsGrouped = [];
        $exerciseRooms = $exerciseRoomRepository->getAll();
        foreach ($exerciseRooms as $exerciseRoom) {
            $exerciseRoomsGrouped[$exerciseRoom->getBranchOffice()->getName()][] = $exerciseRoom;
        }

        $filterStatus = Session::statusList();
        $filterStatus[] = Session::STATUS_NOT_CANCELED;

        return $this->render('backend/session/index.html.twig', [
            'url_export' => $urlExport,
            'instructors' => $instructors,
            'pagination' => $pagination,
            'branch_offices' => $branchOffices,
            'filters' => $filters,
            'filter_status' => $filterStatus,
            'filter_exercise_rooms' => $exerciseRoomsGrouped,
            'filter_schedules' => $schedule->getSchedules(),
            'is_instructor' => $isInstructor,
        ]);
    }

    #[Route('/new', name: 'backend_session_new', methods: ['GET', 'POST'])]
    #[IsGranted('ALLOWED_ROUTE_ACCESS')]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $session = new Session();
        $form = $this->createForm(SessionType::class, $session);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var ExerciseRoom $exerciseRoom */
            $exerciseRoom = $session->getExerciseRoom();
            $session
                ->setExerciseRoomCapacity($exerciseRoom->getCapacity())
                ->setPlacesNotAvailable($exerciseRoom->getPlacesNotAvailable())
                ->setAvailableCapacity($exerciseRoom->getAvailableCapacity())
                ->setType($exerciseRoom->getType())
            ;

            $em->persist($session);
            $em->flush();

            $this->addFlash('success', 'La Clase ha sido creada.');

            return $this->redirectToRoute('backend_session_edit', [
                'id' => $session->getId(),
            ]);
        }

        return $this->render('backend/session/new.html.twig', [
            'session' => $session,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'backend_session_edit', methods: ['GET', 'POST'])]
    #[IsGranted('ALLOWED_ROUTE_ACCESS')]
    public function edit(
        Request $request,
        Session $session,
        EntityManagerInterface $em,
    ): Response {
        $cancelForm = $this->createCancelForm($session);
        $editForm = $this->createForm(SessionType::class, $session);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $session->updateAvailableCapacity();

            $em->flush();

            $this->addFlash('success', 'La Clase ha sido actualizada.');

            return $this->redirectToRoute('backend_session_edit', [
                'id' => $session->getId(),
            ]);
        }

        return $this->render('backend/session/edit.html.twig', [
            'session' => $session,
            'edit_form' => $editForm->createView(),
            'cancel_form' => $cancelForm->createView(),
        ]);
    }

    #[Route('/{id}', name: 'backend_session_cancel', methods: ['POST'])]
    #[IsGranted('ALLOWED_ROUTE_ACCESS')]
    public function cancel(
        Request $request,
        Session $session,
        EntityManagerInterface $em,
        EventDispatcherInterface $eventDispatcher
    ): Response {
        $form = $this->createCancelForm($session);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $session->setStatus(Session::STATUS_CANCEL);

            $em->flush();

            $event = new SessionCanceledEvent($session);
            $eventDispatcher->dispatch($event);

            $this->addFlash('danger', 'La Clase ha sido cancelada.');

            return $this->redirectToRoute('backend_session_edit', [
                'id' => $session->getId(),
            ]);
        }

        return $this->redirectToRoute('backend_session');
    }

    #[Route('/{id}/reservations', name: 'backend_session_reservations', methods: ['GET'])]
    #[IsGranted('ALLOWED_ROUTE_ACCESS')]
    public function reservations(Session $session, EntityManagerInterface $em): Response
    {
        /** @var ReservationRepository $reservationsRepository */
        $reservationRepository = $em->getRepository(Reservation::class);
        $reservations = $reservationRepository->getReservationsBySession($session);
        $cancelForm = $this->createCancelForm($session);

        return $this->render('backend/session/reservations.html.twig', [
            'session' => $session,
            'reservations' => $reservations,
            'cancel_form' => $cancelForm,
        ]);
    }

    #[Route('/{id}/waitinglist', name: 'backend_session_waitinglist', methods: ['GET'])]
    #[IsGranted('ALLOWED_ROUTE_ACCESS')]
    public function waitingList(Session $session): Response
    {
        $waitingList = $session->getWaitingList();

        $cancelForm = $this->createCancelForm($session);

        return $this->render('backend/session/waitinglist.html.twig', [
            'cancel_form' => $cancelForm->createView(),
            'session' => $session,
            'waitinglist' => $waitingList,
        ]);
    }

    #[Route('/{id}/places', name: 'backend_session_places', methods: ['GET'])]
    public function places(Session $session): JsonResponse
    {
        $json = [];
        $capacity = $session->getExerciseRoomCapacity();
        $reservations = $session->getReservations();
        $notAvailable = $session->getPlacesNotAvailable();

        $i = 1;
        for (; $i <= $capacity; ++$i) {
            $json[] = [
                'place' => $i,
                'is_available' => !in_array($i, $notAvailable, false),
            ];
        }

        foreach ($reservations as $reservation) {
            if ($reservation->isIsAvailable()) {
                $json[$reservation->getPlaceNumber() - 1]['is_available'] = false;
            }
        }

        return $this->json($json);
    }

    /**
     * Creates a form to delete a session entity.
     *
     * @param Session $session
     *
     * @return FormInterface
     */
    private function createCancelForm(Session $session): FormInterface
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('backend_session_cancel', [
                'id' => $session->getId(),
            ]))
            ->getForm()
        ;
    }
}
