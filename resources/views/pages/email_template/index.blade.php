<x-app-layout>
    <x-table-card>
        <x-slot name="addbutton">
            <x-a-button href="{{ route('email_template.create') }}">Add</x-a-button>
        </x-slot>
        <livewire:tables.email-template-table>
    </x-table-card>
</x-app-layout>
