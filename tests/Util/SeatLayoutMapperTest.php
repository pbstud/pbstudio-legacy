<?php

declare(strict_types=1);

namespace App\Tests\Util;

use App\Util\SeatLayoutMapper;
use PHPUnit\Framework\TestCase;

class SeatLayoutMapperTest extends TestCase
{
    public function testBuildSlotToSeatMapReturnsEmptyWhenLayoutIsNull(): void
    {
        self::assertSame([], SeatLayoutMapper::buildSlotToSeatMap(null));
    }

    public function testBuildSlotToSeatMapKeepsExactSlotPositions(): void
    {
        $layout = [
            '1' => 1,
            '2' => 5,
            '3' => 12,
            '4' => 30,
        ];

        $mapped = SeatLayoutMapper::buildSlotToSeatMap($layout);

        self::assertSame(1, $mapped[1]);
        self::assertSame(2, $mapped[5]);
        self::assertSame(3, $mapped[12]);
        self::assertSame(4, $mapped[30]);
        self::assertArrayNotHasKey(2, $mapped);
    }

    public function testBuildSlotToSeatMapIgnoresInvalidSeatAndSlotValues(): void
    {
        $layout = [
            '0' => 1,
            '-1' => 2,
            '2' => 0,
            '3' => 37,
            '4' => 18,
        ];

        self::assertSame([18 => 4], SeatLayoutMapper::buildSlotToSeatMap($layout));
    }

    public function testBuildSlotToSeatMapUsesLastSeatForCollidingSlot(): void
    {
        $layout = [
            '1' => 10,
            '2' => 10,
        ];

        self::assertSame([10 => 2], SeatLayoutMapper::buildSlotToSeatMap($layout));
    }
}
