@props(['disabled' => false])

<x-ui.input 
    :disabled="$disabled" 
    type="hidden"
    :attributes="$attributes"
/>