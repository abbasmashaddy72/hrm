<?php

namespace App\Http\Livewire\Form\Ticket;

use App\Models\Ticket;
use Livewire\Component;

class Edit extends Component
{
    public $ticket;

    public $department_id;
    public $employee_id;
    public $name;
    public $phone;
    public $email;
    public $title;
    public $message;
    public $priority;
    public $status;

    public function mount($ticket)
    {
        $data = Ticket::findOrFail($ticket);
        $this->department_id = $data->department_id;
        $this->employee_id = $data->employee_id;
        $this->name = $data->name;
        $this->phone = $data->phone;
        $this->email = $data->email;
        $this->title = $data->title;
        $this->message = $data->message;
        $this->priority = $data->priority;
        $this->status = $data->status;
    }

    public function submit()
    {
        return $this->redirectRoute('ticket.index');
    }

    public function render()
    {
        return view('livewire.form.ticket.edit');
    }
}
