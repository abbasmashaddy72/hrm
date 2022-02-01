<?php

namespace App\Http\Livewire\Form\EmailTemplate;

use App\Models\EmailTemplate;
use Livewire\Component;

class Edit extends Component
{
    public $emailTemplate;

    public $name;
    public $subject;
    public $message;
    public $status;

    public function mount($emailTemplate)
    {
        $data = EmailTemplate::findOrFail($emailTemplate);
        $this->name = $data->name;
        $this->subject = $data->subject;
        $this->message = $data->message;
        $this->status = $data->status;
    }

    public function submit()
    {
        return $this->redirectRoute('email_template.index');
    }

    public function render()
    {
        return view('livewire.form.email-template.edit');
    }
}
