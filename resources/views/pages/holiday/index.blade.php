<x-app-layout>
    <x-table-card>
        <x-slot name="title">
            {{ __('Holiday') }}
        </x-slot>
        <x-slot name="addbutton">
            <x-add-button href="{{ route('holiday.create') }}">Add</x-add-button>
        </x-slot>
        <livewire:tables.holiday-table>
    </x-table-card>
</x-app-layout>
