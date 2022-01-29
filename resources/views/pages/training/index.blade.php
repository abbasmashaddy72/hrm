<x-app-layout>
    <x-table-card>
        <x-slot name="title">
            {{ __('Training') }}
        </x-slot>
        <x-slot name="addbutton">
            <x-a-button href="{{ route('training.create') }}">Add</x-a-button>
        </x-slot>
        <livewire:tables.training-table>
    </x-table-card>
</x-app-layout>
