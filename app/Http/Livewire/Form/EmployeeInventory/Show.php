<?php

namespace App\Http\Livewire\Form\EmployeeInventory;

use Livewire\Component;

class Show extends Component
{
    public $inventory_id;
    public $employee_id;
    public $description;
    public $status;

    public function mount()
    {
        //
    }

    public function render()
    {
        return view('livewire.form.employee-inventory.show');
    }
}
