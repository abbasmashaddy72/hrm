<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JobsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle(),
            'position' => $this->faker->randomElement(['Web developers', 'Backend developers', 'Frontend developers', 'Data Scientist']),
            'type' => $this->faker->randomElement(['Contractual', 'Part Time', 'Full Time']),
            'experience' => rand(1, 5),
            'location' => $this->faker->city(),
            'salary_range' => rand(10000, 80000),
            'short_description' => $this->faker->realText(150, 2),
            'description' => $this->faker->realText(500, 2),
            'apply_date' => $this->faker->dateTimeBetween('-2 years', '+2 years')->format('Y-m-d'),
            'close_date' => $this->faker->dateTimeBetween('-1 years', '+2 years')->format('Y-m-d'),
            'status' => $this->faker->randomElement(['Opening', 'Closed', 'Drafted']),
        ];
    }
}
