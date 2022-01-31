<?php

namespace App\Http\Livewire\Form\Shift;

use Livewire\Component;

class Edit extends Component
{
    public $name;
    public $start;
    public $end;

    public function mount()
    {
        //
    }

    public function submit()
    {
        return $this->redirectRoute('');
    }

    public function render()
    {
        return view('livewire.form.shift.edit');
    }
}
