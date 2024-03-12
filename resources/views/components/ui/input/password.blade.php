@props(['disabled' => false])

<x-ui.input 
    :disabled="$disabled" 
    type="password"
    :attributes="$attributes"
/>