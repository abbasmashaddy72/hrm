<?php

namespace App\Http\Livewire\Form\Leave;

use App\Models\Leave;
use Livewire\Component;

class Create extends Component
{
    public $type;
    public $number;

    protected $rules = [
        'type' => '',
        'number' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        Leave::create($validatedData);

        return $this->redirectRoute('leave.index');
    }

    public function render()
    {
        return view('livewire.form.leave.create');
    }
}
