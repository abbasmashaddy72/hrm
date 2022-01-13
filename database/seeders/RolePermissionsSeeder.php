<?php

namespace Database\Seeders;

use App\Models\RolePermissions;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class RolePermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = ["dashboard", "policy.list", "policy_near_expiry.list", "policy_expired.list", "policy_reminders.list", "policy.add", "policy.edit", "agent.list", "agent.transaction", "agent.add", "agent.edit", "agent_commission.edit", "agent.profile", "agent_payment.list", "agent_payment.add", "agent_payment.edit", "reg_vehicle.list", "reg_vehicle.add", "reg_vehicle.edit", "sales.list", "sms.list", "sms.send", "employee.list", "employee.add", "employee.edit", "employee.role_permissions", "edit.all.employee", "auditing"];
        $roles = ['Super Admin', 'Admin', 'Employee'];

        foreach ($roles as $role) {
            RolePermissions::create([
                'name' => $role,
                'permissions' => Arr::random($permissions, 8, false)
            ]);
        }
    }
}
