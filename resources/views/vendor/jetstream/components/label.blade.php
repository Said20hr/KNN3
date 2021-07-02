@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-semibold text-lg text-indigo-900 mb-3']) }}>
    {{ $value ?? $slot }}
</label>
