<?php

namespace App\Http\Livewire\Form\Department;

use Livewire\Component;

class Show extends Component
{
    public $name;
    public $level;
    public $status;

    public function mount()
    {
        //
    }

    public function render()
    {
        return view('livewire.form.department.show');
    }
}
