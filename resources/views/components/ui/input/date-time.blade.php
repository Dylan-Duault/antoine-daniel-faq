@props(['disabled' => false])

<x-ui.input 
    :disabled="$disabled" 
    type="datetime-local"
    :attributes="$attributes"
/>