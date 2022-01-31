<?php

namespace App\Http\Livewire\Form\RolePermissions;

use Livewire\Component;

class Edit extends Component
{
    public $name;
    public $status;
    public $permissions;

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
        return view('livewire.form.role-permissions.edit');
    }
}
