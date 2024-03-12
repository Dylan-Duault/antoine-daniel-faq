@props(['disabled' => false])

<x-ui.input 
    :disabled="$disabled" 
    type="url"
    :attributes="$attributes"
/>