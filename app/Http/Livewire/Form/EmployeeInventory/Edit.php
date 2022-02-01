<?php

namespace App\Http\Livewire\Form\EmployeeInventory;

use App\Models\EmployeeAward;
use App\Models\EmployeeInventory;
use Livewire\Component;

class Edit extends Component
{
    public $employeeInventory;

    public $inventory_id;
    public $employee_id;
    public $description;
    public $status;

    public function mount($employeeInventory)
    {
        $data = EmployeeAward::findOrFail($employeeInventory);
        $this->inventory_id = $data->inventory_id;
        $this->employee_id = $data->employee_id;
        $this->description = $data->description;
        $this->status = $data->status;
    }

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

        EmployeeInventory::where('id', $this->employeeInventory)->update($validatedData);

        return $this->redirectRoute('employee_inventory.index');
    }

    public function render()
    {
        return view('livewire.form.employee-inventory.edit');
    }
}
