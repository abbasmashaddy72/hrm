<x-app-layout>
    <div class="w-full pb-8">
        <div class="flex flex-col overflow-hidden bg-white rounded-lg shadow-lg ">
            <div class="flex-auto p-6">
                <livewire:datatable model="App\Models\Inventory" searchable="name, vendor_name" exportable />
            </div>
        </div>
    </div>
</x-app-layout>
