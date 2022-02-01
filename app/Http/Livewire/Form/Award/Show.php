<?php

namespace App\Http\Livewire\Form\Award;

use App\Models\Award;
use Livewire\Component;

class Show extends Component
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

    public function render()
    {
        return view('livewire.form.award.show');
    }
}
