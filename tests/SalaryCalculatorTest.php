<?php

use App\Employee;
use App\MonthlyPresence;
use App\Salary\SalaryCalculator;

class SalaryCalculatorTest extends PHPUnit\Framework\TestCase
{
    /** @test */
    public function shouldCalculateSalary()
    {
        $employee = new Employee(
            1,
            'John Smith',
            22000000
        );

        $presence = new MonthlyPresence(
            22,
            20
        );

        $expected = 20000000;

        $calculator = new SalaryCalculator();
        $actual = $calculator->calculate($employee, $presence);

        $this->assertEquals($expected, $actual);
    }
}
