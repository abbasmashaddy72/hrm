<?php

namespace App\Http\Livewire\Form\Award;

use App\Models\Award;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $description;

    protected $rules = [
        'name' => '',
        'description' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        Award::create($validatedData);

        return $this->redirectRoute('award.index');
    }

    public function render()
    {
        return view('livewire.form.award.create');
    }
}
