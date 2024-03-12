@props(['disabled' => false])

<x-ui.input 
    :disabled="$disabled" 
    type="number"
    :attributes="$attributes"
/>