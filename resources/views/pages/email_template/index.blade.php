<x-app-layout>
    <x-table-card>
        <x-slot name="title">
            {{ __('Email Template') }}
        </x-slot>
        <x-slot name="addbutton">
            <x-add-button href="{{ route('email_template.create') }}">Add</x-add-button>
        </x-slot>
        <livewire:tables.email-template-table>
    </x-table-card>
</x-app-layout>
