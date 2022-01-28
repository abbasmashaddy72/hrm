<?php

namespace App\Http\Livewire\Tables;

use App\Models\EmployeeNoticeBoard;
use App\Models\NoticeBoard;
use Illuminate\Support\Facades\DB;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class NoticeBoardTable extends LivewireDatatable
{
    public $model = NoticeBoard::class;
    public $exportable = true;

    public function builder()
    {
        return EmployeeNoticeBoard::with('employee', 'noticeBoard')->groupBy('notice_board_id');
    }
    public function columns()
    {
        DB::statement("SET SQL_MODE=''");
        return [
            Column::checkbox()
                ->label('Checkbox'),

            NumberColumn::name('id')
                ->label('ID')
                ->defaultSort('desc')
                ->filterable(),

            Column::name('noticeBoard.title')
                ->searchable()
                ->filterable(),

            Column::name('noticeBoard.description')
                ->searchable()
                ->filterable(),

            NumberColumn::raw('COUNT(employee_id)'),

            DateColumn::name('noticeBoard.start_date')
                ->filterable(),

            DateColumn::name('noticeBoard.end_date')
                ->filterable(),

            Column::callback(['notice_board_id'], function ($notice_board_id) {
                return view('pages.notice_board.actions', ['id' => $notice_board_id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
