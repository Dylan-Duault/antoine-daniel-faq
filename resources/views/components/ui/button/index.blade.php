<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-4 py-2 text-sm font-medium tracking-wide text-white transition-colors duration-200 rounded-md bg-indigo-500 hover:bg-indigo-600 focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 focus:shadow-outline focus:outline-none']) }}>
    {{ $slot }}
</button>