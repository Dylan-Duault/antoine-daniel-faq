@props(['disabled' => false])

<x-ui.input 
    :disabled="$disabled" 
    type="email"
    :attributes="$attributes"
/>