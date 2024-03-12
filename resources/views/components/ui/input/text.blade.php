@props(['disabled' => false])

<x-ui.input 
    :disabled="$disabled" 
    type="text"
    :attributes="$attributes"
/>