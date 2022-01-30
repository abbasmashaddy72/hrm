<x-app-layout>
    <x-table-card>
        <x-slot name="addbutton">
            <x-a-button href="{{ route('shift.create') }}">Add</x-a-button>
        </x-slot>
        <livewire:tables.shift-table>
    </x-table-card>
</x-app-layout>
