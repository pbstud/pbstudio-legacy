<?php

declare(strict_types=1);

namespace App\Tests\Controller\Backend;

use App\Controller\Backend\ConfigurationController;
use PHPUnit\Framework\TestCase;

class ConfigurationControllerTest extends TestCase
{
    public function testCastValuesConvertsValidDate(): void
    {
        $result = $this->invokeCastValues('10/03/2026');

        self::assertSame('2026-03-10', $result['start_date']);
    }

    /**
     * @dataProvider invalidDateProvider
     */
    public function testCastValuesRejectsInvalidDate(string $input): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $this->invokeCastValues($input);
    }

    public static function invalidDateProvider(): array
    {
        return [
            ['99/99/2026'],
            ['31-12-2026'],
            ['foo'],
        ];
    }

    private function invokeCastValues(string $input): array
    {
        $reflection = new \ReflectionClass(ConfigurationController::class);
        $controller = $reflection->newInstanceWithoutConstructor();
        $method = $reflection->getMethod('castValues');
        $method->setAccessible(true);

        /** @var array $result */
        $result = $method->invoke($controller, 'stats', ['start_date' => $input]);

        return $result;
    }
}
