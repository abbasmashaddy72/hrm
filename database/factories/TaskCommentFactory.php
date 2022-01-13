<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskCommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'task_id' => Task::pluck('id')[$this->faker->numberBetween(1, Task::count() - 1)],
            'employee_id' => Employee::pluck('id')[$this->faker->numberBetween(1, Employee::count() - 1)],
            'comment' => $this->faker->realText(500, 2),
        ];
    }
}
