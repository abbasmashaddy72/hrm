<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Inventory;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeInventoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'inventory_id' => Inventory::pluck('id')[$this->faker->numberBetween(1, Inventory::count() - 1)],
            'employee_id' => Employee::pluck('id')[$this->faker->numberBetween(1, Employee::count() - 1)],
            'description' => $this->faker->realText(300, 2),
            'status' => $this->faker->randomElement(['Available', 'Damaged', 'Work From Home', 'Returned']),
        ];
    }
}
