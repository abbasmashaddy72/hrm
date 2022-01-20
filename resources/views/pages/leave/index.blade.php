<x-app-layout>
    <x-table-card>
        <x-slot name="title">
            {{ __('Leave') }}
        </x-slot>
        <x-slot name="addbutton">
            <x-add-button href="{{ route('leave.create') }}">Add</x-add-button>
        </x-slot>
        <livewire:tables.leave-table>
    </x-table-card>
</x-app-layout>
