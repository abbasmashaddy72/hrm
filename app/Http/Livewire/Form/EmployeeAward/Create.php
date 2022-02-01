<?php

namespace App\Http\Livewire\Form\EmployeeAward;

use Livewire\Component;

class Create extends Component
{
    public $employee_id;
    public $award_id;

    public function submit()
    {
        return $this->redirectRoute('employee_award.index');
    }

    public function render()
    {
        return view('livewire.form.employee-award.create');
    }
}
