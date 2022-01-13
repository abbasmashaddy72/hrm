<?php

namespace Database\Factories;

use App\Models\Jobs;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobApplicantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'job_id' => Jobs::pluck('id')[$this->faker->numberBetween(1, Jobs::count() - 1)],
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => rand(6750000000, 9999999999),
            'about' => $this->faker->realText(300, 2),
            'status' => $this->faker->randomElement(['Unread', 'Rejected', 'Primary Selected', 'Call For Interview', 'Confirm']),
        ];
    }
}
