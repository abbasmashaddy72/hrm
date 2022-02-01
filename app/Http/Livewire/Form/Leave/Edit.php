<?php

namespace App\Http\Livewire\Form\Leave;

use App\Models\Leave;
use Livewire\Component;

class Edit extends Component
{
    public $leave;

    public $type;
    public $number;

    public function mount($leave)
    {
        $data = Leave::findOrFail($leave);
        $this->type = $data->type;
        $this->number = $data->number;
    }

    public function submit()
    {
        return $this->redirectRoute('leave.index');
    }

    public function render()
    {
        return view('livewire.form.leave.edit');
    }
}
