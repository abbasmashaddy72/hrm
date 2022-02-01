<?php

namespace App\Http\Livewire\Form\Ticket;

use App\Models\Ticket;
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

    protected $rules = [
        'department_id' => '',
        'employee_id' => '',
        'name' => '',
        'phone' => '',
        'email' => '',
        'title' => '',
        'message' => '',
        'priority' => '',
        'status' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        Ticket::create($validatedData);

        return $this->redirectRoute('ticket.index');
    }

    public function render()
    {
        return view('livewire.form.ticket.create');
    }
}
