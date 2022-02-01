<?php

namespace App\Http\Livewire\Form\Ticket;

use Livewire\Component;

class Create extends Component
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

    public function submit()
    {
        return $this->redirectRoute('ticket.index');
    }

    public function render()
    {
        return view('livewire.form.ticket.create');
    }
}
