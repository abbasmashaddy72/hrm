<?php

namespace App\Http\Livewire\Form\EmployeeAward;

use Livewire\Component;

class Edit extends Component
{
    public $employee_id;
    public $award_id;

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
        return view('livewire.form.employee-award.edit');
    }
}
