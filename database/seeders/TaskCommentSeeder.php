<?php

namespace Database\Seeders;

use App\Models\TaskComment;
use Illuminate\Database\Seeder;

class TaskCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TaskComment::factory()->count(rand(200, 500))->create();
    }
}
