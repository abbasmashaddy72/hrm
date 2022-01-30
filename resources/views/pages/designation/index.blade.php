<x-app-layout>
    <x-table-card>
        <x-slot name="addbutton">
            <x-a-button href="{{ route('designation.create') }}">Add</x-a-button>
        </x-slot>
        <livewire:tables.designation-table>
    </x-table-card>
</x-app-layout>
