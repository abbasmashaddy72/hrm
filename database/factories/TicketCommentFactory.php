<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketCommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ticket_id' => Ticket::pluck('id')[$this->faker->numberBetween(1, Ticket::count() - 1)],
            'employee_id' => Employee::pluck('id')[$this->faker->numberBetween(1, Employee::count() - 1)],
            'comment' => $this->faker->realText(200, 2),
        ];
    }
}
