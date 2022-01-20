<x-app-layout>
    <x-table-card>
        <x-slot name="title">
            {{ __('Employee Award') }}
        </x-slot>
        <x-slot name="addbutton">
            <x-add-button href="{{ route('employee_award.create') }}">Add</x-add-button>
        </x-slot>
        <livewire:tables.employee-award-table>
    </x-table-card>
</x-app-layout>
