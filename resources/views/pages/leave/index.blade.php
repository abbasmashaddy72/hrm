<x-app-layout>
    <x-table-card>
        <x-slot name="addbutton">
            <x-a-button href="{{ route('leave.create') }}">Add</x-a-button>
        </x-slot>
        <livewire:tables.leave-table>
    </x-table-card>
</x-app-layout>
