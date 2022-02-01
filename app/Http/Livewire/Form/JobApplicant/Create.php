<?php

namespace App\Http\Livewire\Form\JobApplicant;

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

    public function submit()
    {
        return $this->redirectRoute('job_applicant.index');
    }

    public function render()
    {
        return view('livewire.form.job-applicant.create');
    }
}
