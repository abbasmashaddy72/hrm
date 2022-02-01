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

    public function submit()
    {
        return $this->redirectRoute('');
    }

    public function render()
    {
        return view('livewire.form.holiday.edit');
    }
}
