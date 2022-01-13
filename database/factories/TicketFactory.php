<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'department_id' => Department::pluck('id')[$this->faker->numberBetween(1, Department::count() - 1)],
            'employee_id' => Employee::pluck('id')[$this->faker->numberBetween(1, Employee::count() - 1)],
            'name' => $this->faker->name(),
            'phone' => rand(6782222330, 9898988989),
            'email' => $this->faker->safeEmail(),
            'title' => $this->faker->company(),
            'message' => $this->faker->realText(200, 5),
            'priority' => $this->faker->randomElement(['Critical', 'High', 'Normal', 'Low']),
            'status' => $this->faker->randomElement(['Open', 'Pending', 'Resolved', 'Closed', 'Duplicate']),
        ];
    }
}
