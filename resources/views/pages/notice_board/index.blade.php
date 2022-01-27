<x-app-layout>
    <x-table-card>
        <x-slot name="title">
            {{ __('Notice Board') }}
        </x-slot>
        <x-slot name="addbutton">
            <x-add-button href="{{ route('notice_board.create') }}">Add</x-add-button>
        </x-slot>
        <livewire:tables.notice-board-table>
    </x-table-card>
</x-app-layout>
