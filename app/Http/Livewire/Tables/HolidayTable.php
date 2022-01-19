<?php

namespace App\Http\Livewire\Tables;

use App\Models\Holiday;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class HolidayTable extends LivewireDatatable
{
    public $model = Holiday::class;

    public function builder()
    {
        return Holiday::query();
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

            DateColumn::name('date')
                ->filterable(),

            Column::callback(['id'], function ($id) {
                return view('pages.holiday.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
