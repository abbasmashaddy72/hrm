<x-app-layout>
    <x-table-card>
        <x-slot name="addbutton">
            <x-a-button href="{{ route('job_applicant.create') }}">Add</x-a-button>
        </x-slot>
        <livewire:tables.job-applicant-table>
    </x-table-card>
</x-app-layout>
