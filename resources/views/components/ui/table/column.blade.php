@props([
    'forCrud' => false
])

@php
$allClasses = [
    'px-5 py-3 text-xs font-medium text-left uppercase' => true,
    'max-w-xs truncate' => $forCrud,
];

$classes = join(' ', array_keys(array_filter($allClasses)));
@endphp

<td {!! $attributes->merge(['class' => 'px-5 py-4 text-sm whitespace-nowrap']) !!}>
    {{ $slot }}
</td>