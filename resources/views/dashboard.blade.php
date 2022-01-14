<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="w-full pb-8">
        <div class="flex flex-col overflow-hidden bg-white rounded-lg shadow-lg ">
            <div class="flex-auto p-6">
                You're logged in!
            </div>
        </div>
    </div>
</x-app-layout>
