<?php

namespace App\Http\Livewire\Form\Designation;

use App\Models\Designation;
use Livewire\Component;

class Create extends Component
{
    public $department_id;
    public $role_permission_id;
    public $name;
    public $status;

    protected $rules = [
        'department_id' => '',
        'role_permission_id' => '',
        'name' => '',
        'status' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        Designation::create($validatedData);

        return $this->redirectRoute('designation.index');
    }

    public function render()
    {
        return view('livewire.form.designation.create');
    }
}
