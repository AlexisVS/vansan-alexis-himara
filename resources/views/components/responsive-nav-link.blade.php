@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-himaraGold-400 text-base font-medium text-himaraGold-500 bg-gray-50 focus:outline-none focus:text-himaraGold-500 focus:bg-gray-100 focus:border-himaraGold-500 transition duration-150 ease-in-out'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-400 hover:text-himaraGold-500 hover:bg-gray-100 hover:border-himaraGold-500 focus:outline-none focus:text-himaraGold-600 focus:bg-himaraGold-600focus:border-himaraGold-600 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
