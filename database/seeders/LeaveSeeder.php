<?php

namespace Database\Seeders;

use App\Models\Leave;
use Illuminate\Database\Seeder;

class LeaveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $leaves = ['Casual', 'Sick', 'Maternity', 'Marriage'];

        foreach ($leaves as $leave) {
            Leave::create([
                'type' => $leave,
                'number' => rand(0, 10)
            ]);
        }
    }
}
