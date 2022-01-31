<?php

namespace App\Http\Livewire\Form\JobApplicant;

use Livewire\Component;

class Show extends Component
{
    public $job_id;
    public $name;
    public $email;
    public $phone;
    public $about;
    public $status;
    public $resume;

    public function mount()
    {
        //
    }

    public function render()
    {
        return view('livewire.form.job-applicant.show');
    }
}
