<?php

namespace App\Http\Livewire\Tables;

use App\Models\NoticeBoard;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class NoticeBoardTable extends LivewireDatatable
{
    public $model = NoticeBoard::class;

    public function columns()
    {
        //
    }
}