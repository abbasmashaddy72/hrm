<x-app-layout>
    <x-table-card>
        <x-slot name="title">
            {{ __('Jobs') }}
        </x-slot>
        <x-slot name="addbutton">
            <x-a-button href="{{ route('jobs.create') }}">Add</x-a-button>
        </x-slot>
        <livewire:tables.jobs-table>
    </x-table-card>
</x-app-layout>
