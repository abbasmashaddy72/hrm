<x-app-layout>
    <x-table-card>
        <x-slot name="title">
            {{ __('Ticket') }}
        </x-slot>
        <x-slot name="addbutton">
            <x-add-button href="{{ route('ticket.create') }}">Add</x-add-button>
        </x-slot>
        <livewire:tables.ticket-table>
    </x-table-card>
</x-app-layout>
