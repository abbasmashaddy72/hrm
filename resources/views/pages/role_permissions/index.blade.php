<x-app-layout>
    <x-table-card>
        <x-slot name="addbutton">
            <x-a-button href="{{ route('role_permissions.create') }}">Add</x-a-button>
        </x-slot>
        <livewire:tables.role-permissions-table>
    </x-table-card>
</x-app-layout>
