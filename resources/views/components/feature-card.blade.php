@props([
    'icon' => '✨',
    'title' => 'Feature Title',
    'description' => 'Feature description goes here.'
])

<div class="group rounded-2xl border border-gray-100 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg">
    <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-2xl">
        {{ $icon }}
    </div>

    <h3 class="mb-2 text-lg font-semibold text-gray-900">
        {{ $title }}
    </h3>

    <p class="text-sm leading-6 text-gray-600">
        {{ $description }}
    </p>
</div>