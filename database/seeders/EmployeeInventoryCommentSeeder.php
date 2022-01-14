<?php

namespace Database\Seeders;

use App\Models\EmployeeInventoryComment;
use Illuminate\Database\Seeder;

class EmployeeInventoryCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmployeeInventoryComment::factory()->count(rand(200, 500))->create();
    }
}
