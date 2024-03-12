@props(['disabled' => false])

<input 
    :disabled="$disabled" 
    type="radio"
    {!! $attributes->merge(['class' => '!w-4 !h-4 text-indigo-600 transition duration-150 ease-in-out border-gray-300 rounded-md focus:ring-indigo-500']) !!}
/>