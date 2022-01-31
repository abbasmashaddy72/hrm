<?php

namespace App\Http\Livewire\Form\RolePermissions;

use Livewire\Component;

class Show extends Component
{
    public $name;
    public $status;
    public $permissions;

    public function mount()
    {
        //
    }

    public function render()
    {
        return view('livewire.form.role-permissions.show');
    }
}
