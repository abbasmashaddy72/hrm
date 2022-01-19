<?php

namespace App\Http\Livewire\Tables;

use App\Models\RolePermissions;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class RolePermissionsTable extends LivewireDatatable
{
    public $model = RolePermissions::class;
    public $exportable = true;

    public function builder()
    {
        return RolePermissions::query();
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

            Column::callback(['permissions'], function ($permissions) {
                return  view('pages.role_permissions.table_permissions_view', compact('permissions'));
            })
                ->label('permissions')
                ->exportCallback(function ($permissions) {
                    return (string) $permissions;
                })
                ->unsortable(),

            Column::name('status')
                ->searchable()
                ->filterable(['Active', 'InActive']),

            Column::callback(['id'], function ($id) {
                return view('pages.role_permissions.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
