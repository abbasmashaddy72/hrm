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

    protected $rules = [
        'name' => '',
        'status' => '',
        'permissions' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        RolePermissions::where('id', $this->rolePermissions)->update($validatedData);

        return $this->redirectRoute('role_permissions.index');
    }

    public function render()
    {
        return view('livewire.form.role-permissions.edit');
    }
}
