@props([
    'name' => 'Customer Name',
    'position' => 'Customer',
    'photo' => 'https://i.pravatar.cc/100',
    'review' => 'Great service!'
])

<div class="rounded-2xl border border-gray-100 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg">

    <div class="flex items-center gap-4">
        <img
            src="{{ $photo }}"
            alt="{{ $name }}"
            class="h-12 w-12 rounded-full object-cover"
        >

        <div>
            <h3 class="font-semibold text-gray-900">
                {{ $name }}
            </h3>

            <p class="text-sm text-gray-500">
                {{ $position }}
            </p>
        </div>
    </div>

    <div class="mt-5 text-yellow-400">
        ★★★★★
    </div>

    <p class="mt-4 text-sm leading-6 text-gray-600">
        "{{ $review }}"
    </p>
</div>