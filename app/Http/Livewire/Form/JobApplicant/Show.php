<?php

namespace App\Http\Livewire\Form\JobApplicant;

use App\Models\JobApplicant;
use Livewire\Component;

class Show extends Component
{
    public $jobApplicant;

    public $job_id;
    public $name;
    public $email;
    public $phone;
    public $about;
    public $status;
    public $resume;

    public function mount($jobApplicant)
    {
        $data = JobApplicant::findOrFail($jobApplicant);
        $this->job_id = $data->job_id;
        $this->name = $data->name;
        $this->email = $data->email;
        $this->phone = $data->phone;
        $this->about = $data->about;
        $this->status = $data->status;
        $this->resume = $data->resume;
    }

    public function render()
    {
        return view('livewire.form.job-applicant.show');
    }
}
