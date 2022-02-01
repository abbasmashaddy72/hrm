<?php

namespace App\Http\Livewire\Form\Shift;

use App\Models\Shift;
use Livewire\Component;

class Show extends Component
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

    public function render()
    {
        return view('livewire.form.shift.show');
    }
}
