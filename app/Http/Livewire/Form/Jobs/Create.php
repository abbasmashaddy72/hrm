<?php

namespace App\Http\Livewire\Form\Jobs;

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

    public function submit()
    {
        return $this->redirectRoute('jobs.index');
    }

    public function render()
    {
        return view('livewire.form.jobs.create');
    }
}
