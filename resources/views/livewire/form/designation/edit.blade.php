<x-form-custom>
    <form wire:submit.prevent="submit">
        @csrf
        <x-form.designation />
        <div class="mt-3">
            <x-submit-button>
                {{ __('Update') }}
            </x-submit-button>
        </div>
    </form>
</x-form-custom>
