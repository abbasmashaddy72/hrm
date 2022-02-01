<?php

namespace App\Http\Livewire\Form\EmployeeAward;

use App\Models\EmployeeAward;
use Livewire\Component;

class Create extends Component
{
    public $employee_id;
    public $award_id;

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

        EmployeeAward::create($validatedData);

        return $this->redirectRoute('employee_award.index');
    }

    public function render()
    {
        return view('livewire.form.employee-award.create');
    }
}
