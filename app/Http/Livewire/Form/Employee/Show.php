<?php

namespace App\Http\Livewire\Form\Employee;

use App\Models\Employee;
use Livewire\Component;

class Show extends Component
{
    public $employee;

    public $designation_id;
    public $role_permission_id;
    public $name;
    public $gender;
    public $photo;
    public $phone;
    public $email;
    public $father_name;
    public $mother_name;
    public $date_of_birth;
    public $present_address;
    public $permanent_address;
    public $date_of_joining;
    public $date_of_reliving;
    public $payment_type;
    public $salary;
    public $bank_name;
    public $branch_name;
    public $account_number;
    public $ifsc_code;
    public $pan_number;
    public $aadhaar_number;
    public $documents;
    public $status;

    public function mount($employee)
    {
        $data = Employee::findOrFail($employee);
        $this->designation_id = $data->designation_id;
        $this->role_permission_id = $data->role_permission_id;
        $this->name = $data->name;
        $this->gender = $data->gender;
        $this->photo = $data->photo;
        $this->phone = $data->phone;
        $this->email = $data->email;
        $this->father_name = $data->father_name;
        $this->mother_name = $data->mother_name;
        $this->date_of_birth = $data->date_of_birth;
        $this->present_address = $data->present_address;
        $this->permanent_address = $data->permanent_address;
        $this->date_of_joining = $data->date_of_joining;
        $this->date_of_reliving = $data->date_of_reliving;
        $this->payment_type = $data->payment_type;
        $this->salary = $data->salary;
        $this->bank_name = $data->bank_name;
        $this->branch_name = $data->branch_name;
        $this->account_number = $data->account_number;
        $this->ifsc_code = $data->ifsc_code;
        $this->pan_number = $data->pan_number;
        $this->aadhaar_number = $data->aadhaar_number;
        $this->documents = $data->documents;
        $this->status = $data->status;
    }

    public function render()
    {
        return view('livewire.form.employee.show');
    }
}
