<?php

namespace App\Http\Livewire\Form\Attendance;

use Livewire\Component;

class Edit extends Component
{
    public $employee_id;
    public $date;
    public $clock_in;
    public $clock_out;
    public $late;
    public $early_leaving;
    public $overtime;
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
        return view('livewire.form.attendance.edit');
    }
}
