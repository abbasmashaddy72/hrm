<?php

namespace App\Http\Livewire\Form\Schedule;

use App\Models\Schedule;
use Livewire\Component;

class Edit extends Component
{
    public $schedule;

    public $shift_id;
    public $name;
    public $start;
    public $end;
    public $working_days;
    public $selected_employee;

    public function mount($schedule)
    {
        $data = Schedule::findOrFail($schedule);
        $this->shift_id = $data->shift_id;
        $this->name = $data->name;
        $this->start = $data->start;
        $this->end = $data->end;
        $this->working_days = $data->working_days;
        $this->selected_employee = $data->selected_employee;
    }

    public function submit()
    {
        return $this->redirectRoute('schedule.index');
    }

    public function render()
    {
        return view('livewire.form.schedule.edit');
    }
}
