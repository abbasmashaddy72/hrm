<?php

namespace App\Http\Livewire\Form\Attendance;

use App\Models\Attendance;
use Livewire\Component;

class Edit extends Component
{
    public $attendance;

    public $employee_id;
    public $date;
    public $clock_in;
    public $clock_out;
    public $late;
    public $early_leaving;
    public $overtime;
    public $status;

    public function mount($attendance)
    {
        $data = Attendance::findOrFail($attendance);
        $this->employee_id = $data->employee_id;
        $this->date = $data->date;
        $this->clock_in = $data->clock_in;
        $this->clock_out = $data->clock_out;
        $this->late = $data->late;
        $this->early_leaving = $data->early_leaving;
        $this->overtime = $data->overtime;
        $this->status = $data->status;
    }

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

        Attendance::where('id', $this->attendance)->update($validatedData);

        return $this->redirectRoute('attendance.index');
    }

    public function render()
    {
        return view('livewire.form.attendance.edit');
    }
}
