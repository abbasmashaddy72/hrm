<x-app-layout>
    <x-table-card>
        <x-slot name="title">
            {{ __('Shift') }}
        </x-slot>
        <x-slot name="addbutton">
            <x-add-button href="{{ route('shift.create') }}">Add</x-add-button>
        </x-slot>
        <livewire:tables.shift-table>
    </x-table-card>
</x-app-layout>
