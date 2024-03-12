@props(['disabled' => false])

<textarea 
    {{ $disabled ? 'disabled' : '' }} 
    {!! $attributes->merge(['class' => 'inline-flex h-10 px-3 py-2 text-sm bg-white border rounded-md border-gray-300 ring-offset-background placeholder:text-gray-500 focus:border-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 disabled:cursor-not-allowed disabled:opacity-50']) !!}
></textarea>