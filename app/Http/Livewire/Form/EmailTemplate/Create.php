<?php

namespace App\Http\Livewire\Form\EmailTemplate;

use Livewire\Component;

class Create extends Component
{
    public $name;
    public $subject;
    public $message;
    public $status;

    public function submit()
    {
        return $this->redirectRoute('email_template.index');
    }

    public function render()
    {
        return view('livewire.form.email-template.create');
    }
}
