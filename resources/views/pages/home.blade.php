@extends('layouts.app')

@section('content')

    @include('components.navbar')

    <!-- Hero Section -->
    @include('components.hero')


    <!-- Services Section -->
    <section id="features" class="relative overflow-hidden bg-white px-6 py-24 lg:px-12">

        <div class="absolute -right-32 top-20 h-72 w-72 rounded-full bg-blue-100/60 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl">

            <div class="max-w-2xl">
                <div class="mb-4 inline-flex items-center gap-2 rounded-full bg-blue-50 px-4 py-2 text-sm font-semibold text-blue-600">
                    <span class="h-2 w-2 rounded-full bg-blue-600"></span>
                    Our Services
                </div>

                <h2 class="text-4xl font-black tracking-tight text-slate-900 sm:text-5xl">
                    Everything your clothes need.
                </h2>

                <p class="mt-5 text-lg leading-8 text-slate-600">
                    From everyday laundry to larger loads, Le Savon provides
                    reliable and convenient laundry care designed to give you
                    more time for the things that matter.
                </p>
            </div>


            <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

                <x-feature-card
                    icon="🧺"
                    title="Wash & Fold"
                    description="Clean, dry, and neatly folded clothes ready for you to take home."
                />

                <x-feature-card
                    icon="👕"
                    title="Regular Laundry"
                    description="A convenient option for your everyday clothes and regular laundry loads."
                />

                <x-feature-card
                    icon="🫧"
                    title="Wash & Dry"
                    description="Let our team handle the washing and drying while you focus on your day."
                />

                <x-feature-card
                    icon="🛏️"
                    title="Bedding & Blankets"
                    description="Give your larger laundry items a proper clean and fresh finish."
                />

                <x-feature-card
                    icon="👔"
                    title="Delicate Clothes"
                    description="Extra attention for selected garments that require gentle handling."
                />

                <x-feature-card
                    icon="📦"
                    title="Laundry Pickup"
                    description="A convenient pickup option for customers who prefer to stay at home."
                />

            </div>

        </div>
    </section>


    <!-- How It Works -->
    <section class="relative overflow-hidden bg-gradient-to-br from-blue-50 to-sky-100 px-6 py-24 lg:px-12">

        <div class="absolute -left-32 bottom-0 h-72 w-72 rounded-full bg-white/60 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl">

            <div class="mx-auto max-w-2xl text-center">

                <div class="mb-4 inline-flex items-center gap-2 rounded-full bg-white px-4 py-2 text-sm font-semibold text-blue-600 shadow-sm">
                    <span class="h-2 w-2 rounded-full bg-blue-600"></span>
                    How It Works
                </div>

                <h2 class="text-4xl font-black tracking-tight text-slate-900 sm:text-5xl">
                    Laundry made effortless.
                </h2>

                <p class="mt-5 text-lg leading-8 text-slate-600">
                    Three simple steps and you are on your way to cleaner,
                    fresher clothes.
                </p>

            </div>


            <div class="relative mt-16 grid gap-10 md:grid-cols-3">

                <!-- Step 1 -->
                <div class="relative rounded-3xl border border-white bg-white p-8 text-center shadow-lg shadow-blue-100/50 transition duration-300 hover:-translate-y-2 hover:shadow-xl">

                    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-blue-600 text-xl font-black text-white shadow-lg shadow-blue-600/25">
                        01
                    </div>

                    <div class="mt-6 text-4xl">
                        🧺
                    </div>

                    <h3 class="mt-5 text-xl font-bold text-slate-900">
                        Drop Off
                    </h3>

                    <p class="mt-3 leading-7 text-slate-600">
                        Bring your laundry to Le Savon and tell us what
                        service you need.
                    </p>

                </div>


                <!-- Step 2 -->
                <div class="relative rounded-3xl border border-white bg-white p-8 text-center shadow-lg shadow-blue-100/50 transition duration-300 hover:-translate-y-2 hover:shadow-xl">

                    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-blue-600 text-xl font-black text-white shadow-lg shadow-blue-600/25">
                        02
                    </div>

                    <div class="mt-6 text-4xl">
                        ✨
                    </div>

                    <h3 class="mt-5 text-xl font-bold text-slate-900">
                        We Wash
                    </h3>

                    <p class="mt-3 leading-7 text-slate-600">
                        Your clothes are carefully washed and dried according
                        to your selected service.
                    </p>

                </div>


                <!-- Step 3 -->
                <div class="relative rounded-3xl border border-white bg-white p-8 text-center shadow-lg shadow-blue-100/50 transition duration-300 hover:-translate-y-2 hover:shadow-xl">

                    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-blue-600 text-xl font-black text-white shadow-lg shadow-blue-600/25">
                        03
                    </div>

                    <div class="mt-6 text-4xl">
                        👕
                    </div>

                    <h3 class="mt-5 text-xl font-bold text-slate-900">
                        Ready to Go
                    </h3>

                    <p class="mt-3 leading-7 text-slate-600">
                        Pick up your clean, fresh, and neatly prepared laundry
                        when it is ready.
                    </p>

                </div>

            </div>

        </div>
    </section>


    <!-- Product / Service Showcase -->
    <section class="bg-white px-6 py-24 lg:px-12">

        <div class="mx-auto max-w-7xl">

            <div class="grid items-center gap-14 lg:grid-cols-2">

                <div>

                    <div class="mb-4 inline-flex items-center gap-2 rounded-full bg-blue-50 px-4 py-2 text-sm font-semibold text-blue-600">
                        <span class="h-2 w-2 rounded-full bg-blue-600"></span>
                        The Le Savon Difference
                    </div>

                    <h2 class="text-4xl font-black tracking-tight text-slate-900 sm:text-5xl">
                        Clean care for your everyday life.
                    </h2>

                    <p class="mt-5 text-lg leading-8 text-slate-600">
                        We believe laundry should be simple, convenient, and
                        stress-free. Le Savon is focused on giving your clothes
                        the care they deserve.
                    </p>


                    <div class="mt-8 space-y-5">

                        <div class="flex gap-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-100 font-bold text-blue-600">
                                ✓
                            </div>

                            <div>
                                <h3 class="font-bold text-slate-900">
                                    Fresh and Clean
                                </h3>

                                <p class="mt-1 text-sm leading-6 text-slate-600">
                                    Every load receives careful washing and drying.
                                </p>
                            </div>
                        </div>


                        <div class="flex gap-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-100 font-bold text-blue-600">
                                ✓
                            </div>

                            <div>
                                <h3 class="font-bold text-slate-900">
                                    Convenient Service
                                </h3>

                                <p class="mt-1 text-sm leading-6 text-slate-600">
                                    Spend less time worrying about laundry.
                                </p>
                            </div>
                        </div>


                        <div class="flex gap-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-100 font-bold text-blue-600">
                                ✓
                            </div>

                            <div>
                                <h3 class="font-bold text-slate-900">
                                    Care You Can Trust
                                </h3>

                                <p class="mt-1 text-sm leading-6 text-slate-600">
                                    We handle your garments with attention and care.
                                </p>
                            </div>
                        </div>

                    </div>

                </div>


                <!-- Showcase Card -->
                <div class="relative">

                    <div class="absolute -inset-6 rounded-[3rem] bg-blue-100/60 blur-3xl"></div>

                    <div class="relative overflow-hidden rounded-[2rem] bg-gradient-to-br from-blue-600 via-blue-500 to-cyan-400 p-8 shadow-2xl">

                        <div class="flex items-center justify-between">

                            <div>
                                <p class="text-sm font-medium text-blue-100">
                                    LE SAVON
                                </p>

                                <h3 class="mt-1 text-2xl font-black text-white">
                                    Laundry Care
                                </h3>
                            </div>

                            <div class="flex h-12 w-12 items-center justify-center rounded-full bg-white/20 text-2xl backdrop-blur">
                                🫧
                            </div>

                        </div>


                        <div class="mt-8 rounded-3xl bg-white p-6 shadow-xl">

                            <div class="flex items-center justify-between">

                                <div>
                                    <p class="text-sm text-slate-500">
                                        Current order
                                    </p>

                                    <h4 class="mt-1 text-xl font-bold text-slate-900">
                                        Wash & Fold
                                    </h4>
                                </div>

                                <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-bold text-green-700">
                                    Processing
                                </span>

                            </div>


                            <div class="mt-7">

                                <div class="flex justify-between text-sm">
                                    <span class="font-medium text-slate-600">
                                        Laundry progress
                                    </span>

                                    <span class="font-bold text-blue-600">
                                        80%
                                    </span>
                                </div>

                                <div class="mt-3 h-3 overflow-hidden rounded-full bg-slate-100">
                                    <div class="h-full w-4/5 rounded-full bg-blue-600"></div>
                                </div>

                            </div>


                            <div class="mt-7 grid grid-cols-2 gap-4">

                                <div class="rounded-2xl bg-blue-50 p-4">
                                    <p class="text-2xl">
                                        🧺
                                    </p>

                                    <p class="mt-2 text-sm font-bold text-slate-900">
                                        Washed
                                    </p>

                                    <p class="text-xs text-slate-500">
                                        Complete
                                    </p>
                                </div>

                                <div class="rounded-2xl bg-cyan-50 p-4">
                                    <p class="text-2xl">
                                        ✨
                                    </p>

                                    <p class="mt-2 text-sm font-bold text-slate-900">
                                        Fresh
                                    </p>

                                    <p class="text-xs text-slate-500">
                                        Almost ready
                                    </p>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>


    <!-- Pricing Section -->
    <section id="pricing" class="bg-slate-50 px-6 py-24 lg:px-12">

        <div class="mx-auto max-w-7xl">

            <div class="mx-auto max-w-2xl text-center">

                <div class="mb-4 inline-flex items-center gap-2 rounded-full bg-white px-4 py-2 text-sm font-semibold text-blue-600 shadow-sm">
                    <span class="h-2 w-2 rounded-full bg-blue-600"></span>
                    Simple Pricing
                </div>

                <h2 class="text-4xl font-black tracking-tight text-slate-900 sm:text-5xl">
                    Choose your laundry care.
                </h2>

                <p class="mt-5 text-lg leading-8 text-slate-600">
                    Straightforward options designed for different laundry needs.
                </p>

            </div>


            <div class="mt-14 grid gap-6 md:grid-cols-3">

                <x-pricing-card
                    name="Regular Wash"
                    price="₱80"
                    description="For everyday laundry loads."
                    :features="[
                        'Washing',
                        'Basic drying',
                        'Clean and ready for pickup'
                     ]"
                />

                <x-pricing-card
                    name="Wash & Fold"
                    price="₱120"
                    description="For customers who want extra convenience."
                    :features="[
                        'Washing',
                        'Drying',
                        'Neatly folded laundry'
                    ]"
                    :featured="true"
                />

                <x-pricing-card
                    name="Full Service"
                    price="₱180"
                    description="A convenient option for larger laundry needs."
                    :features="[
                        'Washing',
                        'Drying',
                        'Folding',
                        'Priority handling'
                    ]"
                />

            </div>

            <p class="mt-8 text-center text-sm text-slate-500">
                * Prices may vary depending on laundry type, weight, and additional services.
            </p>

        </div>
    </section>


    <!-- Testimonials -->
    <section id="testimonials" class="bg-white px-6 py-24 lg:px-12">

        <div class="mx-auto max-w-7xl">

            <div class="mx-auto max-w-2xl text-center">

                <div class="mb-4 inline-flex items-center gap-2 rounded-full bg-blue-50 px-4 py-2 text-sm font-semibold text-blue-600">
                    <span class="h-2 w-2 rounded-full bg-blue-600"></span>
                    Customer Reviews
                </div>

                <h2 class="text-4xl font-black tracking-tight text-slate-900 sm:text-5xl">
                    Loved by our customers.
                </h2>

                <p class="mt-5 text-lg leading-8 text-slate-600">
                    See why customers choose Le Savon for their everyday laundry needs.
                </p>

            </div>


            <div class="mt-14 grid gap-6 md:grid-cols-3">

                <x-testimonial-card
                    name="Maria Santos"
                    position="Customer"
                    photo="https://i.pravatar.cc/100?img=47"
                    review="The clothes came back clean and neatly folded. It saved me a lot of time during a busy week."
                />

                <x-testimonial-card
                    name="John Earl Reyes"
                    position="Regular Customer"
                    photo="https://i.pravatar.cc/100?img=12"
                    review="I usually bring my laundry here on weekends. The service is simple, convenient, and reliable."
                />

                <x-testimonial-card
                    name="Angela Cruz"
                    position="Customer"
                    photo="https://i.pravatar.cc/100?img=32"
                    review="I like that the service is straightforward and my clothes are handled with care."
                />

            </div>
    
        </div>
    </section>


    <!-- Call to Action -->
    <section id="contact" class="relative overflow-hidden px-6 py-24 lg:px-12">

        <div class="absolute inset-0 bg-gradient-to-br from-blue-600 via-blue-700 to-cyan-600"></div>

        <div class="absolute -right-20 -top-20 h-72 w-72 rounded-full bg-white/10 blur-3xl"></div>
        <div class="absolute -bottom-20 -left-20 h-72 w-72 rounded-full bg-cyan-300/20 blur-3xl"></div>

        <div class="relative mx-auto max-w-5xl text-center text-white">

            <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-white/15 text-3xl backdrop-blur">
                🫧
            </div>

            <h2 class="mt-7 text-4xl font-black tracking-tight sm:text-5xl">
                Laundry day just got easier.
            </h2>

            <p class="mx-auto mt-5 max-w-2xl text-lg leading-8 text-blue-100">
                Let Le Savon take care of the washing while you spend your
                time on the things that matter most.
            </p>

            <div class="mt-9 flex flex-col justify-center gap-4 sm:flex-row">

                <a
                    href="#pricing"
                    class="rounded-xl bg-white px-7 py-3.5 font-bold text-blue-700 shadow-lg transition duration-300 hover:-translate-y-1 hover:bg-blue-50"
                >
                    Book a Service
                </a>

                <a
                    href="#features"
                    class="rounded-xl border border-white/40 bg-white/10 px-7 py-3.5 font-bold text-white backdrop-blur transition duration-300 hover:-translate-y-1 hover:bg-white/20"
                >
                    Explore Services
                </a>

            </div>

        </div>

    </section>


    <!-- Footer -->
    @include('components.footer')

@endsection