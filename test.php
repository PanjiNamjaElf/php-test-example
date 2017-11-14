<?php

require_once('./src/Employee.php');
require_once('./src/MonthlyPresence.php');
require_once('./src/Salary/SalaryCalculator.php');

use App\Employee;
use App\MonthlyPresence;
use App\Salary\SalaryCalculator;

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

if ($actual != $expected) {
    echo 'not pass';
}

echo 'pass';
