<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Designation;
use App\Models\RolePermissions;
use Illuminate\Database\Seeder;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $designs = ['H.R. manager', 'PHP developer', 'Android developer', 'Project Manager', 'General Manager', 'Business Development Manager', 'Internet Marketing Head', 'Content Writer', 'System Administrator', 'CEO/MD'];

        foreach ($designs as $des) {
            Designation::create([
                'name' => $des,
                'department_id' => Department::pluck('id')[rand(1, Department::count() - 1)],
                'role_permission_id' => RolePermissions::pluck('id')[rand(1, RolePermissions::count() - 1)]
            ]);
        }
    }
}
