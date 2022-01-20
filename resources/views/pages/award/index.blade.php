<x-app-layout>
    <x-table-card>
        <x-slot name="title">
            {{ __('Award') }}
        </x-slot>
        <x-slot name="addbutton">
            <x-add-button href="{{ route('award.create') }}">Add</x-add-button>
        </x-slot>
        <livewire:tables.award-table>
    </x-table-card>
</x-app-layout>
