<?php

namespace App\Http\Livewire\Form\EmployeeInventory;

use Livewire\Component;

class Edit extends Component
{
    public $inventory_id;
    public $employee_id;
    public $description;
    public $status;

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
        return view('livewire.form.employee-inventory.edit');
    }
}
