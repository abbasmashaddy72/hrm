<x-form-custom>
    <form wire:submit.prevent="submit">
        @csrf
        <x-form.employee_award />
        <div class="mt-3">
            <x-submit-button>
                {{ __('Save') }}
            </x-submit-button>
        </div>
    </form>
</x-form-custom>
