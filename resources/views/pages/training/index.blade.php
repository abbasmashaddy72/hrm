<x-app-layout>
    <x-table-card>
        <x-slot name="title">
            {{ __('Training') }}
        </x-slot>
        <x-slot name="addbutton">
            <x-add-button href="{{ route('training.create') }}">Add</x-add-button>
        </x-slot>
        <livewire:tables.training-table>
    </x-table-card>
</x-app-layout>
