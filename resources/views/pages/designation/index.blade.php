<x-app-layout>
    <x-table-card>
        <x-slot name="title">
            {{ __('Designation') }}
        </x-slot>
        <x-slot name="addbutton">
            <x-add-button href="{{ route('designation.create') }}">Add</x-add-button>
        </x-slot>
        <livewire:tables.designation-table>
    </x-table-card>
</x-app-layout>
