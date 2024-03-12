@props(['disabled' => false])

<x-ui.input 
    :disabled="$disabled" 
    type="time"
    :attributes="$attributes"
/>