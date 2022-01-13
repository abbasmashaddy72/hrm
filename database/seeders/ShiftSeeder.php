<?php

namespace Database\Seeders;

use App\Models\Shift;
use Illuminate\Database\Seeder;

class ShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['Day', 'Evening', 'Night'];
        $minimum_time = strtotime("00:00:00");
        $maximum_time = strtotime("00:10:15");
        $rand = rand($minimum_time, $maximum_time);
        $str = date("H:i:s", $rand);

        foreach ($names as $name) {
            Shift::create([
                'name' => $name,
                'start' => $str,
                'end' => $str
            ]);
        }
    }
}
