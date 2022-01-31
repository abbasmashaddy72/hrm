<?php

namespace App\Http\Livewire\Form\Schedule;

use Livewire\Component;

class Edit extends Component
{
    public $shift_id;
    public $name;
    public $start;
    public $end;
    public $working_days;
    public $selected_employee;

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
        return view('livewire.form.schedule.edit');
    }
}
