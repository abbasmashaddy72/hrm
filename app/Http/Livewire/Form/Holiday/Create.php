<?php

namespace App\Http\Livewire\Form\Holiday;

use Livewire\Component;

class Create extends Component
{
    public $name;
    public $date;

    public function submit()
    {
        return $this->redirectRoute('holiday.index');
    }

    public function render()
    {
        return view('livewire.form.holiday.create');
    }
}
