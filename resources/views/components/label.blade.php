@props(['value'])

<label {{ $attributes->merge(['class' => 'inline-block mb-2 text-gray-600']) }}>
    {{ $value ?? $slot }}
</label>
