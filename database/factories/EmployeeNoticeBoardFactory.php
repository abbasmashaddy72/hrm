<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\NoticeBoard;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeNoticeBoardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'notice_board_id' => NoticeBoard::pluck('id')[$this->faker->numberBetween(1, NoticeBoard::count() - 1)],
            'employee_id' => Employee::pluck('id')[$this->faker->numberBetween(1, Employee::count() - 1)],
        ];
    }
}
