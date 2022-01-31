<?php

namespace App\Http\Livewire\Form\NoticeBoard;

use Livewire\Component;

class Create extends Component
{
    public $title;
    public $description;
    public $start_date;
    public $end_date;
    public $assigned_by;

    public function submit()
    {
        return $this->redirectRoute('');
    }

    public function render()
    {
        return view('livewire.form.notice-board.create');
    }
}
