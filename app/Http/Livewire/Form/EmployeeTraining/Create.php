<?php

namespace App\Http\Livewire\Form\EmployeeTraining;

use Livewire\Component;

class Create extends Component
{
    public $training_id;
    public $employee_id;
    public $feedback;
    public $status;

    public function submit()
    {
        return $this->redirectRoute('');
    }

    public function render()
    {
        return view('livewire.form.employee-training.create');
    }
}
