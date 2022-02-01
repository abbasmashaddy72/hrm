<?php

namespace App\Http\Livewire\Form\EmailTemplate;

use App\Models\EmailTemplate;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $subject;
    public $message;
    public $status;

    protected $rules = [
        'name' => '',
        'subject' => '',
        'message' => '',
        'status' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        EmailTemplate::create($validatedData);

        return $this->redirectRoute('email_template.index');
    }

    public function render()
    {
        return view('livewire.form.email-template.create');
    }
}
