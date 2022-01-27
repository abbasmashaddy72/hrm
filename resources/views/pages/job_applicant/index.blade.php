<x-app-layout>
    <x-table-card>
        <x-slot name="title">
            {{ __('Job Applicant') }}
        </x-slot>
        <x-slot name="addbutton">
            <x-add-button href="{{ route('job_applicant.create') }}">Add</x-add-button>
        </x-slot>
        <livewire:tables.job-applicant-table>
    </x-table-card>
</x-app-layout>