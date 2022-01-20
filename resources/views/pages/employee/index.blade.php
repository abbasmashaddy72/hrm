<x-app-layout>
    <x-table-card>
        <x-slot name="title">
            {{ __('Employee') }}
        </x-slot>
        <x-slot name="addbutton">
            <x-add-button href="{{ route('employee.create') }}">Add</x-add-button>
        </x-slot>
        <livewire:tables.employee-table>
    </x-table-card>
</x-app-layout>
