<?php

namespace Database\Seeders;

use App\Models\EmployeeNoticeBoard;
use Illuminate\Database\Seeder;

class EmployeeNoticeBoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmployeeNoticeBoard::factory()->count(rand(200, 500))->create();
    }
}
