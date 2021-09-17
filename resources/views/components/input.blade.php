@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md shadow-sm border-gray-300 focus:border-isptec focus:ring focus:ring-isptec focus:ring-opacity-50']) !!}>
