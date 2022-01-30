<x-app-layout>
    <x-table-card>
        <x-slot name="addbutton">
            <x-a-button href="{{ route('department.create') }}">Add</x-a-button>
        </x-slot>
        <livewire:tables.department-table>
    </x-table-card>
</x-app-layout>
