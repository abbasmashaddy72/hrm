<?php

namespace App\Http\Livewire\Form\Award;

use Livewire\Component;

class Create extends Component
{
    public $name;
    public $description;

    public function submit()
    {
        return $this->redirectRoute('award.index');
    }

    public function render()
    {
        return view('livewire.form.award.create');
    }
}
