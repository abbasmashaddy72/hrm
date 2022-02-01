<?php

namespace App\Http\Livewire\Form\NoticeBoard;

use App\Models\NoticeBoard;
use Livewire\Component;

class Show extends Component
{
    public $noticeBoard;

    public $title;
    public $description;
    public $start_date;
    public $end_date;
    public $assigned_by;

    public function mount($noticeBoard)
    {
        $data = NoticeBoard::findOrFail($noticeBoard);
        $this->title = $data->title;
        $this->description = $data->description;
        $this->start_date = $data->start_date;
        $this->end_date = $data->end_date;
        $this->assigned_by = $data->assigned_by;
    }

    public function render()
    {
        return view('livewire.form.notice-board.show');
    }
}
