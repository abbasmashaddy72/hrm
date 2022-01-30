<x-app-layout>
    <x-table-card>
        <x-slot name="addbutton">
            <x-a-button href="{{ route('inventory.create') }}">Add</x-a-button>
        </x-slot>
        <livewire:tables.inventory-table>
    </x-table-card>
</x-app-layout>
