<?php

namespace App\Http\Livewire\Form\EmployeeTraining;

use Livewire\Component;

class Edit extends Component
{
    public $training_id;
    public $employee_id;
    public $feedback;
    public $status;

    public function mount()
    {
        //
    }

    public function submit()
    {
        return $this->redirectRoute('');
    }

    public function render()
    {
        return view('livewire.form.employee-training.edit');
    }
}
