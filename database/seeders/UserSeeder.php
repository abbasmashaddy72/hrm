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
            Employee::factory()->create([
                'user_id' => $user->id,
                'name' => $user->name,
                'email' => $user->email
            ]);
        }
    }
}
