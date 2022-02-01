<?php

namespace App\Http\Livewire\Form\Training;

use App\Models\Training;
use Livewire\Component;

class Create extends Component
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

    protected $rules = [
        'title' => '',
        'type' => '',
        'subject' => '',
        'nature' => '',
        'location' => '',
        'sponsored_by' => '',
        'organized_by' => '',
        'from' => '',
        'to' => '',
        'description' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        Training::create($validatedData);

        return $this->redirectRoute('training.index');
    }

    public function render()
    {
        return view('livewire.form.training.create');
    }
}
