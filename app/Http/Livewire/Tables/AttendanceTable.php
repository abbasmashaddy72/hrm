<?php

namespace App\Http\Livewire\Tables;

use App\Models\Attendance;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\TimeColumn;

class AttendanceTable extends LivewireDatatable
{
    public $model = Attendance::class;
    public $exportable = true;

    public function builder()
    {
        return Attendance::with(['employee']);
    }

    public function columns()
    {
        return [
            Column::checkbox()
                ->label('Checkbox'),

            NumberColumn::name('id')
                ->label('ID')
                ->defaultSort('desc')
                ->filterable(),

            Column::name('employee.name')
                ->searchable()
                ->filterable()
                ->label('Employee Name'),

            DateColumn::name('date')
                ->filterable(),

            TimeColumn::name('clock_in')
                ->searchable()
                ->filterable(),

            TimeColumn::name('clock_out')
                ->searchable()
                ->filterable(),

            NumberColumn::name('late')
                ->searchable()
                ->filterable(),

            NumberColumn::name('early_leaving')
                ->searchable()
                ->filterable(),

            NumberColumn::name('overtime')
                ->searchable()
                ->filterable(),

            Column::name('status')
                ->searchable()
                ->filterable(['UnMarked', 'Marked', 'Approved', 'Absent', 'Holiday', 'Present', 'Leave']),

            Column::callback(['id'], function ($id) {
                return view('pages.attendance.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
