@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'text-gray-300 rounded-md shadow-sm border-gray-300 focus:border-himaraGold-400 focus:ring focus:ring-himaraGold-400 focus:ring-opacity-50']) !!}>
