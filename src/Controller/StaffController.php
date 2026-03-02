<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\StaffRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StaffController extends AbstractController
{
    #[Route('/instructores', name: 'instructors', methods: ['GET'])]
    public function index(StaffRepository $staffRepository): Response
    {
        return $this->render('staff/index.html.twig', [
            'instructors' => $staffRepository->getAllActiveInstructors(),
        ]);
    }
}
