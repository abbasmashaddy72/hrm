<?php

namespace App\Http\Livewire\Tables;

use App\Models\Shift;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\TimeColumn;

class ShiftTable extends LivewireDatatable
{
    public $model = Shift::class;
    public $exportable = true;

    public function builder()
    {
        return Shift::query();
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

            TimeColumn::name('start')
                ->searchable()
                ->filterable(),

            TimeColumn::name('end')
                ->searchable()
                ->filterable(),

            Column::callback(['id'], function ($id) {
                return view('pages.shift.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
