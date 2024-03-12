@props(['disabled' => false])

<input 
    {{ $disabled ? 'disabled' : '' }} 
    type="checkbox"
    {!! $attributes->merge(['class' => '']) !!}
>