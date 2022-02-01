<?php

namespace App\Http\Livewire\Form\EmployeeTraining;

use App\Models\EmployeeTraining;
use Livewire\Component;

class Edit extends Component
{
    public $employeeTraining;

    public $training_id;
    public $employee_id;
    public $feedback;
    public $status;

    public function mount($employeeTraining)
    {
        $data = EmployeeTraining::findOrFail($employeeTraining);
        $this->training_id = $data->training_id;
        $this->employee_id = $data->employee_id;
        $this->feedback = $data->feedback;
        $this->status = $data->status;
    }

    public function submit()
    {
        return $this->redirectRoute('employee_training.index');
    }

    public function render()
    {
        return view('livewire.form.employee-training.edit');
    }
}
