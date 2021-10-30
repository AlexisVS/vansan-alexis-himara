@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-himaraGold-600']) }}>
    {{ $value ?? $slot }}
</label>
