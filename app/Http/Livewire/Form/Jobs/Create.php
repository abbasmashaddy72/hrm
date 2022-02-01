<?php

namespace App\Http\Livewire\Form\Jobs;

use App\Models\Jobs;
use Livewire\Component;

class Create extends Component
{
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

        Jobs::create($validatedData);

        return $this->redirectRoute('jobs.index');
    }

    public function render()
    {
        return view('livewire.form.jobs.create');
    }
}
