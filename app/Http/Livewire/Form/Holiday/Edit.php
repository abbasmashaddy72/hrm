<?php

namespace App\Http\Livewire\Form\Holiday;

use Livewire\Component;

class Edit extends Component
{
    public $name;
    public $date;

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
        return view('livewire.form.holiday.edit');
    }
}
