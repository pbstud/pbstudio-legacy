<?php

declare(strict_types=1);

namespace App\Controller\Backend;

use App\Entity\Reservation;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ReservationController extends AbstractController
{
    #[Route('/{id}/attended', name: 'backend_reservation_attended', methods: ['POST'])]
    public function attended(
        Request $request,
        Reservation $reservation,
        EntityManagerInterface $em,
    ): Response {
        $reservation->setAttended($request->request->getBoolean('attended'));
        $em->flush();

        return $this->json([
            'success' => true,
        ]);
    }
}
