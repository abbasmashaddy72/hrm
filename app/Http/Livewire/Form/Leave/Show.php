<?php

namespace App\Http\Livewire\Form\Leave;

use Livewire\Component;

class Show extends Component
{
    public $type;
    public $number;

    public function mount()
    {
        //
    }

    public function render()
    {
        return view('livewire.form.leave.show');
    }
}
