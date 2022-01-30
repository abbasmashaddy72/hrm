<x-app-layout>
    <x-table-card>
        <x-slot name="addbutton">
            <x-a-button href="{{ route('award.create') }}">Add</x-a-button>
        </x-slot>
        <livewire:tables.award-table>
    </x-table-card>
</x-app-layout>
