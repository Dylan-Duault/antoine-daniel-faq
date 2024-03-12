@props(['disabled' => false])

<x-ui.input 
    :disabled="$disabled" 
    type="date"
    :attributes="$attributes"
/>