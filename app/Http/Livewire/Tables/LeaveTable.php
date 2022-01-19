<?php

namespace App\Http\Livewire\Tables;

use App\Models\Leave;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class LeaveTable extends LivewireDatatable
{
    public $model = Leave::class;

    public function columns()
    {
        return [
            Column::checkbox()
                ->label('Checkbox'),

            NumberColumn::name('id')
                ->label('ID')
                ->defaultSort('desc')
                ->filterable(),

            Column::name('type')
                ->searchable()
                ->filterable(),

            NumberColumn::name('number')
                ->filterable(),

            Column::callback(['id'], function ($id) {
                return view('pages.leave.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
