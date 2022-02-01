<?php

namespace App\Http\Livewire\Form\Designation;

use App\Models\Designation;
use Livewire\Component;

class Edit extends Component
{
    public $designation;

    public $department_id;
    public $role_permission_id;
    public $name;
    public $status;

    public function mount($designation)
    {
        $data = Designation::findOrFail($designation);
        $this->department_id = $data->department_id;
        $this->role_permission_id = $data->role_permission_id;
        $this->name = $data->name;
        $this->status = $data->status;
    }

    public function submit()
    {
        return $this->redirectRoute('designation.index');
    }

    public function render()
    {
        return view('livewire.form.designation.edit');
    }
}
