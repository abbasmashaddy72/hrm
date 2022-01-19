<x-app-layout>
    <div class="w-full pb-8">
        <div class="flex flex-col overflow-hidden bg-white rounded-lg shadow-lg ">
            <div class="flex flex-wrap justify-between p-6 pb-0">
                <div class="header-title">
                    <h4 class="mb-2 text-2xl font-medium card-title">{{ __('Holiday') }}</h4>
                </div>
                <div class="card-action">
                    <a href="{{ route('holiday.create') }}"
                        class="inline-block p-2 px-6 py-2 text-base font-normal text-center text-white transition-all duration-500 ease-in-out bg-blue-500 border border-blue-500 rounded shadow-md hover:shadow-md hover:bg-blue-600 hover:text-white"
                        role="button">Add</a>
                </div>
            </div>
            <div class="flex-auto p-6">
                <livewire:tables.holiday-table>
            </div>
        </div>
    </div>
</x-app-layout>
