<?php

namespace App\Http\Livewire\Form\Department;

use App\Models\Department;
use Livewire\Component;

class Edit extends Component
{
    public $department;

    public $name;
    public $level;
    public $status;

    public function mount($department)
    {
        $data = Department::findOrFail($department);
        $this->name = $data->name;
        $this->level = $data->level;
        $this->status = $data->status;
    }

    public function submit()
    {
        return $this->redirectRoute('');
    }

    public function render()
    {
        return view('livewire.form.department.edit');
    }
}
