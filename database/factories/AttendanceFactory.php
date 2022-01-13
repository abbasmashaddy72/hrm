<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttendanceFactory extends Factory
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
            'date' => $this->faker->dateTimeBetween('-5 months', '+6 months')->format('Y-m-d'),
            'clock_in' => $this->faker->dateTimeBetween('-8 hours', 'now')->format('H:i:s'),
            'clock_out' => $this->faker->dateTimeBetween('now', '+8 hours')->format('H:i:s'),
            'late' => rand(0, 300),
            'early_leaving' => rand(0, 300),
            'overtime' => rand(0, 300),
            'status' => $this->faker->randomElement(['UnMarked', 'Marked', 'Approved', 'Absent', 'Holiday', 'Present', 'Leave']),
        ];
    }
}
