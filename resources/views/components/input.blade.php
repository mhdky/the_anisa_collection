@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-yellow-primary focus:ring-yellow-primary rounded-md shadow-sm']) !!}>
