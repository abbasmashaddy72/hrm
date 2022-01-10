<?php

namespace Database\Seeders;

use App\Models\NoticeBoard;
use Illuminate\Database\Seeder;

class NoticeBoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NoticeBoard::factory()->count(rand(200, 500))->create();
    }
}
