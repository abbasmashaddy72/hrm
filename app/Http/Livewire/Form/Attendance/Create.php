<?php

namespace App\Http\Livewire\Form\Attendance;

use Livewire\Component;

class Create extends Component
{
    public $employee_id;
    public $date;
    public $clock_in;
    public $clock_out;
    public $late;
    public $early_leaving;
    public $overtime;
    public $status;

    public function submit()
    {
        return $this->redirectRoute('attendance.index');
    }

    public function render()
    {
        return view('livewire.form.attendance.create');
    }
}
