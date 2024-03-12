@props([
    'href' => false,
    'active' => false,
])

<li class="">
    <a 
        @if($href)
            wire:navigate
            href="{{ $href }}"
        @endif
        class="inline-flex items-center py-1 font-normal hover:text-neutral-900 focus:outline-none {{ $active ? 'active-breadcrumb' : '' }}"
    >
        {{ $slot }}
    </a>
</li>