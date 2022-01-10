<?php

namespace Database\Seeders;

use App\Models\EmployeeTraining;
use Illuminate\Database\Seeder;

class EmployeeTrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmployeeTraining::factory()->count(rand(200, 500))->create();
    }
}
