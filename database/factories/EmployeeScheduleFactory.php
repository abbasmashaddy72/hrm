<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Schedule;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'schedule_id' => Schedule::pluck('id')[$this->faker->numberBetween(1, Schedule::count() - 1)],
            'employee_id' => Employee::pluck('id')[$this->faker->unique(true)->numberBetween(1, Employee::count() - 1)],
        ];
    }
}
