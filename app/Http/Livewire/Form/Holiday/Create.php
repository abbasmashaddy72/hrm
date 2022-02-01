<?php

namespace App\Http\Livewire\Form\Holiday;

use App\Models\Holiday;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $date;

    protected $rules = [
        'name' => '',
        'date' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        Holiday::create($validatedData);

        return $this->redirectRoute('holiday.index');
    }

    public function render()
    {
        return view('livewire.form.holiday.create');
    }
}
