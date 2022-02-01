<?php

namespace App\Http\Livewire\Form\Training;

use App\Models\Training;
use Livewire\Component;

class Show extends Component
{
    public $training;

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

    public function mount($training)
    {
        $data = Training::findOrFail($training);
        $this->title = $data->title;
        $this->type = $data->type;
        $this->subject = $data->subject;
        $this->nature = $data->nature;
        $this->location = $data->location;
        $this->sponsored_by = $data->sponsored_by;
        $this->organized_by = $data->organized_by;
        $this->from = $data->from;
        $this->to = $data->to;
        $this->description = $data->description;
    }

    public function render()
    {
        return view('livewire.form.training.show');
    }
}
