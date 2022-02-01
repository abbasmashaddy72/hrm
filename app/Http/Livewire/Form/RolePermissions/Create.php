<?php

namespace App\Http\Livewire\Form\RolePermissions;

use Livewire\Component;

class Create extends Component
{
    public $name;
    public $status;
    public $permissions;

    public function submit()
    {
        return $this->redirectRoute('role_permissions.index');
    }

    public function render()
    {
        return view('livewire.form.role-permissions.create');
    }
}
