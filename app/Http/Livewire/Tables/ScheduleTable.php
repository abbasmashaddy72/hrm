<?php

namespace App\Http\Livewire\Tables;

use App\Models\EmployeeSchedule;
use App\Models\Schedule;
use Illuminate\Support\Facades\DB;
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
        return EmployeeSchedule::with('employee', 'schedule')->groupBy('schedule_id');
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

            Column::name('schedule.name')
                ->searchable()
                ->filterable(),

            Column::callback(['schedule.working_days'], function ($working_days) {
                return  view('pages.schedule.table_working_days_view', compact('working_days'));
            })->label('working_days')
                ->exportCallback(function ($working_days) {
                    return (string) $working_days;
                })
                ->unsortable(),

            DateColumn::name('schedule.start')
                ->searchable()
                ->filterable(),

            DateColumn::name('schedule.end')
                ->searchable()
                ->filterable(),

            NumberColumn::raw('COUNT(employee_id)'),

            Column::callback(['id'], function ($id) {
                return view('pages.schedule.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
