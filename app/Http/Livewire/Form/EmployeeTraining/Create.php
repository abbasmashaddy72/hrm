<?php

namespace App\Http\Livewire\Form\EmployeeTraining;

use App\Models\EmployeeTraining;
use Livewire\Component;

class Create extends Component
{
    public $training_id;
    public $employee_id;
    public $feedback;
    public $status;

    protected $rules = [
        'training_id' => '',
        'employee_id' => '',
        'feedback' => '',
        'status' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        EmployeeTraining::create($validatedData);

        return $this->redirectRoute('employee_training.index');
    }

    public function render()
    {
        return view('livewire.form.employee-training.create');
    }
}
