<?php

namespace App\Http\Livewire\Form\Training;

use Livewire\Component;

class Show extends Component
{
    public $title;
    public $type;
    public $subject;
    public $nature;
    public $location;
    public $sponsored_by;
    public $organized_by;
    public $from;
    public $to;
    public $description;

    public function mount()
    {
        //
    }

    public function render()
    {
        return view('livewire.form.training.show');
    }
}
