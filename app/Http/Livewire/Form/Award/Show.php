<?php

namespace App\Http\Livewire\Form\Award;

use Livewire\Component;

class Show extends Component
{
    public $name;
    public $description;

    public function mount()
    {
        //
    }

    public function render()
    {
        return view('livewire.form.award.show');
    }
}
