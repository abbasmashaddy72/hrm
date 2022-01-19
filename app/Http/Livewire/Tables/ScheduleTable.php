<?php

namespace App\Http\Livewire\Tables;

use App\Models\Schedule;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;

class ScheduleTable extends LivewireDatatable
{
    public $model = Schedule::class;
    public $exportable = true;

    public function builder()
    {
        return Schedule::with(['shift']);
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

            Column::name('name')
                ->searchable()
                ->filterable(),

            Column::name('shift.name')
                ->label('Shift name')
                ->searchable()
                ->filterable(),

            Column::callback(['working_days'], function ($working_days) {
                return  view('pages.schedule.table_working_days_view', compact('working_days'));
            })->label('working_days')
                ->exportCallback(function ($working_days) {
                    return (string) $working_days;
                })
                ->unsortable(),

            DateColumn::name('start')
                ->searchable()
                ->filterable(),

            DateColumn::name('end')
                ->searchable()
                ->filterable(),

            Column::callback(['selected_employee'], function ($selected_employee) {
                return  view('pages.schedule.table_selected_employee_view', compact('selected_employee'));
            })->label('selected_employee')
                ->exportCallback(function ($selected_employee) {
                    return (string) $selected_employee;
                })
                ->unsortable(),

            Column::callback(['id'], function ($id) {
                return view('pages.schedule.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
