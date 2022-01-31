<?php

namespace App\Http\Livewire\Form\Ticket;

use Livewire\Component;

class Show extends Component
{
    public $department_id;
    public $employee_id;
    public $name;
    public $phone;
    public $email;
    public $title;
    public $message;
    public $priority;
    public $status;

    public function mount()
    {
        //
    }

    public function render()
    {
        return view('livewire.form.ticket.show');
    }
}
