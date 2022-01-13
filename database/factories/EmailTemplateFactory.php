<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmailTemplateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'subject' => $this->faker->title(),
            'message' => $this->faker->randomHtml(4, 8),
            'status' => $this->faker->randomElement(['Active', 'InActive']),
        ];
    }
}
