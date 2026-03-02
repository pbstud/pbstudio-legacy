<?php

declare(strict_types=1);

namespace App\Controller\Backend;

use App\Entity\Package;
use App\Form\Backend\PackageType;
use App\Repository\PackageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapQueryParameter;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ALLOWED_ROUTE_ACCESS')]
#[Route('/backend/package')]
class PackageController extends AbstractController
{
    #[Route('/', name: 'backend_package', methods: ['GET'])]
    public function index(
        PaginatorInterface $paginator,
        PackageRepository $packageRepository,
        #[MapQueryParameter] array $filters = [],
        #[MapQueryParameter] int $page = 1,
    ): Response {
        $packages = $packageRepository->findWithFilters($filters);

        $pagination = $paginator->paginate($packages, $page, Package::NUMBER_OF_ITEMS);

        return $this->render('backend/package/index.html.twig', [
            'pagination' => $pagination,
            'filters' => $filters,
            'filter_types' => Package::typeChoices(),
            'filter_status' => Package::statusChoices(),
            'filter_public' => Package::publicChoices(),
        ]);
    }

    #[Route('/new', name: 'backend_package_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $package = new Package();
        $form = $this->createForm(PackageType::class, $package);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($package);
            $em->flush();

            $this->addFlash('success', 'El Paquete ha sido creado.');

            return $this->redirectToRoute('backend_package_edit', [
                'id' => $package->getId(),
            ]);
        }

        return $this->render('backend/package/new.html.twig', [
            'package' => $package,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/edit', name: 'backend_package_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Package $package, EntityManagerInterface $em): Response
    {
        $editForm = $this->createForm(PackageType::class, $package);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em->flush();
            $this->addFlash('success', 'El Paquete ha sido actualizado.');

            return $this->redirectToRoute('backend_package_edit', [
                'id' => $package->getId(),
            ]);
        }

        return $this->render('backend/package/edit.html.twig', [
            'package' => $package,
            'form' => $editForm,
        ]);
    }
}
