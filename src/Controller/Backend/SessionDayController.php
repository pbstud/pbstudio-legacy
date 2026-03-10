<?php

declare(strict_types=1);

namespace App\Controller\Backend;

use App\Entity\BranchOffice;
use App\Entity\ExerciseRoom;
use App\Entity\Session;
use App\Entity\Staff;
use App\Repository\BranchOfficeRepository;
use App\Repository\ExerciseRoomRepository;
use App\Repository\SessionRepository;
use App\Repository\StaffRepository;
use App\Util\Schedule;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\Attribute\MapDateTime;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/backend/session-day')]
class SessionDayController extends AbstractController
{
    public function __construct(private LoggerInterface $logger)
    {
    }

    #[Route('/', name: 'backend_session_day', methods: ['GET'])]
    #[IsGranted('ALLOWED_ROUTE_ACCESS')]
    public function index(SessionRepository $sessionRepository): Response
    {
        $sessions = $sessionRepository->findAllGroupByDateStart();

        return $this->render('backend/session_day/index.html.twig', [
            'sessions' => $sessions,
        ]);
    }

    #[Route('/new-branch-office', name: 'backend_session_day_new_branch_office', methods: ['GET'])]
    public function newBranchOffice(BranchOfficeRepository $branchOfficeRepository): Response
    {
        return $this->render('backend/session_day/new_branch_office.html.twig', [
            'branchOffices' => $branchOfficeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'backend_session_day_new', methods: ['GET', 'POST'])]
    #[IsGranted('ALLOWED_ROUTE_ACCESS')]
    public function newDay(
        Request $request,
        Schedule $scheduleUtil,
        BranchOfficeRepository $branchOfficeRepository,
        ExerciseRoomRepository $exerciseRoomRepository,
        StaffRepository $instructorRepository,
        SessionInterface $sessionRequest,
        EntityManagerInterface $em
    ): Response {
        $branchOfficeId = $request->query->get('branch_office');

        if (empty($branchOfficeId)) {
            $this->addFlash('danger', 'Sucursal invalida.');

            return $this->redirectToRoute('backend_session_day_new_branch_office');
        }

        /** @var BranchOffice $branchOffice */
        $branchOffice = $branchOfficeRepository->find($branchOfficeId);

        $data = [
            'branchOffice' => $branchOffice,
        ];

        if ('POST' === $request->getMethod()) {
            $this->logger->info('[SessionDay] newDay POST recibido', [
                'branch_office' => $branchOfficeId,
                'user'          => $this->getUser()?->getUserIdentifier(),
                'ip'            => $request->getClientIp(),
            ]);

            try {
                $sessions = $request->request->all('session');
                $schedules = $sessions['schedules'];
                $information = $sessions['information'];

                $newDate = \DateTime::createFromFormat('d/m/Y', $sessions['dateStart']);

                $this->logger->debug('[SessionDay] Fecha parseada en newDay', [
                    'raw_input' => $sessions['dateStart'] ?? null,
                    'parsed'    => $newDate instanceof \DateTime ? $newDate->format('Y-m-d') : 'FALLO_PARSEO',
                ]);

                $currentDate = new \DateTime();
                if ($currentDate >= $newDate) {
                    $this->addFlash('danger', 'Solo se pueden programar fechas futuras.');

                    throw new \InvalidArgumentException();
                }

                foreach ($schedules as $time => $schedule) {
                    $hour = $time;
                    [$timeHour, $timeMinute] = explode(':', $time);
                    $newDate = $newDate->setTime((int) $timeHour, (int) $timeMinute);

                    $this->logger->debug('[SessionDay] Procesando horario', ['time' => $time]);

                    foreach ($schedule as $exerciseRoom => $instructor) {
                        $info = !empty($information[$hour][$exerciseRoom]) ? $information[$hour][$exerciseRoom] : null;

                        $exerciseRoom = $exerciseRoomRepository->findOneById($exerciseRoom);
                        $instructor = $instructorRepository->findOneById($instructor);

                        if ($instructor) {
                            $session = new Session();
                            $session
                                ->setDateStart($newDate)
                                ->setTimeStart($newDate)
                                ->setExerciseRoom($exerciseRoom)
                                ->setExerciseRoomCapacity($exerciseRoom->getCapacity())
                                ->setPlacesNotAvailable($exerciseRoom->getPlacesNotAvailable())
                                ->setAvailableCapacity($exerciseRoom->getAvailableCapacity())
                                ->setType($exerciseRoom->getType())
                                ->setDiscipline($exerciseRoom->getDiscipline())
                                ->setInstructor($instructor)
                                ->setInformation($info)
                                ->setBranchOffice($branchOffice)
                            ;

                            $this->logger->debug('[SessionDay] Creando sesión', [
                                'fecha'       => $newDate->format('Y-m-d H:i:s'),
                                'sala'        => $exerciseRoom?->getId(),
                                'instructor'  => $instructor?->getId(),
                            ]);

                            $em->persist($session);
                            $em->flush();
                        }
                    }
                }

                $this->addFlash('success', 'Las clases han sido creadas.');

                return $this->redirectToRoute('backend_session_day_edit', [
                    'editDate' => $newDate->format('d-m-Y'),
                    'branchOfficeId' => $branchOfficeId,
                ]);
            } catch (\Exception $e) {
                $this->logger->error('[SessionDay] Excepción en newDay', [
                    'mensaje' => $e->getMessage(),
                    'clase'   => get_class($e),
                    'trace'   => $e->getTraceAsString(),
                ]);

                $data['data'] = $request->request->get('session');
            }
        }

        $data['exerciseRooms'] = $exerciseRoomRepository->getActiveByBranchOffice($branchOffice);

        $data['schedules'] = $scheduleUtil->getSchedules();

        if ($sessionRequest->has('dateStart')) {
            $data['data']['dateStart'] = $sessionRequest->get('dateStart')->format('d/m/Y');

            $sessionRequest->remove('dateStart');
        }

        return $this->render('backend/session_day/new.html.twig', $data);
    }

    #[Route('/edit/{editDate}/{branchOfficeId}', name: 'backend_session_day_edit', methods: ['GET', 'POST'])]
    #[IsGranted('ALLOWED_ROUTE_ACCESS')]
    public function editDay(
        Request $request,
        #[MapDateTime(format: 'd-m-Y')]
        \DateTime $editDate,
        int $branchOfficeId,
        Schedule $scheduleUtil,
        EntityManagerInterface $em,
        SessionInterface $sessionRequest,
    ): Response {
        $this->logger->info('[SessionDay] editDay invocado', [
            'editDate'       => $editDate->format('Y-m-d'),
            'branchOfficeId' => $branchOfficeId,
            'user'           => $this->getUser()?->getUserIdentifier(),
            'method'         => $request->getMethod(),
            'ip'             => $request->getClientIp(),
        ]);

        $currentDate = new \DateTime();
        if ($currentDate >= $editDate) {
            $this->logger->warning('[SessionDay] Fecha no editable (es pasada o hoy)', [
                'editDate' => $editDate->format('Y-m-d'),
            ]);

            $this->addFlash('danger', 'Solo se pueden editar fechas futuras.');

            return $this->redirectToRoute('backend_session');
        }

        $exerciseRoomRepository = $em->getRepository(ExerciseRoom::class);
        $instructorRepository = $em->getRepository(Staff::class);
        $sessionRepository = $em->getRepository(Session::class);

        $sessions = $sessionRepository->findBy([
            'status' => Session::STATUS_OPEN,
            'dateStart' => $editDate,
            'branchOffice' => $branchOfficeId,
        ]);

        $this->logger->debug('[SessionDay] Sesiones encontradas en BD', [
            'fecha'    => $editDate->format('Y-m-d'),
            'sucursal' => $branchOfficeId,
            'total'    => count($sessions),
        ]);

        /** @var BranchOfficeRepository $branchOfficeRepository */
        $branchOfficeRepository = $em->getRepository(BranchOffice::class);

        /** @var BranchOffice $branchOffice */
        $branchOffice = $branchOfficeRepository->find($branchOfficeId);
        $data = [
            'branchOffice' => $branchOffice,
        ];

        if (!$sessions) {
            $this->logger->warning('[SessionDay] Sin sesiones para esa fecha — redirigiendo a newDay', [
                'fecha'    => $editDate->format('Y-m-d'),
                'sucursal' => $branchOfficeId,
            ]);

            $sessionRequest->set('dateStart', $editDate);

            return $this->redirectToRoute('backend_session_day_new');
        }

        $data['dateStart'] = $editDate;

        /** @var Session $session */
        foreach ($sessions as $session) {
            $key = $session->getId().$session->getInstructor()->getId().$session->getInformation().$session->getExerciseRoomCapacity().$this->getParameter('secret');

            $data['schedules'][$session->getTimeStart()->format('H:i')][$session->getExerciseRoom()->getId()] = [
                'session' => $session->getId(),
                'instructor' => $session->getInstructor()->getId(),
                'hash' => hash('md5', $key),
                'information' => $session->getInformation(),
                'capacity' => $session->getExerciseRoomCapacity(),
            ];
        }

        if ('POST' === $request->getMethod()) {
            $this->logger->info('[SessionDay] editDay POST recibido', [
                'editDate'       => $editDate->format('Y-m-d'),
                'branchOfficeId' => $branchOfficeId,
                'user'           => $this->getUser()?->getUserIdentifier(),
            ]);

            $sessions = $request->request->all('session');
            $schedules = $sessions['schedules'];
            $information = $sessions['information'];
            $capacities = $sessions['capacity'];

            foreach ($schedules as $schedule => $exerciseRooms) {
                [$timeHour, $timeMinute] = explode(':', $schedule);
                $editDate = $editDate->setTime((int) $timeHour, (int) $timeMinute);

                foreach ($exerciseRooms as $exerciseRoom => $session) {
                    $instructor = (int) $session['instructor'];
                    if (!($instructor > 0)) {
                        continue;
                    }

                    $info = !empty($information[$schedule][$exerciseRoom]) ? $information[$schedule][$exerciseRoom] : null;
                    $capacity = !empty($capacities[$schedule][$exerciseRoom]) ? $capacities[$schedule][$exerciseRoom] : null;

                    if (isset($session['hash'])) {
                        $key = $session['session'].$session['instructor'].$info.$capacity.$this->getParameter('secret');
                        $hash = hash('md5', $key);

                        $this->logger->debug('[SessionDay] Validando hash de sesión existente', [
                            'session_id'      => $session['session'] ?? null,
                            'hash_calculado'  => $hash,
                            'hash_recibido'   => $session['hash'],
                            'coincide'        => hash_equals($hash, $session['hash']),
                        ]);

                        if (!hash_equals($hash, $session['hash'])) {
                            $instructor = $instructorRepository->findOneById($session['instructor']);

                            $session = $sessionRepository->findOneById($session['session']);
                            $session
                                ->setInstructor($instructor)
                                ->setInformation($info)
                                ->setExerciseRoomCapacity((int) $capacity)
                                ->updateAvailableCapacity()
                            ;

                            $this->logger->info('[SessionDay] Sesión actualizada por cambio de hash', [
                                'session_id'  => $session->getId(),
                                'instructor'  => $instructor?->getId(),
                            ]);

                            $em->flush();
                        }
                    } else {
                        /** @var ExerciseRoom $exerciseRoom */
                        $exerciseRoom = $exerciseRoomRepository->findOneById($exerciseRoom);
                        $instructor = $instructorRepository->findOneById($session['instructor']);
                        $capacity = $capacity > 0 ? $capacity : $exerciseRoom->getCapacity();

                        $this->logger->info('[SessionDay] Nueva sesión añadida en editDay', [
                            'fecha'      => $editDate->format('Y-m-d H:i:s'),
                            'sala'       => $exerciseRoom?->getId(),
                            'instructor' => $instructor?->getId(),
                        ]);

                        $session = new Session();
                        $session
                            ->setDateStart($editDate)
                            ->setTimeStart($editDate)
                            ->setExerciseRoom($exerciseRoom)
                            ->setType($exerciseRoom->getType())
                            ->setDiscipline($exerciseRoom->getDiscipline())
                            ->setInstructor($instructor)
                            ->setInformation($info)
                            ->setBranchOffice($branchOffice)
                            ->setExerciseRoomCapacity((int) $capacity)
                            ->setPlacesNotAvailable($exerciseRoom->getPlacesNotAvailable())
                            ->updateAvailableCapacity()
                        ;

                        $em->persist($session);
                        $em->flush();
                    }
                }
            }

            $this->addFlash('success', 'Las clases han sido actualizadas.');

            return $this->redirectToRoute('backend_session_day_edit', [
                'editDate' => $editDate->format('d-m-Y'),
                'branchOfficeId' => $branchOfficeId,
            ]);
        }

        $exerciseRooms = $exerciseRoomRepository->getActiveByBranchOffice($branchOffice);

        $schedules = $scheduleUtil->getSchedules();

        return $this->render('backend/session_day/edit.html.twig', [
            'data' => $data,
            'exerciseRooms' => $exerciseRooms,
            'sessions' => $sessions,
            'schedules' => $schedules,
        ]);
    }
}
