<x-app-layout>
    <x-table-card>
        <x-slot name="addbutton">
            <x-a-button href="{{ route('schedule.create') }}">Add</x-a-button>
        </x-slot>
        <livewire:tables.schedule-table>
    </x-table-card>
</x-app-layout>
