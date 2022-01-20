<x-app-layout>
    <x-table-card>
        <x-slot name="title">
            {{ __('Employee Training') }}
        </x-slot>
        <x-slot name="addbutton">
            <x-add-button href="{{ route('employee_training.create') }}">Add</x-add-button>
        </x-slot>
        <livewire:tables.employee-training-table>
    </x-table-card>
</x-app-layout>
