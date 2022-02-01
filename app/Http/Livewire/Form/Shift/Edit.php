<?php

namespace App\Http\Livewire\Form\Shift;

use App\Models\Shift;
use Livewire\Component;

class Edit extends Component
{
    public $shift;

    public $name;
    public $start;
    public $end;

    public function mount($shift)
    {
        $data = Shift::findOrFail($shift);
        $this->name = $data->name;
        $this->start = $data->start;
        $this->end = $data->end;
    }

    protected $rules = [
        'name' => '',
        'start' => '',
        'end' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        Shift::where('id', $this->shift)->update($validatedData);

        return $this->redirectRoute('shift.index');
    }

    public function render()
    {
        return view('livewire.form.shift.edit');
    }
}
