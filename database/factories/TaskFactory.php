<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'employee_id' => Employee::pluck('id')[$this->faker->numberBetween(1, Employee::count() - 1)],
            'task' => $this->faker->title(),
            'start_date' => $this->faker->dateTimeBetween('-2 years', '+2 years')->format('Y-m-d'),
            'due_date' => $this->faker->dateTimeBetween('-1 years', '+2 years')->format('Y-m-d'),
            'estimated_hour' => rand(30, 120),
            'description' => $this->faker->realText(300, 5),
            'progress' => rand(0, 100),
            'status' => $this->faker->randomElement(['Pending', 'Started', 'Completed']),
        ];
    }
}
