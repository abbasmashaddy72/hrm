<?php

namespace Database\Seeders;

use App\Models\Training;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $trainings = ['Orientation', 'Onboarding', 'Technical Skills', 'Soft Skills', 'Product or Service', 'Compliance'];

        foreach ($trainings as $training) {
            Training::create([
                'title' => $training,
                'type' => $faker->randomElement(['Online Training', 'Seminar', 'Lecture', 'Workshop', 'Hands On Training', 'Webinar']),
                'subject' => $faker->realText(50),
                'nature' => $faker->randomElement(['Internal', 'External']),
                'location' => $faker->city(),
                'sponsored_by' => $faker->company(),
                'organized_by' => $faker->company(),
                'from' => $faker->dateTimeBetween('-2 years', '+2 years')->format('Y-m-d'),
                'to' => $faker->dateTimeBetween('-1 years', '+2 years')->format('Y-m-d'),
                'description'  => $faker->realText(500, 2),
            ]);
        }
    }
}
