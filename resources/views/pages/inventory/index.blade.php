<x-app-layout>
    <x-table-card>
        <x-slot name="title">
            {{ __('Inventory') }}
        </x-slot>
        <x-slot name="addbutton">
            <x-add-button href="{{ route('inventory.create') }}">Add</x-add-button>
        </x-slot>
        <livewire:tables.inventory-table>
    </x-table-card>
</x-app-layout>
