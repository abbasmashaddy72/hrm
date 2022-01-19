<?php

namespace App\Http\Livewire\Tables;

use App\Models\Inventory;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class InventoryTable extends LivewireDatatable
{
    public $model = Inventory::class;
    public $exportable = true;

    public function builder()
    {
        return Inventory::query();
    }

    public function columns()
    {
        return [
            Column::name('checkbox')
                ->checkbox(),

            NumberColumn::name('id')
                ->label('ID')
                ->defaultSort('desc')
                ->filterable(),

            Column::name('name')
                ->searchable()
                ->filterable(),

            Column::name('vendor_name')
                ->searchable()
                ->filterable(),

            Column::name('invoice_number')
                ->searchable()
                ->filterable(),

            Column::name('price')
                ->searchable()
                ->filterable(),

            Column::name('payment_mode')
                ->searchable()
                ->filterable(),

            Column::name('stock')
                ->searchable()
                ->filterable(),

            Column::name('defective')
                ->searchable()
                ->filterable(),

            Column::name('trashed')
                ->searchable()
                ->filterable(),

            Column::name('description')
                ->searchable()
                ->truncate(50)
                ->filterable(),

            Column::callback(['id'], function ($id) {
                return view('pages.inventory.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
