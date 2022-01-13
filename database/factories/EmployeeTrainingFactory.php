<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Training;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeTrainingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'training_id' => Training::pluck('id')[$this->faker->numberBetween(1, Training::count() - 1)],
            'employee_id' => Employee::pluck('id')[$this->faker->numberBetween(1, Employee::count() - 1)],
            'feedback' => $this->faker->realText(300, 2),
            'status' => $this->faker->randomElement(['Attended', 'UnAttended'])
        ];
    }
}
