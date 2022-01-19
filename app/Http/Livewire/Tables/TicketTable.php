<?php

namespace App\Http\Livewire\Tables;

use App\Models\Ticket;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class TicketTable extends LivewireDatatable
{
    public $model = Ticket::class;
    public $exportable = true;

    public function builder()
    {
        return Ticket::with(['employee', 'department']);
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

            Column::name('employee.name')
                ->searchable()
                ->filterable()
                ->label('employee name'),

            Column::name('department.name')
                ->searchable()
                ->filterable()
                ->label('department name'),

            Column::name('phone')
                ->searchable()
                ->filterable(),

            Column::name('email')
                ->searchable()
                ->filterable(),

            Column::name('message')
                ->searchable()
                ->truncate(20)
                ->filterable(),

            Column::name('priority')
                ->searchable()
                ->filterable(['Critical', 'High', 'Normal', 'Low']),

            Column::name('status')
                ->searchable()
                ->filterable(['Open', 'Pending', 'Resolved', 'Closed', 'Duplicate']),

            Column::callback(['id'], function ($id) {
                return view('pages.ticket.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
