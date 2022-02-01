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

    protected $rules = [
        'shift_id' => '',
        'name' => '',
        'start' => '',
        'end' => '',
        'working_days' => '',
        'selected_employee' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        Schedule::where('id', $this->schedule)->update($validatedData);

        return $this->redirectRoute('schedule.index');
    }

    public function render()
    {
        return view('livewire.form.schedule.edit');
    }
}
