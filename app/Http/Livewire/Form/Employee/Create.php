<?php

namespace App\Http\Livewire\Form\Employee;

use App\Models\Employee;
use Livewire\Component;

class Create extends Component
{
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

    protected $rules = [
        'designation_id' => '',
        'role_permission_id' => '',
        'name' => '',
        'gender' => '',
        'photo' => '',
        'phone' => '',
        'email' => '',
        'father_name' => '',
        'mother_name' => '',
        'date_of_birth' => '',
        'present_address' => '',
        'permanent_address' => '',
        'date_of_joining' => '',
        'date_of_reliving' => '',
        'payment_type' => '',
        'salary' => '',
        'bank_name' => '',
        'branch_name' => '',
        'account_number' => '',
        'ifsc_code' => '',
        'pan_number' => '',
        'aadhaar_number' => '',
        'documents' => '',
        'status' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        Employee::create($validatedData);

        return $this->redirectRoute('employee.index');
    }

    public function render()
    {
        return view('livewire.form.employee.create');
    }
}
