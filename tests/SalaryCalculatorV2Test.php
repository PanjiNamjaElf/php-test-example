<?php

use App\EmployeeRepository;
use App\MonthlyPresenceRepository;
use App\Employee;
use App\MonthlyPresence;
use App\SalaryV2\SalaryCalculator;

class SalaryCalculatorV2Test extends PHPUnit\Framework\TestCase
{
    /** @test */
    public function shouldCalculateSalary()
    {
        $employeeRepo = $this->getMockBuilder(EmployeeRepository::class)
            ->getMock();

        $presenceRepo = $this->getMockBuilder(MonthlyPresenceRepository::class)
            ->getMock();

        $employeeRepo->expects($this->once())
            ->method('find')
            ->willReturn(new Employee(1, 'John Smith', 22000000));

        $presenceRepo->expects($this->once())
            ->method('query')
            ->willReturn(new MonthlyPresence(22, 20));

        $calculator = new SalaryCalculator($employeeRepo, $presenceRepo);
        $this->assertEquals(20000000, $calculator->calculate(1, date('Y-m-d'), date('Y-m-d')));
    }
}

