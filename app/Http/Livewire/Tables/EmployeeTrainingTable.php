<?php

namespace App\Http\Livewire\Tables;

use App\Models\EmployeeTraining;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class EmployeeTrainingTable extends LivewireDatatable
{
    public $model = EmployeeTraining::class;
    public $exportable = true;

    public function builder()
    {
        return EmployeeTraining::with(['employee', 'training']);
    }
    public function columns()
    {
        return [
            Column::checkbox()
                ->label('Checkbox'),

            NumberColumn::name('id')
                ->label('ID')
                ->defaultSort('desprogressc')
                ->filterable(),

            Column::name('employee.name')
                ->searchable()
                ->filterable()
                ->label('Employee Name'),

            Column::name('training.title')
                ->searchable()
                ->filterable(),

            Column::name('feedback')
                ->searchable()
                ->truncate(20)
                ->filterable(),

            Column::name('status')
                ->searchable()
                ->filterable(['Attended', 'UnAttended']),

            Column::callback(['id'], function ($id) {
                return view('pages.employee_training.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
