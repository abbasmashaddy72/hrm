<x-app-layout>
    <x-table-card>
        <x-slot name="addbutton">
            <x-a-button href="{{ route('employee_training.create') }}">Add</x-a-button>
        </x-slot>
        <livewire:tables.employee-training-table>
    </x-table-card>
</x-app-layout>
