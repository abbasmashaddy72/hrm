<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InventoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->title(),
            'vendor_name' => $this->faker->userAgent(),
            'invoice_number' => $this->faker->uuid(),
            'price' => rand(10000, 100000),
            'payment_mode' => $this->faker->randomElement(['Cash', 'Cheque', 'Bank Transfer', 'UPI']),
            'stock' => rand(10, 50),
            'defective' => rand(2, 10),
            'trashed' => rand(2, 10),
            'description' => $this->faker->realText(300, 2),
        ];
    }
}
