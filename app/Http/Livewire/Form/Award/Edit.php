<?php

namespace App\Http\Livewire\Form\Award;

use App\Models\Award;
use Livewire\Component;

class Edit extends Component
{
    public $award;

    public $name;
    public $description;

    public function mount($award)
    {
        $data = Award::findOrFail($award);
        $this->name = $data->name;
        $this->description = $data->description;
    }

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

        Award::where('id', $this->award)->update($validatedData);

        return $this->redirectRoute('award.index');
    }

    public function render()
    {
        return view('livewire.form.award.edit');
    }
}
