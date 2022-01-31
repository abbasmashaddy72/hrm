<?php

namespace App\Http\Livewire\Form\EmailTemplate;

use Livewire\Component;

class Show extends Component
{
    public $name;
    public $subject;
    public $message;
    public $status;

    public function mount()
    {
        //
    }

    public function render()
    {
        return view('livewire.form.email-template.show');
    }
}
