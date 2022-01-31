<?php

namespace App\Http\Livewire\Form\EmployeeTraining;

use Livewire\Component;

class Show extends Component
{
    public $training_id;
    public $employee_id;
    public $feedback;
    public $status;

    public function mount()
    {
        //
    }

    public function render()
    {
        return view('livewire.form.employee-training.show');
    }
}
