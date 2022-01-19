<?php

namespace App\Http\Livewire\Tables;

use App\Models\Award;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class AwardTable extends LivewireDatatable
{
    public $model = Award::class;
    public $exportable = true;

    public function builder()
    {
        return Award::query();
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

            Column::name('description')
                ->searchable()
                ->filterable(),

            Column::callback(['id'], function ($id) {
                return view('pages.award.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
