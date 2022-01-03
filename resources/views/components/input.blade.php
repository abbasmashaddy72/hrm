@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'block w-full px-4 py-2 text-base font-normal bg-white border rounded outline-none focus:border-blue-500 focus:shadow']) !!}>
