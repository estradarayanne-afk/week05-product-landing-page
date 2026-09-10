@props([
    'href' => '#',
    'variant' => 'primary'
])

@php
    $classes = match ($variant) {
        'secondary' => 'border border-slate-300 bg-white text-slate-700 hover:bg-slate-100',
        'outline' => 'border border-slate-300 bg-transparent text-slate-700 hover:bg-slate-100',
        default => 'bg-blue-600 text-white hover:bg-blue-700',
    };
@endphp

<a
    href="{{ $href }}"
    {{ $attributes->merge([
        'class' => "inline-flex items-center justify-center rounded-xl px-6 py-3 text-sm font-semibold shadow-sm transition duration-300 {$classes}"
    ]) }}
>
    {{ $slot }}
</a>