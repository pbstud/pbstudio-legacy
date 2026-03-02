<?php

declare(strict_types=1);

namespace App\Twig\Runtime;

use App\Entity\Configuration;
use App\Model\ConfigurationFileModel;
use App\Repository\ConfigurationRepository;
use Twig\Environment;
use Twig\Extension\RuntimeExtensionInterface;

readonly class ConfigExtensionRuntime implements RuntimeExtensionInterface
{
    public function __construct(private ConfigurationRepository $configurationRepository)
    {
    }

    public function getHeaderScripts()
    {
        $general = $this->configurationRepository->findGeneral()?->getData();

        return $general['header_scripts'] ?? null;
    }

    public function getFooterScripts()
    {
        $general = $this->configurationRepository->findGeneral()?->getData();

        return $general['footer_scripts'] ?? null;
    }

    public function getNotice(Environment $twig): ?string
    {
        $notice = $this->configurationRepository->findNotice()?->getData();

        if (!$notice || !$notice['active']) {
            return null;
        }

        $configFile = new ConfigurationFileModel();
        $configFile->setName($notice['image']);
        $notice['image'] = $configFile;

        return $twig->render('default/_modal_notice.html.twig', $notice);
    }
}
