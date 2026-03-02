<?php

declare(strict_types=1);

namespace App\Command;

use App\Entity\Session;
use App\Repository\SessionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'app:session:autoclosing',
    description: 'Cierre de las clases que ya pasaron su hora de inicio.',
)]
class SessionAutoClosingCommand extends AbstractCommand
{
    public function __construct(
        private readonly SessionRepository $sessionRepository,
        private readonly EntityManagerInterface $em,
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->msg('Consultando sesiones no cerradas...');
        $sessions = $this->sessionRepository->getNotClosed();
        $this->msgInfo(sprintf('Total de sesiones a cerrar: %d', count($sessions)));

        foreach ($sessions as $session) {
            $this->msgInfo(sprintf(' - Cerrar sesión: %d', $session->getId()));
            $session->setStatus(Session::STATUS_CLOSED);
            $this->em->persist($session);
            $this->em->flush();
        }

        $this->msg('Proceso finalizado.');

        return Command::SUCCESS;
    }
}
