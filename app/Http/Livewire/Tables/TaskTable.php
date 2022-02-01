<?php

namespace App\Http\Livewire\Tables;

use App\Models\Task;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class TaskTable extends LivewireDatatable
{
    public $model = Task::class;
    public $exportable = true;

    public function builder()
    {
        return Task::with(['employee']);
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

            Column::name('name')
                ->searchable()
                ->filterable(),

            DateColumn::name('start_date')
                ->searchable()
                ->filterable(),

            DateColumn::name('due_date')
                ->searchable()
                ->filterable(),

            NumberColumn::name('estimated_hour')
                ->filterable(),

            Column::name('description')
                ->searchable()
                ->truncate(20)
                ->filterable(),

            Column::name('progress')
                ->searchable()
                ->filterable(),

            Column::name('status')
                ->searchable()
                ->filterable(['Pending', 'Started', 'Completed']),

            Column::callback(['id'], function ($id) {
                return view('pages.task.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
