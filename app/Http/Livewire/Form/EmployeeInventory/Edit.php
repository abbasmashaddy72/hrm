<?php

namespace App\Http\Livewire\Form\EmployeeInventory;

use App\Models\EmployeeAward;
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

    public function submit()
    {
        return $this->redirectRoute('employee_inventory.index');
    }

    public function render()
    {
        return view('livewire.form.employee-inventory.edit');
    }
}
