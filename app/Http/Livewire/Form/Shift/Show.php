<?php

namespace App\Http\Livewire\Form\Shift;

use Livewire\Component;

class Show extends Component
{
    public $name;
    public $start;
    public $end;

    public function mount()
    {
        //
    }

    public function render()
    {
        return view('livewire.form.shift.show');
    }
}
