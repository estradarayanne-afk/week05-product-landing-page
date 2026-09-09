@props([
    'name' => 'Plan',
    'price' => '0',
    'description' => '',
    'features' => [],
    'featured' => false
])

<div class="relative flex h-full flex-col rounded-3xl border p-8 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl
    {{ $featured ? 'border-blue-600 bg-blue-600 text-white' : 'border-gray-100 bg-white' }}">

    @if($featured)
        <span class="absolute right-6 top-6 rounded-full bg-white/20 px-3 py-1 text-xs font-semibold">
            Most Popular
        </span>
    @endif

    <h3 class="text-xl font-bold">
        {{ $name }}
    </h3>

    <p class="mt-2 text-sm {{ $featured ? 'text-blue-100' : 'text-gray-500' }}">
        {{ $description }}
    </p>

    <div class="mt-6">
        <span class="text-4xl font-bold">
            ₱{{ $price }}
        </span>
        <span class="{{ $featured ? 'text-blue-100' : 'text-gray-500' }}">
            / load
        </span>
    </div>

    <ul class="mt-8 flex-1 space-y-4">
        @foreach($features as $feature)
            <li class="flex items-start gap-3 text-sm">
                <span class="mt-0.5">✓</span>
                <span>{{ $feature }}</span>
            </li>
        @endforeach
    </ul>

    <a
        href="#contact"
        class="mt-8 inline-flex items-center justify-center rounded-full px-6 py-3 text-sm font-semibold transition
        {{ $featured
            ? 'bg-white text-blue-700 hover:bg-blue-50'
            : 'bg-blue-600 text-white hover:bg-blue-700' }}"
    >
        Choose Plan
    </a>
</div>