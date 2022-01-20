<x-app-layout>
    <x-table-card>
        <x-slot name="title">
            {{ __('Jobs') }}
        </x-slot>
        <x-slot name="addbutton">
            <x-add-button href="{{ route('jobs.create') }}">Add</x-add-button>
        </x-slot>
        <livewire:tables.jobs-table>
    </x-table-card>
</x-app-layout>
