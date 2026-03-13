<?php

declare(strict_types=1);

namespace App\Util;

final class SeatLayoutMapper
{
    private const MAX_SLOTS = 36;

    /**
     * Build reverse map: slot number => seat number.
     *
     * @param array<int|string, int|string>|null $seatLayout
     * @return array<int, int>
     */
    public static function buildSlotToSeatMap(?array $seatLayout): array
    {
        $slotToSeat = [];

        foreach ($seatLayout ?? [] as $seatNum => $slotNum) {
            $seat = (int) $seatNum;
            $slot = (int) $slotNum;

            if ($seat < 1 || $slot < 1 || $slot > self::MAX_SLOTS) {
                continue;
            }

            $slotToSeat[$slot] = $seat;
        }

        ksort($slotToSeat);

        return $slotToSeat;
    }
}
