<?php

namespace Database\Seeders;

use App\Models\EmployeeSchedule;
use App\Models\Schedule;
use Illuminate\Database\Seeder;

class EmployeeScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmployeeSchedule::factory()->count(rand(50, Schedule::count()))->create();
    }
}
