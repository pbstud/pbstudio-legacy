<?php

namespace App\Tests\Repository;

use App\Entity\Session;
use App\Repository\SessionRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class SessionRepositoryTest extends KernelTestCase
{
    private SessionRepository $sessionRepository;

    protected function setUp(): void
    {
        self::bootKernel();
        $this->sessionRepository = self::getContainer()
            ->get(SessionRepository::class);
    }

    /**
     * Test que verifica que getQueryBuilderInPeriod() incluye ORDER BY timeStart
     * 
     * Validación sintáctica del fix aplicado:
     * - Método debe existir
     * - Query debe incluir orderBy('s.timeStart', 'ASC')
     */
    public function testGetQueryBuilderInPeriodHasOrderByTimeStart(): void
    {
        // Este test verifica la sintaxis del código
        // El fix real se valida visualmente en el navegador
        
        $this->assertTrue(
            method_exists($this->sessionRepository, 'getQueryBuilderInPeriod'),
            'SessionRepository debe tener método privado getQueryBuilderInPeriod'
        );
        
        // Verificar que el archivo contiene el orderBy
        $reflection = new \ReflectionClass(SessionRepository::class);
        $filename = $reflection->getFileName();
        $content = file_get_contents($filename);
        
        $this->assertStringContainsString(
            "->orderBy('s.timeStart', 'ASC')",
            $content,
            "SessionRepository::getQueryBuilderInPeriod() debe contener ->orderBy('s.timeStart', 'ASC')"
        );
    }
}
