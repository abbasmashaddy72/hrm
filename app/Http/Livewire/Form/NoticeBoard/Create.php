<?php

namespace App\Http\Livewire\Form\NoticeBoard;

use App\Models\NoticeBoard;
use Livewire\Component;

class Create extends Component
{
    public $title;
    public $description;
    public $start_date;
    public $end_date;
    public $assigned_by;

    protected $rules = [
        'title' => '',
        'description' => '',
        'start_date' => '',
        'end_date' => '',
        'assigned_by' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        NoticeBoard::create($validatedData);

        return $this->redirectRoute('notice_board.index');
    }

    public function render()
    {
        return view('livewire.form.notice-board.create');
    }
}
