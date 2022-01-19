<?php

namespace App\Http\Livewire\Tables;

use App\Models\Employee;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class EmployeeTable extends LivewireDatatable
{
    public $model = Employee::class;
    public $exportable = true;

    public function builder()
    {
        return Employee::query();
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

            Column::name('gender')
                ->searchable()
                ->filterable(['Male', 'FeMale', 'Trans']),

            Column::name('phone')
                ->searchable()
                ->filterable(),

            Column::name('email')
                ->searchable()
                ->filterable(),

            Column::name('father_name')
                ->searchable()
                ->filterable(),

            Column::name('mother_name')
                ->searchable()
                ->filterable(),

            DateColumn::name('date_of_birth')
                ->searchable()
                ->filterable(),

            Column::name('present_address')
                ->searchable()
                ->truncate(20)
                ->filterable(),

            Column::name('permanent_address')
                ->searchable()
                ->truncate(20)
                ->filterable(),

            DateColumn::name('date_of_joining')
                ->searchable()
                ->filterable(),

            DateColumn::name('date_of_reliving')
                ->searchable()
                ->filterable(),

            Column::name('payment_type')
                ->searchable()
                ->filterable(['Monthly', 'Hourly', 'Project']),

            Column::name('salary')
                ->searchable()
                ->filterable(),

            Column::name('bank_name')
                ->searchable()
                ->filterable(),

            Column::name('branch_name')
                ->searchable()
                ->filterable(),

            Column::name('account_number')
                ->searchable()
                ->filterable(),

            Column::name('ifsc_code')
                ->searchable()
                ->filterable(),

            Column::name('pan_number')
                ->searchable()
                ->filterable(),

            Column::name('aadhaar_number')
                ->searchable()
                ->filterable(),

            Column::name('documents')
                ->searchable()
                ->filterable(['Submitted', 'Not Submitted']),

            Column::name('status')
                ->searchable()
                ->filterable(['Active', 'InActive']),

            Column::callback(['id'], function ($id) {
                return view('pages.employee.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
