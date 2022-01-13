<?php

namespace Database\Factories;

use App\Models\Award;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeAwardFactory extends Factory
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
            'award_id' => Award::pluck('id')[$this->faker->numberBetween(1, Award::count() - 1)],
        ];
    }
}
