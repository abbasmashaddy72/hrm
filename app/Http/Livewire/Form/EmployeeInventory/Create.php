<?php

namespace App\Http\Livewire\Form\EmployeeInventory;

use App\Models\EmployeeInventory;
use Livewire\Component;

class Create extends Component
{
    public $inventory_id;
    public $employee_id;
    public $description;
    public $status;

    protected $rules = [
        'inventory_id' => '',
        'employee_id' => '',
        'description' => '',
        'status' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        EmployeeInventory::create($validatedData);

        return $this->redirectRoute('employee_inventory.index');
    }

    public function render()
    {
        return view('livewire.form.employee-inventory.create');
    }
}
