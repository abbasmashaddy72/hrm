<?php

namespace App\Http\Livewire\Form\Department;

use Livewire\Component;

class Edit extends Component
{
    public $name;
    public $level;
    public $status;

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
        return view('livewire.form.department.edit');
    }
}
