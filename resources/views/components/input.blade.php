@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-lg  border-gray-200  focus:ring focus:ring-sky-300 focus:ring-opacity-50 lg:text-sm text-xs hover:scale-x-105 focus:scale-105 duration-105 hover:ring-sky-300 hover:ring hover:duration-700 transisition text-sm']) !!}>
