<?php

namespace App\Http\Livewire\Form\Holiday;

use Livewire\Component;

class Show extends Component
{
    public $name;
    public $date;

    public function mount()
    {
        //
    }

    public function render()
    {
        return view('livewire.form.holiday.show');
    }
}
