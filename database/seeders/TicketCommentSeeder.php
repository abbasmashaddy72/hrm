<?php

namespace Database\Seeders;

use App\Models\TicketComment;
use Illuminate\Database\Seeder;

class TicketCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TicketComment::factory()->count(rand(200, 500))->create();
    }
}
