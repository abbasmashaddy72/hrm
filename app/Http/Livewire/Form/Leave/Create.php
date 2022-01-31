<?php

namespace App\Http\Livewire\Form\Leave;

use Livewire\Component;

class Create extends Component
{
    public $type;
    public $number;

    public function submit()
    {
        return $this->redirectRoute('');
    }

    public function render()
    {
        return view('livewire.form.leave.create');
    }
}
