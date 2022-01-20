<x-app-layout>
    <x-table-card>
        <x-slot name="title">
            {{ __('Employee Inventory') }}
        </x-slot>
        <x-slot name="addbutton">
            <x-add-button href="{{ route('employee_inventory.create') }}">Add</x-add-button>
        </x-slot>
        <livewire:tables.employee-inventory-table>
    </x-table-card>
</x-app-layout>
