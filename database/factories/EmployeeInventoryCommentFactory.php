<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\EmployeeInventory;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeInventoryCommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'employee_inventory_id' => EmployeeInventory::pluck('id')[$this->faker->numberBetween(1, EmployeeInventory::count() - 1)],
            'employee_id' => Employee::pluck('id')[$this->faker->numberBetween(1, Employee::count() - 1)],
            'comment' => $this->faker->realText(200, 2),
        ];
    }
}
