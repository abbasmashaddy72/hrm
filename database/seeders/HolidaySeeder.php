<?php

namespace Database\Seeders;

use App\Models\Holiday;
use Illuminate\Database\Seeder;

class HolidaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inputs = [
            [
                'name' => 'New Year Day',
                'date' => '2022-01-01',
            ],
            [
                'name' => 'Bhogi',
                'date' => '2022-01-13',
            ],
            [
                'name' => 'Sankranti Pongal',
                'date' => '2022-01-14',
            ],
            [
                'name' => 'Republic Day',
                'date' => '2022-01-26',
            ],
            [
                'name' => 'Maha Shivaratri',
                'date' => '2022-03-11',
            ],
            [
                'name' => 'Holi',
                'date' => '2022-03-29',
            ],
            [
                'name' => 'Good Friday',
                'date' => '2022-04-2',
            ],
            [
                'name' => 'Ugadi',
                'date' => '2022-04-13',
            ],
            [
                'name' => 'Eid Ul Fitr (Ramzan)',
                'date' => '2022-06-14',
            ],
            [
                'name' => 'Eidul Azah (Bakrid)',
                'date' => '2022-07-21',
            ],
            [
                'name' => 'Bonalu',
                'date' => '2022-08-2',
            ],
            [
                'name' => 'Independence Day',
                'date' => '2022-08-15',
            ],
            [
                'name' => '10th Moharam',
                'date' => '2022-08-19',
            ],
            [
                'name' => 'Deepavali',
                'date' => '2022-11-04',
            ],
            [
                'name' => 'Christmas',
                'date' => '2022-12-25',
            ]
        ];

        foreach ($inputs as $data) {
            Holiday::create($data);
        }
    }
}
