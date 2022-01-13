<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $deps = ['Accounts and Finance', 'HR', 'Sales', 'Marketing', 'Infrastructures', 'Research & Development', 'Learning & Development', 'IT Services', 'Product Development', 'Admin', 'Security & Transport'];
        $min_level = rand(0, 3);
        $max_level = rand(4, 7);

        foreach ($deps as $dep) {
            Department::create([
                'name' => $dep,
                'level' => $min_level . "-" . $max_level
            ]);
        }
    }
}
