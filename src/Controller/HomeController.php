<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\StaffRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'homepage', methods: ['GET'])]
    public function index(StaffRepository $staffRepository): Response
    {
        $instructors = $staffRepository->getAllActiveInstructors();
        shuffle($instructors);

        return $this->render('home/index.html.twig', [
            'instructors' => $instructors,
        ]);
    }
}
