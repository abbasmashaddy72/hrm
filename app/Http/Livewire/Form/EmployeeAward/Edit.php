<?php

namespace App\Http\Livewire\Form\EmployeeAward;

use App\Models\EmployeeAward;
use Livewire\Component;

class Edit extends Component
{
    public $employeeAward;

    public $employee_id;
    public $award_id;

    public function mount($employeeAward)
    {
        $data = EmployeeAward::findOrFail($employeeAward);
        $this->employee_id = $data->employee_id;
        $this->award_id = $data->award_id;
    }

    protected $rules = [
        'employee_id' => '',
        'award_id' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        EmployeeAward::where('id', $this->employeeAward)->update($validatedData);

        return $this->redirectRoute('employee_award.index');
    }

    public function render()
    {
        return view('livewire.form.employee-award.edit');
    }
}
