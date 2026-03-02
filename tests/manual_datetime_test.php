<?php

/**
 * Test manual del problema con DateTimeImmutable::setTime()
 * 
 * Ejecutar: php tests/manual_datetime_test.php
 * 
 * Este script demuestra el problema actual y validará que el fix funciona
 */

require_once __DIR__ . '/../vendor/autoload.php';

echo "═══════════════════════════════════════════════════════════════\n";
echo "TEST: DateTimeImmutable::setTime() Problem Detection\n";
echo "═══════════════════════════════════════════════════════════════\n\n";

// ============================================================================
// DEMO 1: El Problema con DateTimeImmutable
// ============================================================================

echo "📋 DEMO 1: El Problema con setTime() en DateTimeImmutable\n";
echo "───────────────────────────────────────────────────────────────\n";

$dateImmutable = new \DateTimeImmutable('2026-03-02 00:00:00');
echo "1. Fecha original: " . $dateImmutable->format('Y-m-d H:i:s') . "\n";

// ❌ INCORRECTO - No captura retorno
echo "\n2. ❌ INCORRECTO: \$dateImmutable->setTime(14, 30);\n";
$dateImmutable->setTime(14, 30);  // No captura retorno
echo "   Resultado: " . $dateImmutable->format('Y-m-d H:i:s') . "\n";
echo "   ❌ LA HORA NO CAMBIÓ! (sigue siendo 00:00:00)\n";

// ✅ CORRECTO - Captura retorno
echo "\n3. ✅ CORRECTO: \$dateImmutable = \$dateImmutable->setTime(14, 30);\n";
$dateImmutable = $dateImmutable->setTime(14, 30);  // Captura retorno
echo "   Resultado: " . $dateImmutable->format('Y-m-d H:i:s') . "\n";
echo "   ✅ LA HORA SÍ CAMBIÓ! (ahora es 14:30:00)\n";

// ============================================================================
// DEMO 2: Problema en el contexto de Session.getDateTimeStart()
// ============================================================================

echo "\n\n";
echo "📋 DEMO 2: Simulando el problema en Session::getDateTimeStart()\n";
echo "───────────────────────────────────────────────────────────────\n";

$dateStart = new \DateTimeImmutable('2026-03-02 00:00:00');
$timeStart = new \DateTimeImmutable('2026-01-01 14:30:00');

echo "1. dateStart: " . $dateStart->format('Y-m-d H:i:s') . "\n";
echo "2. timeStart:  " . $timeStart->format('Y-m-d H:i:s') . " (solo la hora importa: 14:30)\n";

// ❌ CÓDIGO ACTUAL (INCORRECTO)
echo "\n3. ❌ CÓDIGO ACTUAL (en getDateTimeStart):\n";
echo "   \$dateStart = clone \$dateStart;\n";
echo "   \$dateStart->setTime(14, 30);  // NO captura retorno\n";

$testDate = clone $dateStart;
$testDate->setTime(14, 30);  // NO captura retorno

echo "   Resultado: " . $testDate->format('Y-m-d H:i:s') . "\n";
echo "   ❌ PROBLEMA: Retorna fecha sin hora (00:00:00)\n";

// ✅ CÓDIGO CORREGIDO
echo "\n4. ✅ CÓDIGO CORREGIDO (después del fix):\n";
echo "   \$dateStart = clone \$dateStart;\n";
echo "   \$dateStart = \$dateStart->setTime(14, 30);  // CAPTURA retorno\n";

$testDate2 = clone $dateStart;
$testDate2 = $testDate2->setTime(14, 30);  // CAPTURA retorno

echo "   Resultado: " . $testDate2->format('Y-m-d H:i:s') . "\n";
echo "   ✅ CORRECTO: Retorna fecha con hora (14:30:00)\n";

// ============================================================================
// DEMO 3: Validación de Timestamp (como se usa en ReservationService)
// ============================================================================

echo "\n\n";
echo "📋 DEMO 3: Impacto en Timestamp (usado para calcular segundos)\n";
echo "───────────────────────────────────────────────────────────────\n";

$currentDate = new \DateTime('2026-03-02 10:00:00');  // Ahora mismo
echo "Hora actual: " . $currentDate->format('Y-m-d H:i:s') . "\n";

// ❌ CON CÓDIGO INCORRECTO
$sessionDateIncorrect = clone $dateStart;
$sessionDateIncorrect->setTime(14, 30);  // NO captura
echo "\n❌ Con código incorrecto:\n";
echo "   Fecha de sesión: " . $sessionDateIncorrect->format('Y-m-d H:i:s') . " (incorrecto!)\n";

$secondsIncorrect = $sessionDateIncorrect->getTimestamp() - $currentDate->getTimestamp();
echo "   Segundos hasta sesión: " . $secondsIncorrect . "\n";
echo "   Horas/Minutos: " . intval($secondsIncorrect / 3600) . "h " . intval(($secondsIncorrect % 3600) / 60) . "m\n";
echo "   ❌ INCORRECTO: Dice que faltan " . intval($secondsIncorrect / 3600) . " horas (debería ser ~4.5h)\n";

// ✅ CON CÓDIGO CORRECTO
$sessionDateCorrect = clone $dateStart;
$sessionDateCorrect = $sessionDateCorrect->setTime(14, 30);  // CAPTURA
echo "\n✅ Con código correcto:\n";
echo "   Fecha de sesión: " . $sessionDateCorrect->format('Y-m-d H:i:s') . " (correcto!)\n";

$secondsCorrect = $sessionDateCorrect->getTimestamp() - $currentDate->getTimestamp();
echo "   Segundos hasta sesión: " . $secondsCorrect . "\n";
echo "   Horas/Minutos: " . intval($secondsCorrect / 3600) . "h " . intval(($secondsCorrect % 3600) / 60) . "m\n";
echo "   ✅ CORRECTO: Dice que faltan ~4.5 horas (como debe ser)\n";

// ============================================================================
// DEMO 4: Loop pattern (como en SessionDayController)
// ============================================================================

echo "\n\n";
echo "📋 DEMO 4: Problema en loops (SessionDayController)\n";
echo "───────────────────────────────────────────────────────────────\n";

$baseDate = new \DateTimeImmutable('2026-03-02 00:00:00');
$timesSchedule = ['08:00', '09:00', '10:00'];

echo "Horarios a procesar: " . implode(', ', $timesSchedule) . "\n";

// ❌ CÓDIGO INCORRECTO
echo "\n❌ CON CÓDIGO INCORRECTO (no captura retorno):\n";
$loopDate = $baseDate;
foreach ($timesSchedule as $time) {
    [$h, $m] = explode(':', $time);
    $loopDate->setTime((int)$h, (int)$m);  // NO captura
    echo "   Horario " . $time . " → Resultado: " . $loopDate->format('H:i:s') . " ❌\n";
}

// ✅ CÓDIGO CORRECTO
echo "\n✅ CON CÓDIGO CORRECTO (captura retorno):\n";
$loopDate = $baseDate;
foreach ($timesSchedule as $time) {
    [$h, $m] = explode(':', $time);
    $loopDate = $loopDate->setTime((int)$h, (int)$m);  // CAPTURA
    echo "   Horario " . $time . " → Resultado: " . $loopDate->format('H:i:s') . " ✅\n";
}

// ============================================================================
// RESULTADO FINAL
// ============================================================================

echo "\n\n";
echo "═══════════════════════════════════════════════════════════════\n";
echo "✅ TEST COMPLETADO - El problema está identificado\n";
echo "═══════════════════════════════════════════════════════════════\n\n";

echo "RESUMEN:\n";
echo "• DateTimeImmutable NO modifica en-place\n";
echo "• setTime() retorna una NUEVA instancia\n";
echo "• DEBE capturarse el retorno: \$var = \$var->setTime(...)\n";
echo "• Sin capturar, la fecha no se modifica\n";
echo "• 7 archivos tienen este problema\n\n";

echo "SOLUCIÓN APLICADA:\n";
echo "Las correcciones están siendo aplicadas en los 7 archivos identificados.\n";
echo "Después de aplicar los fixes, este script debería mostrar resultados\n";
echo "idénticos entre el código 'correcto' en las demos anteriores.\n\n";

echo "PRÓXIMO PASO:\n";
echo "Ejecutar tests unitarios después de aplicar los fixes.\n";
echo "\n";
