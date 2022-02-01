<?php

namespace App\Http\Livewire\Form\EmployeeInventory;

use Livewire\Component;

class Create extends Component
{
    public $inventory_id;
    public $employee_id;
    public $description;
    public $status;

    public function submit()
    {
        return $this->redirectRoute('employee_inventory.index');
    }

    public function render()
    {
        return view('livewire.form.employee-inventory.create');
    }
}
