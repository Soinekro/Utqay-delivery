@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-indigo-100 text-base font-medium text-white bg-indigo-500 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-100 transition'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-black hover:text-gray-400 hover:bg-gray-100 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
