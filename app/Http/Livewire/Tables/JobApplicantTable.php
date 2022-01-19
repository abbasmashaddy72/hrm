<?php

namespace App\Http\Livewire\Tables;

use App\Models\JobApplicant;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class JobApplicantTable extends LivewireDatatable
{
    public $model = JobApplicant::class;
    public $exportable = true;

    public function builder()
    {
        return JobApplicant::with(['job']);
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

            Column::name('job.title')
                ->label('job name')
                ->searchable()
                ->filterable(),

            Column::name('name')
                ->searchable()
                ->filterable(),

            Column::name('email')
                ->searchable()
                ->filterable(),

            Column::name('phone')
                ->searchable()
                ->filterable(),

            Column::name('about')
                ->searchable()
                ->truncate(20)
                ->filterable(),

            DateColumn::name('created_at')
                ->filterable()
                ->label('Applied Date'),

            BooleanColumn::name('resume'),

            Column::name('status')
                ->searchable()
                ->filterable(['Unread', 'Rejected', 'Primary Selected', 'Call For Interview', 'Confirm']),

            Column::callback(['id'], function ($id) {
                return view('pages.job_applicant.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
