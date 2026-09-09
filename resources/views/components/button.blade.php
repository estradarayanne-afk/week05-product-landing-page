@props([
    'href' => '#',
    'variant' => 'primary'
])

@php
    $classes = match ($variant) {
        'secondary' => 'border border-blue-200 bg-white text-blue-700 hover:bg-blue-50',
        'outline' => 'border border-gray-300 bg-white text-gray-700 hover:bg-gray-50',
        default => 'bg-blue-600 text-white hover:bg-blue-700',
    };
@endphp

<a
    href="{{ $href }}"
    {{ $attributes->merge([
        'class' => "inline-flex items-center justify-center rounded-full px-6 py-3 text-sm font-semibold shadow-sm transition duration-300 {$classes}"
    ]) }}
>
    {{ $slot }}
</a>