<?php

namespace App\Http\Livewire\Form\Department;

use Livewire\Component;

class Create extends Component
{
    public $name;
    public $level;
    public $status;

    public function submit()
    {
        return $this->redirectRoute('department.index');
    }

    public function render()
    {
        return view('livewire.form.department.create');
    }
}
