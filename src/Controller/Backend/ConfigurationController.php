<?php

declare(strict_types=1);

namespace App\Controller\Backend;

use App\Entity\Configuration;
use App\Model\ConfigurationFileModel;
use App\Repository\ConfigurationRepository;
use App\Repository\PackageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Vich\UploaderBundle\Handler\UploadHandler;

#[IsGranted('ROLE_ADMIN')]
#[Route('/backend/settings')]
class ConfigurationController extends AbstractController
{
    private UploadHandler $uploadHandler;

    private array $cast = [
        'stats' => [
            'start_date' => 'date',
        ],
    ];

    #[Route('/', name: 'backend_configuration', methods: ['GET'])]
    public function index(
        ConfigurationRepository $configurationRepository,
        PackageRepository $packageRepository,
    ): Response {
        $packages = $packageRepository->findBy([
            'isActive' => true,
        ]);

        /** @var Configuration $general */
        $general = $configurationRepository->findGeneral();

        if ($general) {
            $general = $general->getData();
        }

        /** @var Configuration $conekta */
        $conekta = $configurationRepository->findConekta();

        if ($conekta) {
            $conekta = $conekta->getData();
        }

        /** @var Configuration $sessions */
        $sessions = $configurationRepository->findSessions();

        if ($sessions) {
            $sessions = $sessions->getData();
        }

        /** @var Configuration $notice */
        $notice = $configurationRepository->findNotice();

        if ($notice) {
            $notice = $notice->getData();
            $this->getConfigFiles($notice, ['image']);
        }

        $stats = $this->reverseCast('stats', $configurationRepository->findStats()?->getData());

        return $this->render('backend/configuration/index.html.twig', [
            'packages' => $packages,
            'general' => $general,
            'conekta' => $conekta,
            'sessions' => $sessions,
            'notice' => $notice,
            'stats' => $stats,
        ]);
    }

    #[Route('/update', name: 'backend_configuration_update', methods: ['PUT'])]
    public function update(
        Request $request,
        UploadHandler $uploadHandler,
        ConfigurationRepository $configurationRepository,
        EntityManagerInterface $em,
    ): Response {
        $this->uploadHandler = $uploadHandler;

        $data = $request->request->all();

        unset($data['_method']);

        $uploads = $this->uploadFiles($request->files->all(), $configurationRepository);
        $data = array_merge_recursive($data, $uploads);

        foreach ($data as $module => $values) {
            $entity = $configurationRepository->findOneByModule($module);

            if (!$entity) {
                $entity = new Configuration();
                $entity->setModule($module);
            }

            $values = $this->castValues($module, $values);

            $entity->setData($values);
            $em->persist($entity);
        }

        $em->flush();

        $this->addFlash('success', '¡La configuración ha sido actualizada!');

        return $this->redirectToRoute('backend_configuration');
    }

    private function uploadFiles(array $data, ConfigurationRepository $configurationRepository): array
    {
        $uploads = [];

        foreach ($data as $module => $files) {
            /** @var Configuration $config */
            $config = $configurationRepository->findOneByModule($module);
            $configData = $config ? $config->getData() : [];
            foreach ($files as $field => $file) {
                $value = $configData[$field] ?? null;

                if ($file instanceof UploadedFile) {
                    $configFile = new ConfigurationFileModel();
                    $configFile->setName($value);

                    $configFile->setFile($file);
                    $this->uploadHandler->upload($configFile, 'file');
                    $value = $configFile->getName();
                }

                $uploads[$module][$field] = $value;
            }
        }

        return $uploads;
    }

    /**
     * Config files.
     *
     * @param array $config
     * @param array $fields
     */
    private function getConfigFiles(array &$config, array $fields): void
    {
        foreach ($fields as $field) {
            if (!empty($config[$field])) {
                $configFile = new ConfigurationFileModel();
                $configFile->setName($config[$field]);
                $config[$field] = $configFile;
            }
        }
    }

    private function castValues(string $module, array $values): array
    {
        foreach ($values as $field => $value) {
            if (empty($value) || !isset($this->cast[$module][$field])) {
                continue;
            }

            $values[$field] = match ($this->cast[$module][$field]) {
                'date' => \DateTime::createFromFormat('d/m/Y', $value)->format('Y-m-d'),
                default => $value,
            };
        }

        return $values;
    }

    private function reverseCast(string $module, ?array $values): array
    {
        if (empty($values)) {
            return [];
        }

        foreach ($values as $field => $value) {
            if (empty($value) || !isset($this->cast[$module][$field])) {
                continue;
            }

            $values[$field] = match ($this->cast[$module][$field]) {
                'date' => (new \DateTime($value))->format('d/m/Y'),
                default => $value,
            };
        }

        return $values;
    }
}
