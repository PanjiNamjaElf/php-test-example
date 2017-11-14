<?php
namespace App;

class MonthlyPresence
{
    private $totalWorkingDay;
    private $presenceDay;

    public function __construct($totalWorkingDay, $presenceDay)
    {
        $this->totalWorkingDay = $totalWorkingDay;
        $this->presenceDay = $presenceDay;
    }

    public function getTotalWorkingDay()
    {
        return $this->totalWorkingDay;
    }

    public function getPresenceDay()
    {
        return $this->presenceDay;
    }
}
