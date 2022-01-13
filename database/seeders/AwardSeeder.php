<?php

namespace Database\Seeders;

use App\Models\Award;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class AwardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $awards = ['Employee of the Month', 'Work Anniversary', 'Department MVP', 'Teamwork', 'Sales', 'Most Creative'];

        foreach ($awards as $award) {
            Award::create([
                'name' => $award,
                'description' => $faker->realText(120, 2)
            ]);
        }
    }
}
