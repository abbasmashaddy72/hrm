<x-app-layout>
    <x-table-card>
        <x-slot name="title">
            {{ __('Ticket') }}
        </x-slot>
        <x-slot name="addbutton">
            <x-a-button href="{{ route('ticket.create') }}">Add</x-a-button>
        </x-slot>
        <livewire:tables.ticket-table>
    </x-table-card>
</x-app-layout>
