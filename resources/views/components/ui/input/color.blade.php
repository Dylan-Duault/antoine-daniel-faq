@props(['disabled' => false])

<x-ui.input 
    :disabled="$disabled" 
    type="color"
    :attributes="$attributes"
/>