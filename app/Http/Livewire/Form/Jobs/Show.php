<?php

namespace App\Http\Livewire\Form\Jobs;

use Livewire\Component;

class Show extends Component
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

    public function mount()
    {
        //
    }

    public function render()
    {
        return view('livewire.form.jobs.show');
    }
}
