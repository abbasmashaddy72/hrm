<?php

namespace App\Http\Livewire\Tables;

use App\Models\Training;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class TrainingTable extends LivewireDatatable
{
    public $model = Training::class;
    public $exportable = true;

    public function builder()
    {
        return Training::query();
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

            Column::name('title')
                ->searchable()
                ->filterable(),

            Column::name('type')
                ->searchable()
                ->filterable(['Online Training', 'Seminar', 'Lecture', 'Workshop', 'Hands On Training', 'Webinar']),

            Column::name('subject')
                ->searchable()
                ->filterable(),

            Column::name('location')
                ->searchable()
                ->filterable(),

            Column::name('sponsored_by')
                ->searchable()
                ->filterable(),

            Column::name('organized_by')
                ->searchable()
                ->filterable(),

            Column::name('from')
                ->searchable()
                ->filterable(),

            Column::name('to')
                ->searchable()
                ->filterable(),

            Column::name('nature')
                ->searchable()
                ->filterable(['Internal', 'External']),

            Column::callback(['id'], function ($id) {
                return view('pages.training.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
