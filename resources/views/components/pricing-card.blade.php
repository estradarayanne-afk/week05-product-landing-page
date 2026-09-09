@props([
    'name' => 'Plan',
    'price' => '0',
    'description' => '',
    'features' => [],
    'featured' => false
])

<div class="relative flex h-full flex-col rounded-3xl border p-8 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl
    {{ $featured
        ? 'border-slate-500 bg-slate-700 text-white'
        : 'border-slate-200 bg-white'
    }}">

    @if($featured)
        <span class="absolute right-6 top-6 rounded-full bg-white/15 px-3 py-1 text-xs font-semibold text-slate-100">
            Most Popular
        </span>
    @endif

    <h3 class="text-xl font-bold">
        {{ $name }}
    </h3>

    <p class="mt-2 text-sm {{ $featured ? 'text-slate-300' : 'text-slate-500' }}">
        {{ $description }}
    </p>

    <div class="mt-6">
        <span class="text-4xl font-bold">
            {{ $price }}
        </span>

        <span class="{{ $featured ? 'text-slate-300' : 'text-slate-500' }}">
            / load
        </span>
    </div>

    <ul class="mt-8 flex-1 space-y-4">

        @foreach($features as $feature)
            <li class="flex items-start gap-3 text-sm">

                <span class="mt-0.5 font-bold {{ $featured ? 'text-slate-200' : 'text-slate-500' }}">
                    ✓
                </span>

                <span>
                    {{ $feature }}
                </span>

            </li>
        @endforeach

    </ul>

    <a
        href="#contact"
        class="mt-8 inline-flex items-center justify-center rounded-full px-6 py-3 text-sm font-semibold transition
        {{ $featured
            ? 'bg-white text-slate-700 hover:bg-slate-100'
            : 'bg-slate-700 text-white hover:bg-slate-800'
        }}"
    >
        Choose Plan
    </a>

</div>

