<?php

namespace App\Http\Livewire\Form\Department;

use App\Models\Department;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $level;
    public $status;

    protected $rules = [
        'name' => '',
        'level' => '',
        'status' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        Department::create($validatedData);

        return $this->redirectRoute('department.index');
    }

    public function render()
    {
        return view('livewire.form.department.create');
    }
}
