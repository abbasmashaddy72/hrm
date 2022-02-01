<?php

namespace App\Http\Livewire\Form\Jobs;

use App\Models\Jobs;
use Livewire\Component;

class Edit extends Component
{
    public $jobs;

    public $title;
    public $position;
    public $type;
    public $experience;
    public $location;
    public $salary_range;
    public $short_description;
    public $description;
    public $apply_date;
    public $close_date;
    public $status;

    public function mount($jobs)
    {
        $data = Jobs::findOrFail($jobs);
        $this->title = $data->title;
        $this->position = $data->position;
        $this->type = $data->type;
        $this->experience = $data->experience;
        $this->location = $data->location;
        $this->salary_range = $data->salary_range;
        $this->short_description = $data->short_description;
        $this->description = $data->description;
        $this->apply_date = $data->apply_date;
        $this->close_date = $data->close_date;
        $this->status = $data->status;
    }

    protected $rules = [
        'title' => '',
        'position' => '',
        'type' => '',
        'experience' => '',
        'location' => '',
        'salary_range' => '',
        'short_description' => '',
        'description' => '',
        'apply_date' => '',
        'close_date' => '',
        'status' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        Jobs::where('id', $this->jobs)->update($validatedData);

        return $this->redirectRoute('jobs.index');
    }

    public function render()
    {
        return view('livewire.form.jobs.edit');
    }
}
