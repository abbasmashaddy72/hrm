<?php

namespace App\Http\Livewire\Form\Schedule;

use App\Models\Schedule;
use Livewire\Component;

class Create extends Component
{
    public $shift_id;
    public $name;
    public $start;
    public $end;
    public $working_days;
    public $selected_employee;

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

        Schedule::create($validatedData);

        return $this->redirectRoute('schedule.index');
    }

    public function render()
    {
        return view('livewire.form.schedule.create');
    }
}
