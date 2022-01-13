<?php

namespace Database\Factories;

use App\Models\Designation;
use App\Models\RolePermissions;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker->addProvider(new \Faker\Provider\Payment($this->faker));
        $payment_type = $this->faker->randomElement(['Monthly', 'Hourly', 'Project']);
        $salary = 0;
        if ($payment_type == 'Monthly') {
            $salary = rand(12000, 60000);
        } elseif ($payment_type == 'Hourly') {
            $salary = rand(100, 600);
        } else {
            $salary = rand(10000, 150000);
        }
        $alpha = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numbers = '0123456789';
        $pan_number = substr(str_shuffle($alpha), 0, 5) . substr(str_shuffle($numbers), 0, 4) . substr(str_shuffle($alpha), 0, 1);

        return [
            'designation_id' => Designation::pluck('id')[$this->faker->numberBetween(1, Designation::count() - 1)],
            'role_permission_id' => RolePermissions::pluck('id')[$this->faker->numberBetween(1, RolePermissions::count() - 1)],
            'gender' => $this->faker->randomElement(['Male', 'FeMale']),
            'phone' => rand(6750000000, 9999999999),
            'father_name' => $this->faker->name('male'),
            'mother_name' => $this->faker->name('female'),
            'date_of_birth' => $this->faker->date('Y-m-d', '-30 years'),
            'present_address' => $this->faker->address(),
            'permanent_address' => $this->faker->address(),
            'date_of_joining' => $this->faker->dateTimeBetween('-2 years', 'now')->format('Y-m-d'),
            'date_of_reliving' => $this->faker->dateTimeBetween('now', '+2 years')->format('Y-m-d'),
            'payment_type' => $payment_type,
            'salary' => $salary,
            'bank_name' => $this->faker->creditCardType(),
            'branch_name' => $this->faker->streetName(),
            'account_number' => $this->faker->iban(),
            'ifsc_code' => $this->faker->swiftBicNumber(),
            'pan_number' => $pan_number,
            'aadhaar_number' => rand(123467457809, 986745563467),
        ];
    }
}
