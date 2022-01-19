<?php

namespace App\Http\Livewire\Tables;

use App\Models\EmployeeInventory;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class EmployeeInventoryTable extends LivewireDatatable
{
    public $model = EmployeeInventory::class;
    public $exportable = true;

    public function builder()
    {
        return EmployeeInventory::with(['employee', 'inventory']);
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

            Column::name('inventory.name')
                ->searchable()
                ->filterable()
                ->label('inventory Name'),

            Column::name('status')
                ->searchable()
                ->filterable(['Available', 'Damaged', 'Work From Home', 'Returned']),

            DateColumn::name('created_at')
                ->filterable(),

            Column::callback(['id'], function ($id) {
                return view('pages.employee_inventory.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
