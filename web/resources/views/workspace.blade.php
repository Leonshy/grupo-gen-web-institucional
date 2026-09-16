@extends('shared.base', ['title' => 'Workspace'])



@section('styles')

@endsection

@section('content')
    @include('shared.partials.navbar')

    <section class="relative overflow-hidden bg-white lg:pt-50 md:pt-40 pt-30 lg:pb-24 pb-12">
        <!-- Background Decorative Blurs -->
        <div class="pointer-events-none absolute inset-0 z-10 overflow-hidden">
            <div
                class="absolute -top-[10%] left-[-10%] lg:h-125 md:h-100 h-80 lg:w-125 w-80 rounded-full bg-primary-1 blur-[100px]"></div>
            <div class="absolute inset-y-0 left-[20%] lg:w-[20%] w-[30%] h-[130%] bg-white blur-[50px]"></div>
            <!-- Middle Yellow/Green Blur -->
            <div
                class="absolute -top-[20%] left-[30%] lg:h-150 md:h-100 h-80 lg:w-150 w-80 rounded-full bg-primary-2 blur-[120px]"></div>
            <div class="absolute inset-y-0 inset-x-0 mx-auto w-[12%] h-[130%] bg-white blur-[50px]"></div>
            <!-- Top Right Green Blur -->
            <div
                class="absolute -top-[10%] right-[20%] lg:h-100 md:h-100 h-80 lg:w-100 w-80 rounded-full bg-primary-1 blur-[100px]"></div>
            <div class="absolute inset-y-0 right-[20%] w-[12%] h-[130%] bg-white blur-[50px]"></div>
            <div
                class="absolute -top-[20%] end-[-20%] lg:h-150 md:h-100 h-80 lg:w-150 w-80 rounded-full bg-primary-2 blur-[120px]"></div>
        </div>
        <div class="container-full relative z-20">
            <div class="grid grid-cols-1 items-start md:gap-7.5 gap-5 lg:grid-cols-2 lg:gap-37.5">
                <!-- Left Content Column -->
                <div class="flex flex-col justify-between h-full">
                    <div>
                        <h1 class="mb-2.5 lg:text-[90px] md:text-7xl text-5xl font-bold leading-tight tracking-tight text-black">
                            Discover dynamic workspaces
                        </h1>
                        <p class="lg:mb-12.5 mb-5 text-lg leading-relaxed text-default-600 font-normal">
                            Unleash your potential in inspiring settings built for creativity and collaboration.
                            Our workspaces are equipped with modern amenities to support your professional
                            journey every step of the way.
                        </p>
                    </div>
                    <!-- Stats Grid -->
                    <div class="grid md:grid-cols-3 grid-cols-1 md:gap-8 gap-5 mt-auto">
                        <div>
                            <h2 class="lg:text-5xl md:text-4xl text-2xl font-medium text-black">50+</h2>
                            <p class="mt-1.5 text-lg text-default-500">Private offices</p>
                        </div>
                        <div>
                            <h2 class="lg:text-5xl md:text-4xl text-2xl font-medium text-black">24/7</h2>
                            <p class="mt-1.5 text-lg text-default-500">Access available</p>
                        </div>
                        <div>
                            <h2 class="lg:text-5xl md:text-4xl text-2xl font-medium text-black">750+</h2>
                            <p class="mt-1.5 text-lg text-default-500">Number of members</p>
                        </div>
                    </div>
                </div>
                <!-- Right Image Column -->
                <div>
                    <div class="relative overflow-hidden">
                        <img alt="Dynamic Workspace"
                             class="h-full w-full object-cover transition-transform duration-700" loading="eager"
                             src="/images/workspace/hero.avif"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-default-100 lg:py-32.5 md:py-22.5 py-15">
        <div class="container-full">
            <!-- Section Header -->
            <div class="lg:mb-17.5 md:mb-10 mb-2.5 text-center">
                <h2 class="lg:text-[76px] md:text-5xl text-4xl font-medium tracking-tight text-black">
                    Pick the perfect space
                </h2>
            </div>
            <!-- Workspace Grid -->
            <div class="grid grid-cols-1 lg:gap-12.5 md:gap-7.5 gap-3.5 md:grid-cols-2 lg:grid-cols-3"
                 data-toggle="gallery">
                <!-- Workspace Item 1 -->
                <a class="group block bg-white md:p-5 p-2.5 transition-shadow hover:bg-linear-to-br hover:from-secondary-2"
                   href="images/workspace/1.avif">
                    <div class="relative mb-3.5 overflow-hidden aspect-4/3">
                        <img alt="Private office"
                             class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-106"
                             src="/images/workspace/1.avif"/>
                    </div>
                    <h3 class="lg:text-2xl text-center text-lg font-bold text-black">Private office</h3>
                </a>
                <!-- Workspace Item 2 -->
                <a class="group block bg-white md:p-5 p-2.5 transition-shadow hover:bg-linear-to-br hover:from-secondary-2"
                   href="images/workspace/2.avif">
                    <div class="relative mb-3.5 overflow-hidden aspect-4/3">
                        <img alt="Dedicated desk"
                             class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-106"
                             src="/images/workspace/2.avif"/>
                    </div>
                    <h3 class="lg:text-2xl text-center text-lg font-bold text-black">Dedicated desk</h3>
                </a>
                <!-- Workspace Item 3 -->
                <a class="group block bg-white md:p-5 p-2.5 transition-shadow hover:bg-linear-to-br hover:from-secondary-2"
                   href="images/workspace/3.avif">
                    <div class="relative mb-3.5 overflow-hidden aspect-4/3">
                        <img alt="Hot desk"
                             class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-106"
                             src="/images/workspace/3.avif"/>
                    </div>
                    <h3 class="lg:text-2xl text-center text-lg font-bold text-black">Hot desk</h3>
                </a>
                <!-- Workspace Item 4 -->
                <a class="group block bg-white md:p-5 p-2.5 transition-shadow hover:bg-linear-to-br hover:from-secondary-2"
                   href="images/workspace/4.avif">
                    <div class="relative mb-3.5 overflow-hidden aspect-4/3">
                        <img alt="Meeting room"
                             class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-106"
                             src="/images/workspace/4.avif"/>
                    </div>
                    <h3 class="lg:text-2xl text-center text-lg font-bold text-black">Meeting room</h3>
                </a>
                <!-- Workspace Item 5 -->
                <a class="group block bg-white md:p-5 p-2.5 transition-shadow hover:bg-linear-to-br hover:from-secondary-2"
                   href="images/workspace/5.avif">
                    <div class="relative mb-3.5 overflow-hidden aspect-4/3">
                        <img alt="Day pass"
                             class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-106"
                             src="/images/workspace/5.avif"/>
                    </div>
                    <h3 class="lg:text-2xl text-center text-lg font-bold text-black">Day pass</h3>
                </a>
                <!-- Workspace Item 6 -->
                <a class="group block bg-white md:p-5 p-2.5 transition-shadow hover:bg-linear-to-br hover:from-secondary-2"
                   href="images/workspace/6.avif">
                    <div class="relative mb-3.5 overflow-hidden aspect-4/3">
                        <img alt="Event spaces"
                             class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-106"
                             src="/images/workspace/6.avif"/>
                    </div>
                    <h3 class="lg:text-2xl text-center text-lg font-bold text-black">Event spaces</h3>
                </a>
            </div>
        </div>
    </section>
    <section class="lg:py-32.5 md:py-22.5 py-15">
        <!-- Container for centering content -->
        <div class="container text-center">
            <!-- Headline -->
            <h2 class="text-3xl md:text-5xl lg:text-[76px] font-semibold text-default-900 leading-tight tracking-tight lg:mb-6.5 mb-2.5">
                Explore fresh ideas, book your free coworking tour
            </h2>
            <!-- Description -->
            <p class="text-lg text-default-600 lg:mb-12.5 mb-5 font-normal lg:max-w-[60%] mx-auto leading-relaxed">
                Whether you're a freelancer, entrepreneur, or part of a growing team, our flexible workspaces are
                designed to inspire productivity and collaboration.
            </p>
            <!-- Button Group -->
            <div class="flex flex-row items-center justify-center md:gap-12.5 gap-5">
                <!-- Primary Action -->
                <a class="bg-primary-1 text-black font-normal px-5 py-3.5 hover:bg-primary-2 transition-all text-lg"
                   href="#">
                    View pricing
                </a>
                <!-- Link Action -->
                <a class="group flex items-center gap-2 text-black hover:text-primary-3 font-normal text-lg underline hover:opacity-70 transition-all"
                   href="#">
                    Free tour
                </a>
            </div>
        </div>
    </section>

    @include('shared.partials.footer')
@endsection

@section('scripts')

@endsection
