<?php

namespace App\Http\Livewire\Form\Employee;

use Livewire\Component;

class Edit extends Component
{
    public $designation_id;
    public $role_permission_id;
    public $user_id;
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
        return view('livewire.form.employee.edit');
    }
}
