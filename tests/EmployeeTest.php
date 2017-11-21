<?php

use App\Employee;
use Faker\Factory as Faker;

class EmployeeTest extends PHPUnit\Framework\TestCase
{
    private $faker;

    protected function setup()
    {
        $this->faker = Faker::create();
    }

    /** @test */
    public function shouldCreateObject()
    {
        $obj = new Employee(
            $id = $this->faker->numberBetween(1, 1000),
            $name = $this->faker->name,
            $basicSalary = $this->faker->randomFloat
        );

        $this->assertEquals($id, $obj->getId());
        $this->assertEquals($name, $obj->getName());
        $this->assertEquals($basicSalary, $obj->getBasicSalary());
    }

}
