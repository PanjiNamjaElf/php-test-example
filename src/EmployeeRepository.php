<?php
namespace App;

interface EmployeeRepository
{
    public function find($id) : Employee;
}
