<?php

namespace App\Http\Livewire\Form\RolePermissions;

use App\Models\RolePermissions;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $status;
    public $permissions;

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

        RolePermissions::create($validatedData);

        return $this->redirectRoute('role_permissions.index');
    }

    public function render()
    {
        return view('livewire.form.role-permissions.create');
    }
}
