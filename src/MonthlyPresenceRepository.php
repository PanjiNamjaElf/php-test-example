<?php
namespace App;

interface MonthlyPresenceRepository
{
    public function query($employeeId, $fromDate, $toDate) : MonthlyPresence;
}
