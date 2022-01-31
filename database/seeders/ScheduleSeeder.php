<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Schedule;
use App\Models\Shift;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shifts = ['Evening Shift', 'Night Shift', 'Flexible Shift'];
        $days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
        $minimum_date = strtotime("2018-12-10");
        $maximum_date = strtotime("2022-10-12");
        $rand = rand($minimum_date, $maximum_date);
        $str = date("Y-m-d", $rand);

        foreach ($shifts as $shift) {
            Schedule::create([
                'name' => $shift,
                'shift_id' => Shift::pluck('id')[rand(1, Shift::count() - 1)],
                'working_days' => Arr::random($days, 5, false),
                'start' => $str,
                'end' => $str,
            ]);
        }
    }
}
