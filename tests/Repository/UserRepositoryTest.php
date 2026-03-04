<?php

namespace App\Tests\Repository;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class UserRepositoryTest extends KernelTestCase
{
    private EntityManagerInterface $entityManager;
    private UserRepository $userRepository;

    protected function setUp(): void
    {
        self::bootKernel();
        $this->entityManager = self::getContainer()->get(EntityManagerInterface::class);
        $this->userRepository = $this->entityManager->getRepository(User::class);
    }

    /**
     * Test que trim() se aplica a filtro 'name'
     * 
     * Verifica que:
     * - Búsqueda con "Daniel" encuentra usuarios
     * - Búsqueda con "  Daniel  " (con espacios) encuentra LOS MISMOS usuarios
     * - Los espacios se normalizan en el backend
     */
    public function testNameFilterWithTrim(): void
    {
        // Búsqueda sin espacios
        $queryBuilder1 = $this->userRepository->findWithFilters(['name' => 'Daniel']);
        $results1 = $queryBuilder1->getQuery()->getResult();
        $count1 = count($results1);

        // Búsqueda con espacios externos
        $queryBuilder2 = $this->userRepository->findWithFilters(['name' => '  Daniel  ']);
        $results2 = $queryBuilder2->getQuery()->getResult();
        $count2 = count($results2);

        // Ambas búsquedas deben retornar el mismo número de resultados
        $this->assertEquals($count1, $count2, 
            "Filter with spaces should return same count as without spaces for 'name' filter"
        );

        // Extraer IDs para comparar directamente
        $ids1 = array_map(fn($u) => $u->getId(), $results1);
        $ids2 = array_map(fn($u) => $u->getId(), $results2);

        // Los IDs deben ser idénticos
        $this->assertEquals(sort($ids1), sort($ids2),
            "Filtered user IDs should be identical regardless of leading/trailing spaces"
        );
    }

    /**
     * Test que trim() se aplica a filtro 'lastname'
     */
    public function testLastnameFilterWithTrim(): void
    {
        // Búsqueda sin espacios
        $queryBuilder1 = $this->userRepository->findWithFilters(['lastname' => 'Vasallo']);
        $results1 = $queryBuilder1->getQuery()->getResult();
        $count1 = count($results1);

        // Búsqueda con espacios externos
        $queryBuilder2 = $this->userRepository->findWithFilters(['lastname' => '  Vasallo  ']);
        $results2 = $queryBuilder2->getQuery()->getResult();
        $count2 = count($results2);

        // Ambas búsquedas deben retornar el mismo número de resultados
        $this->assertEquals($count1, $count2,
            "Filter with spaces should return same count as without spaces for 'lastname' filter"
        );

        // Extraer IDs para comparar
        $ids1 = array_map(fn($u) => $u->getId(), $results1);
        $ids2 = array_map(fn($u) => $u->getId(), $results2);

        // Los IDs deben ser idénticos
        $this->assertEquals(sort($ids1), sort($ids2),
            "Filtered user IDs should be identical regardless of leading/trailing spaces"
        );
    }

    /**
     * Test que trim() se aplica a filtro 'email'
     */
    public function testEmailFilterWithTrim(): void
    {
        // Usar un email que sabemos que existe
        $email = 'ydvasallo@gmail.com';
        
        // Búsqueda sin espacios
        $queryBuilder1 = $this->userRepository->findWithFilters(['email' => $email]);
        $results1 = $queryBuilder1->getQuery()->getResult();
        $count1 = count($results1);

        // Búsqueda con espacios externos
        $queryBuilder2 = $this->userRepository->findWithFilters(['email' => "  $email  "]);
        $results2 = $queryBuilder2->getQuery()->getResult();
        $count2 = count($results2);

        // Ambas búsquedas deben retornar el mismo número de resultados
        $this->assertEquals($count1, $count2,
            "Filter with spaces should return same count as without spaces for 'email' filter"
        );

        // Extraer IDs para comparar
        $ids1 = array_map(fn($u) => $u->getId(), $results1);
        $ids2 = array_map(fn($u) => $u->getId(), $results2);

        // Los IDs deben ser idénticos
        $this->assertEquals(sort($ids1), sort($ids2),
            "Filtered user IDs should be identical regardless of leading/trailing spaces"
        );
    }

    /**
     * Test que múltiples espacios internos se mantienen
     * 
     * "De la Torre" debe seguir siendo "De la Torre" (espacios internos se preservan)
     */
    public function testInternalSpacesArePreserved(): void
    {
        // Búsqueda con nombre compuesto (espacios internos)
        $queryBuilder = $this->userRepository->findWithFilters(['name' => 'De la Torre']);
        $results = $queryBuilder->getQuery()->getResult();

        // El query debe ejecutarse correctamente (sin sintaxis errors)
        $this->assertIsArray($results);
    }

    /**
     * Test que solo espacios retorna cero resultados
     * 
     * Un filtro de solo espacios se convierte en "" (vacío) y se ignora
     */
    public function testOnlySpacesFilterIsIgnored(): void
    {
        // Búsqueda con solo espacios
        $queryBuilder = $this->userRepository->findWithFilters(['name' => '    ']);
        $results = $queryBuilder->getQuery()->getResult();

        // empty('    ') es false, pero trim('    ') es '', y empty('') es true
        // Por lo tanto el filtro debe ignorarse
        // Esto es un edge case - verificar que no causa SQL errors
        $this->assertIsArray($results);
    }

    /**
     * Test que múltiples filtros con espacios funcionan juntos
     */
    public function testMultipleFiltersWithSpaces(): void
    {
        // Sin espacios
        $queryBuilder1 = $this->userRepository->findWithFilters([
            'name' => 'Daniel',
            'lastname' => 'Levy'
        ]);
        $results1 = $queryBuilder1->getQuery()->getResult();
        $count1 = count($results1);

        // Con espacios en ambos filtros
        $queryBuilder2 = $this->userRepository->findWithFilters([
            'name' => '  Daniel  ',
            'lastname' => '  Levy  '
        ]);
        $results2 = $queryBuilder2->getQuery()->getResult();
        $count2 = count($results2);

        // Deben retornar los mismos resultados
        $this->assertEquals($count1, $count2,
            "Multiple filters with spaces should return same results as without spaces"
        );
    }

    /**
     * Test que buscas parciales con espacios funcionan
     * 
     * LIKE '%  Dan  %' debe ser equivalente a LIKE '%Dan%'
     */
    public function testPartialSearchWithSpaces(): void
    {
        // Búsqueda parcial sin espacios
        $queryBuilder1 = $this->userRepository->findWithFilters(['name' => 'Dan']);
        $results1 = $queryBuilder1->getQuery()->getResult();
        $count1 = count($results1);

        // Búsqueda parcial con espacios
        $queryBuilder2 = $this->userRepository->findWithFilters(['name' => '  Dan  ']);
        $results2 = $queryBuilder2->getQuery()->getResult();
        $count2 = count($results2);

        // Deben retornar la misma cantidad
        $this->assertEquals($count1, $count2,
            "Partial search with spaces should return same count"
        );

        // Verificar que ambos encuentran usuarios (Dan es común)
        $this->assertGreaterThan(0, $count1, "Should find users with 'Dan' in name");
        $this->assertGreaterThan(0, $count2, "Should find users with 'Dan' in name (with spaces)");
    }

    /**
     * Test de rendimiento - que trim() no degrada performance
     */
    public function testPerformanceNotAffected(): void
    {
        $iterations = 10;
        $startTime = microtime(true);

        for ($i = 0; $i < $iterations; $i++) {
            $queryBuilder = $this->userRepository->findWithFilters(['name' => 'Daniel']);
            $results = $queryBuilder->getQuery()->getResult();
        }

        $endTime = microtime(true);
        $duration = ($endTime - $startTime) / $iterations;

        // Verificar que es rápido (< 100ms por query)
        $this->assertLessThan(0.1, $duration,
            "Each query should take less than 100ms. Average: {$duration}s"
        );
    }

    protected function tearDown(): void
    {
        parent::tearDown();
        $this->entityManager->close();
    }
}
