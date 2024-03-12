@props([
    'on',
    'timeout' => 2000,
    'closeable' => true,
])

<div x-data="{ shown: false, timeout: null }"
    x-init="@this.on('{{ $on }}', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, {{ $timeout }});  })"
    x-show.transition.out.opacity.duration.500ms="shown"
    x-transition:leave.opacity.duration.500ms
    x-transition:enter.opacity.duration.500ms
    style="display: none;"
    {{ $attributes->merge(['class' => 'fixed right-0 top-0 p-2']) }}>
    <div class="flex items-center bg-green-500 text-white rounded px-6 py-4">
        <div>
            {{ $slot->isEmpty() ? 'Saved.' : $slot }}
        </div>

        @if($closeable)
        <div @click="shown = false" class="ml-4 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>              
        </div>
        @endif
    </div>
</div>