<?php

namespace App\Http\Livewire\Form\Award;

use Livewire\Component;

class Edit extends Component
{
    public $name;
    public $description;

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
        return view('livewire.form.award.edit');
    }
}
