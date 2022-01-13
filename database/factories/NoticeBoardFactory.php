<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoticeBoardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'description' => $this->faker->realText(500, 2),
            'start_date' => $this->faker->dateTimeBetween('-2 years', '+2 years')->format('Y-m-d'),
            'end_date' => $this->faker->dateTimeBetween('-1 years', '+2 years')->format('Y-m-d'),
            'assigned_to' => array_rand([$this->faker->numberBetween(1, Employee::count() - 1)]),
            'assigned_by' => Employee::pluck('id')[$this->faker->numberBetween(1, Employee::count() - 1)],
        ];
    }
}
