<x-app-layout>
    <x-table-card>
        <x-slot name="title">
            {{ __('Schedule') }}
        </x-slot>
        <x-slot name="addbutton">
            <x-add-button href="{{ route('schedule.create') }}">Add</x-add-button>
        </x-slot>
        <livewire:tables.schedule-table>
    </x-table-card>
</x-app-layout>
