<?php

namespace App\Http\Livewire\Form\Shift;

use App\Models\Shift;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $start;
    public $end;

    protected $rules = [
        'name' => '',
        'start' => '',
        'end' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        Shift::create($validatedData);

        return $this->redirectRoute('shift.index');
    }

    public function render()
    {
        return view('livewire.form.shift.create');
    }
}
