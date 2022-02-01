<?php

namespace App\Http\Livewire\Form\RolePermissions;

use App\Models\RolePermissions;
use Livewire\Component;

class Edit extends Component
{
    public $rolePermissions;

    public $name;
    public $status;
    public $permissions;

    public function mount($rolePermissions)
    {
        $data = RolePermissions::findOrFail($rolePermissions);
        $this->name = $data->name;
        $this->status = $data->status;
        $this->permissions = $data->permissions;
    }

    public function submit()
    {
        return $this->redirectRoute('role_permissions.index');
    }

    public function render()
    {
        return view('livewire.form.role-permissions.edit');
    }
}
