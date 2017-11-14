<?php
namespace App\Salary;

use App\Employee;
use App\MonthlyPresence;

class SalaryCalculator
{
    public function calculate(Employee $employee, MonthlyPresence $presence)
    {
        $totalWorkingDay = floatval($presence->getTotalWorkingDay());
        $presenceDay = floatval($presence->getPresenceDay());
        $basicSalary = floatval($employee->getBasicSalary());

        $ratio = $presenceDay / $totalWorkingDay;

        $proRateSalary = $ratio * $basicSalary;

        return intval(ceil($proRateSalary));
    }
}
