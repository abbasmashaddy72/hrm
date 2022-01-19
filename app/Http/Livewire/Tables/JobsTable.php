<?php

namespace App\Http\Livewire\Tables;

use App\Models\Jobs;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class JobsTable extends LivewireDatatable
{
    public $model = Jobs::class;
    public $exportable = true;

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

            Column::name('position')
                ->searchable()
                ->filterable(),

            Column::name('type')
                ->searchable()
                ->filterable(['Contractual', 'Part Time', 'Full Time']),

            NumberColumn::name('experience')
                ->filterable(),

            Column::name('location')
                ->searchable()
                ->filterable(),

            Column::name('salary_range')
                ->searchable()
                ->filterable(),

            Column::name('short_description')
                ->truncate(20)
                ->searchable()
                ->unsortable()
                ->filterable(),

            DateColumn::name('apply_date')
                ->filterable(),

            DateColumn::name('close_date')
                ->filterable(),

            Column::name('status')
                ->searchable()
                ->filterable(['Active', 'InActive']),

            Column::callback(['id'], function ($id) {
                return view('pages.jobs.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
