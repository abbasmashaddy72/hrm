<?php

namespace App\Http\Livewire\Form\Attendance;

use App\Models\Attendance;
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

    protected $rules = [
        'employee_id' => '',
        'date' => '',
        'clock_in' => '',
        'clock_out' => '',
        'late' => '',
        'early_leaving' => '',
        'overtime' => '',
        'status' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        Attendance::create($validatedData);

        return $this->redirectRoute('attendance.index');
    }

    public function render()
    {
        return view('livewire.form.attendance.create');
    }
}
