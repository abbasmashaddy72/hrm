<x-app-layout>
    <x-table-card>
        <x-slot name="title">
            {{ __('Department') }}
        </x-slot>
        <x-slot name="addbutton">
            <x-add-button href="{{ route('department.create') }}">Add</x-add-button>
        </x-slot>
        <livewire:tables.department-table>
    </x-table-card>
</x-app-layout>
