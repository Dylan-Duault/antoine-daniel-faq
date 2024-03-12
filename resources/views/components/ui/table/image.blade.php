@props([
    'url' => '',
    'alt' => ''
])

<img
    src="{{ $url }}"
    alt="{{ $alt }}"
    class="w-12 h-12 rounded-lg bg-center"
/>