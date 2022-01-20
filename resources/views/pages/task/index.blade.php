<x-app-layout>
    <x-table-card>
        <x-slot name="title">
            {{ __('Task') }}
        </x-slot>
        <x-slot name="addbutton">
            <x-add-button href="{{ route('task.create') }}">Add</x-add-button>
        </x-slot>
        <livewire:tables.task-table>
    </x-table-card>
</x-app-layout>
