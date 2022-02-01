<?php

namespace App\Http\Livewire\Form\Holiday;

use App\Models\Holiday;
use Livewire\Component;

class Edit extends Component
{
    public $holiday;

    public $name;
    public $date;

    public function mount($holiday)
    {
        $data = Holiday::findOrFail($holiday);
        $this->name = $data->name;
        $this->date = $data->date;
    }

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

        Holiday::where('id', $this->holiday)->update($validatedData);

        return $this->redirectRoute('');
    }

    public function render()
    {
        return view('livewire.form.holiday.edit');
    }
}
