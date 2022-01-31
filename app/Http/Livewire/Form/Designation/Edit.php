<?php

namespace App\Http\Livewire\Form\Designation;

use Livewire\Component;

class Edit extends Component
{
    public $department_id;
    public $role_permission_id;
    public $name;
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
        return view('livewire.form.designation.edit');
    }
}
