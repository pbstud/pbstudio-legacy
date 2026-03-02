<?php

declare(strict_types=1);

namespace App\Util;

/**
 * Schedule.
 */
class Schedule
{
    private string $firstHour;

    private string $lastHour;

    private \ArrayObject $schedules;

    /**
     * Schedule constructor.
     */
    public function __construct()
    {
        $this->firstHour = '07:00';
        $this->lastHour = '22:00';

        $this->calculateSchedules();
    }

    /**
     * @return string
     */
    public function getFirstHour(): string
    {
        return $this->firstHour;
    }

    /**
     * @return string
     */
    public function getLastHour(): string
    {
        return $this->lastHour;
    }

    /**
     * @return \ArrayObject
     */
    public function getSchedules(): \ArrayObject
    {
        return $this->schedules;
    }

    /**
     * Calculate schedules.
     */
    private function calculateSchedules(): void
    {
        $timeStart = strtotime('07:00');
        $timeEnd = strtotime('22:00');

        $schedules = [];

        while ($timeStart <= $timeEnd) {
            $time = date('H:i', $timeStart);
            $schedules[$time] = $time;

            $timeStart = strtotime('+15 minutes', $timeStart);
        }

        $this->schedules = new \ArrayObject($schedules);
    }
}
