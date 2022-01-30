<div class="w-full pb-8">
    <div class="flex flex-col overflow-hidden bg-white rounded-lg shadow-lg ">
        <div class="flex flex-wrap justify-between p-6 pb-0">
            <div class="header-title">
                <h4 class="mb-2 text-2xl font-medium card-title">
                    @if(substr(strstr(Route::currentRouteAction(), '@'), 1) == 'create' )
                    {{ __('Create') }} {{ $title }}
                @elseif(substr(strstr(Route::currentRouteAction(), '@'), 1) == 'edit' )
                    {{ __('Edit') }} {{ $title }}
                @else
                    {{ __('Show') }} {{ $title }}
                    @endif
                </h4>
            </div>
            <div class="card-action">
                <x-a-button href="{{ url()->previous() }}">Back</x-a-button>
            </div>
        </div>
        <div class="flex-auto p-6">
            <form id="form">
                @csrf
                {{ $slot }}
                @if(substr(strstr(Route::currentRouteAction(), '@'), 1) != 'show' )
                <div class="mt-3">
                    <button type="submit"
                        class="inline-block p-2 px-6 py-2 text-base font-normal text-center text-white transition-all duration-500 ease-in-out bg-blue-500 border border-blue-500 rounded shadow-md hover:bg-blue-600 hover:text-white hover:shadow-md ">
                        @if(substr(strstr(Route::currentRouteAction(), '@'), 1) == 'create' )
                        {{ __('Save') }}
                    @else
                        {{ __('Update') }}
                        @endif
                    </button>
                </div>
                @endif
            </form>
        </div>
    </div>
</div>
@if(substr(strstr(Route::currentRouteAction(), '@'), 1) == 'show' )
@push('scripts')
    <script>
        var form = document.getElementById("form");
        var allElements = form.elements;
        for (var i = 0, l = allElements.length; i < l; ++i) {
            // allElements[i].readOnly = true;
            allElements[i].disabled = true;
        }
    </script>
@endpush
@endif
