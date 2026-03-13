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

    public function testBuildSlotToSeatMapFiltersSeatsAboveCapacity(): void
    {
        // Room layout has seats 1-12, but session capacity is 6.
        // Seats 7-12 must be excluded so they cannot be selected in the modal.
        $layout = [
            '1' => 1, '2' => 2, '3' => 3,
            '4' => 7, '5' => 8, '6' => 9,
            '7' => 13, '8' => 14, '9' => 15,
            '10' => 19, '11' => 20, '12' => 21,
        ];

        $mapped = SeatLayoutMapper::buildSlotToSeatMap($layout, 6);

        self::assertCount(6, $mapped);
        self::assertArrayHasKey(1, $mapped);
        self::assertArrayHasKey(9, $mapped);
        self::assertArrayNotHasKey(13, $mapped);
        self::assertArrayNotHasKey(21, $mapped);
        self::assertSame(6, $mapped[9]);
    }

    public function testBuildSlotToSeatMapMaxSeatZeroMeansNoLimit(): void
    {
        $layout = ['5' => 5, '10' => 10, '20' => 20];

        $mapped = SeatLayoutMapper::buildSlotToSeatMap($layout, 0);

        self::assertCount(3, $mapped);
    }
}
