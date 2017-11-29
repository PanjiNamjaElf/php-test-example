<?php
namespace App\SalaryV2;

use App\EmployeeRepository;
use App\MonthlyPresenceRepository;

class SalaryCalculator
{
    private $employeeRepo;
    private $presenceRepo;

    public function __construct(
        EmployeeRepository $employeeRepo,
        MonthlyPresenceRepository $presenceRepo
    ){
        $this->employeeRepo = $employeeRepo;
        $this->presenceRepo = $presenceRepo;
    }

    public function calculate($employeeId, $fromDate, $toDate)
    {
        $employee = $this->employeeRepo->find($employeeId);
        $presence = $this->presenceRepo->query($employeeId, $fromDate, $toDate);

        $totalWorkingDay = floatval($presence->getTotalWorkingDay());
        $presenceDay = floatval($presence->getPresenceDay());
        $basicSalary = floatval($employee->getBasicSalary());

        $ratio = $presenceDay / $totalWorkingDay;

        $proRateSalary = $ratio * $basicSalary;

        return intval(ceil($proRateSalary));
    }
}

