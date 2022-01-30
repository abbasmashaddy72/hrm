<x-app-layout>
    <x-table-card>
        <x-slot name="addbutton">
            <x-a-button href="{{ route('attendance.create') }}">Add</x-a-button>
        </x-slot>
        <livewire:tables.attendance-table>
    </x-table-card>
</x-app-layout>
