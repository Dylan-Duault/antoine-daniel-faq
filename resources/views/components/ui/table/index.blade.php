@props([
    'head',
    'body',
    'foot'
])

<div class="overflow-hidden border rounded-lg">
    <table {!! $attributes->merge(['class' => 'min-w-full divide-y divide-gray-200']) !!}>
        @if(isset($head))
        <thead class="bg-gray-50">
            <tr class="text-gray-500">
                {{ $head }}
            </tr>
        </thead>
        @endif

        @if(isset($body))
        <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700">
            {{ $body }}
        </tbody>
        @endif

        @if(isset($foot))
        <tfoot class="">
            {{ $foot }}
        </tfoot>
        @endif
    </table>
    
</div>