<x-app-layout>
    <x-table-card>
        <x-slot name="addbutton">
            <x-a-button href="{{ route('notice_board.create') }}">Add</x-a-button>
        </x-slot>
        <livewire:tables.notice-board-table>
    </x-table-card>
</x-app-layout>
