<?php

namespace App\Http\Livewire\Tables;

use App\Models\Department;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class DepartmentTable extends LivewireDatatable
{
    public $model = Department::class;
    public $exportable = true;

    public function builder()
    {
        return Department::query();
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

            Column::name('level')
                ->searchable()
                ->filterable(),

            Column::name('status')
                ->searchable()
                ->filterable(['Active', 'InActive']),

            Column::callback(['id'], function ($id) {
                return view('pages.department.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
