<?php

namespace App\Http\Livewire\Tables;

use App\Models\EmailTemplate;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class EmailTemplateTable extends LivewireDatatable
{
    public $model = EmailTemplate::class;

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

            Column::name('subject')
                ->searchable()
                ->filterable(),

            BooleanColumn::name('message')
                ->unsortable(),

            Column::name('status')
                ->searchable()
                ->filterable(['Active', 'InActive']),

            Column::callback(['id'], function ($id) {
                return view('pages.ticket.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
