<?php

declare(strict_types=1);

namespace App\Util;

final class SeatLayoutMapper
{
    private const MAX_SLOTS = 36;

    /**
     * Build reverse map: slot number => seat number.
     *
     * Only seats in range [1..$maxSeat] are included. Use this to prevent
     * seats from an inherited room layout (higher capacity) from appearing
     * as reservable in a class with a lower capacity.
     *
     * @param array<int|string, int|string>|null $seatLayout
     * @param int $maxSeat  Session capacity (0 = no upper limit)
     * @return array<int, int>
     */
    public static function buildSlotToSeatMap(?array $seatLayout, int $maxSeat = 0): array
    {
        $slotToSeat = [];

        foreach ($seatLayout ?? [] as $seatNum => $slotNum) {
            $seat = (int) $seatNum;
            $slot = (int) $slotNum;

            if ($seat < 1 || $slot < 1 || $slot > self::MAX_SLOTS) {
                continue;
            }

            if ($maxSeat > 0 && $seat > $maxSeat) {
                continue;
            }

            $slotToSeat[$slot] = $seat;
        }

        ksort($slotToSeat);

        return $slotToSeat;
    }
}
