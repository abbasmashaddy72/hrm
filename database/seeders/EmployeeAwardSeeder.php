<?php

namespace Database\Seeders;

use App\Models\EmployeeAward;
use Illuminate\Database\Seeder;

class EmployeeAwardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmployeeAward::factory()->count(rand(200, 500))->create();
    }
}
