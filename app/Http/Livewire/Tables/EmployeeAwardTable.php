<?php

namespace App\Http\Livewire\Tables;

use App\Models\EmployeeAward;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class EmployeeAwardTable extends LivewireDatatable
{
    public $model = EmployeeAward::class;
    public $exportable = true;

    public function builder()
    {
        return EmployeeAward::with(['employee', 'award']);
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

            Column::name('award.name')
                ->searchable()
                ->filterable()
                ->label('Award Name'),

            DateColumn::name('created_at')
                ->filterable(),

            Column::callback(['id'], function ($id) {
                return view('pages.employee_award.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
