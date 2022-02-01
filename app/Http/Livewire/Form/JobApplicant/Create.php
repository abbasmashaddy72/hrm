<?php

namespace App\Http\Livewire\Form\JobApplicant;

use App\Models\JobApplicant;
use Livewire\Component;

class Create extends Component
{
    public $job_id;
    public $name;
    public $email;
    public $phone;
    public $about;
    public $status;
    public $resume;

    protected $rules = [
        'job_id' => '',
        'name' => '',
        'email' => '',
        'phone' => '',
        'about' => '',
        'status' => '',
        'resume' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        JobApplicant::create($validatedData);

        return $this->redirectRoute('job_applicant.index');
    }

    public function render()
    {
        return view('livewire.form.job-applicant.create');
    }
}
