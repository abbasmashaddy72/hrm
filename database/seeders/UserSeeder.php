<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::factory()->count(340)->create();

        foreach ($users as $user) {
            $data = Employee::factory()->create([
                'name' => $user->name,
                'email' => $user->email
            ]);
            User::where('id', $user->id)->update([
                'employee_id' => $data->id,
            ]);
        }
    }
}
