<?php

namespace App\Tests\Entity;

use App\Entity\Session;
use PHPUnit\Framework\TestCase;

class SessionTest extends TestCase
{
    /**
     * Test que valida el problema con DateTimeImmutable::setTime()
     * 
     * Escenario: Session tiene dateStart (solo fecha) y timeStart (solo hora)
     * Esperado: getDateTimeStart() debe retornar un DateTime con fecha + hora combinadas
     * 
     * ESTE TEST FALLARÁ CON EL CÓDIGO ACTUAL
     * Después de aplicar los fixes, este test pasará
     * 
     * Problema actual: $dateStart->setTime(...) no captura el retorno
     * Por lo que getDateTimeStart() retorna la fecha sin la hora modificada
     */
    public function testGetDateTimeStartCombinesFechaAndHora(): void
    {
        // Crear una session con fecha y hora específicas
        $session = new Session();
        
        // dateStart: 02/03/2026 00:00:00 (solo fecha)
        $dateStart = new \DateTimeImmutable('2026-03-02 00:00:00');
        $session->setDateStart($dateStart);
        
        // timeStart: 2026-01-01 14:30:00 (solo importa la hora 14:30)
        $timeStart = new \DateTimeImmutable('2026-01-01 14:30:00');
        $session->setTimeStart($timeStart);
        
        // Llamar al método que está fallando
        $dateTimeStart = $session->getDateTimeStart();
        
        // AFIRMACIONES:
        // 1. Debe retornar un DateTimeInterface
        $this->assertInstanceOf(\DateTimeInterface::class, $dateTimeStart);
        
        // 2. Debe ser 02/03/2026 (la fecha de dateStart)
        $this->assertEquals('2026-03-02', $dateTimeStart->format('Y-m-d'));
        
        // 3. Debe ser 14:30 (la hora de timeStart)
        // ⚠️ ESTE TEST FALLA ACTUALMENTE con el código incorrecto
        //    porque setTime() no captura el retorno
        //    Resultado: fecha 2026-03-02 00:00 (hora SIN cambiar)
        $this->assertEquals('14:30', $dateTimeStart->format('H:i'));
        
        // 4. Timestamp completo
        $expected = new \DateTimeImmutable('2026-03-02 14:30:00');
        $this->assertEquals($expected->getTimestamp(), $dateTimeStart->getTimestamp());
    }
    
    /**
     * Test que valida que getDateTimeStart() retorna una NUEVA instancia
     * (no modifica el dateStart original)
     */
    public function testGetDateTimeStartDoesNotModifyOriginalDateStart(): void
    {
        $session = new Session();
        
        // dateStart original
        $originalDateStart = new \DateTimeImmutable('2026-03-02 00:00:00');
        $session->setDateStart($originalDateStart);
        
        $timeStart = new \DateTimeImmutable('2026-01-01 14:30:00');
        $session->setTimeStart($timeStart);
        
        // Llamar getDateTimeStart()
        $dateTimeStart = $session->getDateTimeStart();
        
        // El dateStart original NO debe ser modificado (porque es Immutable)
        $this->assertEquals('2026-03-02 00:00:00', $session->getDateStart()->format('Y-m-d H:i:s'));
        
        // Pero el retorno debe tener la hora combinada
        // ⚠️ ESTE TEST TAMBIÉN FALLA ACTUALMENTE
        $this->assertEquals('2026-03-02 14:30:00', $dateTimeStart->format('Y-m-d H:i:s'));
    }
    
    /**
     * Test que valida el comportamiento esperado en un escenario real
     * 
     * Caso de uso: Verificar si una sesión ya pasó comparando con fecha actual
     */
    public function testGetDateTimeStartForComparisonWithCurrentDate(): void
    {
        $session = new Session();
        
        // Una sesión programada para hoy a las 14:30
        $today = new \DateTimeImmutable();
        $session->setDateStart($today);
        
        $timeStart = new \DateTimeImmutable('2026-01-01 14:30:00');
        $session->setTimeStart($timeStart);
        
        $dateTimeStart = $session->getDateTimeStart();
        $currentDate = new \DateTime();
        
        // Validar que podemos comparar correctamente
        // (Si la sesión es hoy a las 14:30 y ahora son las 10:00, falta tiempo)
        if ($currentDate->format('H:i') < '14:30') {
            $this->assertGreaterThan($currentDate, $dateTimeStart);
        }
        
        // El formato debe ser el esperado para comparaciones
        $this->assertIsInt($dateTimeStart->getTimestamp());
    }
}
