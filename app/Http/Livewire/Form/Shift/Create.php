<?php

namespace App\Http\Livewire\Form\Shift;

use Livewire\Component;

class Create extends Component
{
    public $name;
    public $start;
    public $end;

    public function submit()
    {
        return $this->redirectRoute('');
    }

    public function render()
    {
        return view('livewire.form.shift.create');
    }
}
