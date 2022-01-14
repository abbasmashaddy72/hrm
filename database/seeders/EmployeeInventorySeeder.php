<?php

namespace Database\Seeders;

use App\Models\EmployeeInventory;
use Illuminate\Database\Seeder;

class EmployeeInventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmployeeInventory::factory()->count(rand(200, 500))->create();
    }
}
