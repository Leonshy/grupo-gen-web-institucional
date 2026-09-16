@extends('shared.base', ['title' => 'Blog'])



@section('styles')

@endsection

@section('content')
    @include('shared.partials.navbar')

    <section class="relative overflow-hidden bg-white lg:pt-46 md:pt-44 pt-30 lg:pb-34 md:pb-20 pb-15">
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
        <div class="container-full relative z-10">
            <!-- Section Heading -->
            <h2 class="text-center lg:text-[80px] md:text-[54px] text-4xl font-bold text-default-900 md:mb-20 mb-14 tracking-normal">
                Our blog
            </h2>
            <!-- Workspace Grid -->
            <div class="grid grid-cols-1 lg:gap-12.5 md:gap-7.5 gap-3.5 md:grid-cols-2 lg:grid-cols-3">
                <!-- Workspace Item 1 -->
                <a class="relative group block bg-default-100 p-2.5 transition-shadow hover:bg-linear-to-b hover:from-secondary-2"
                   href="{{ url('/blog-details') }}">
                    <div class="relative md:mb-5 mb-2.5 overflow-hidden aspect-4/3">
                        <img alt="Private office"
                             class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-106"
                             src="/images/event/blog-01.avif"/>
                        <span
                            class="absolute top-4 start-4 text-sm bg-primary-2 text-default-800 px-2 py-0.5">Events</span>
                    </div>
                    <div class="text-lg mb-1.25 text-default-600 font-normal">November 19, 2024</div>
                    <h3 class="lg:text-2xl text-lg font-semibold text-black md:mb-5">How to thrive in a hybrid work
                        environment</h3>
                </a>
                <!-- Workspace Item 2 -->
                <a class="relative group block bg-default-100 p-2.5 transition-shadow hover:bg-linear-to-b hover:from-secondary-2"
                   href="{{ url('/blog-details') }}">
                    <div class="relative md:mb-5 mb-2.5 overflow-hidden aspect-4/3">
                        <img alt="Private office"
                             class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-106"
                             src="/images/event/blog-02.avif"/>
                        <span
                            class="absolute top-4 start-4 text-sm bg-primary-2 text-default-800 px-2 py-0.5">Workshops</span>
                    </div>
                    <div class="text-lg mb-1.25 text-default-600 font-normal">November 19, 2024</div>
                    <h3 class="lg:text-2xl text-lg font-semibold text-black md:mb-5">Choosing the perfect workspace for
                        your team</h3>
                </a>
                <!-- Workspace Item 3 -->
                <a class="relative group block bg-default-100 p-2.5 transition-shadow hover:bg-linear-to-b hover:from-secondary-2"
                   href="{{ url('/blog-details') }}">
                    <div class="relative md:mb-5 mb-2.5 overflow-hidden aspect-4/3">
                        <img alt="Private office"
                             class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-106"
                             src="/images/event/blog-03.avif"/>
                        <span class="absolute top-4 start-4 text-sm bg-primary-2 text-default-800 px-2 py-0.5">Networking</span>
                    </div>
                    <div class="text-lg mb-1.25 text-default-600 font-normal">November 19, 2024</div>
                    <h3 class="lg:text-2xl text-lg font-semibold text-black md:mb-5">The power of networking in a
                        collaborative environment</h3>
                </a>
                <!-- Workspace Item 4 -->
                <a class="relative group block bg-default-100 p-2.5 transition-shadow hover:bg-linear-to-b hover:from-secondary-2"
                   href="{{ url('/blog-details') }}">
                    <div class="relative md:mb-5 mb-2.5 overflow-hidden aspect-4/3">
                        <img alt="Private office"
                             class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-106"
                             src="/images/event/blog-04.avif"/>
                        <span
                            class="absolute top-4 start-4 text-sm bg-primary-2 text-default-800 px-2 py-0.5">Startups</span>
                    </div>
                    <div class="text-lg mb-1.25 text-default-600 font-normal">November 19, 2024</div>
                    <h3 class="lg:text-2xl text-lg font-semibold text-black md:mb-5">The financial benefits of coworking
                        for startups</h3>
                </a>
                <!-- Workspace Item 5 -->
                <a class="relative group block bg-default-100 p-2.5 transition-shadow hover:bg-linear-to-b hover:from-secondary-2"
                   href="{{ url('/blog-details') }}">
                    <div class="relative md:mb-5 mb-2.5 overflow-hidden aspect-4/3">
                        <img alt="Private office"
                             class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-106"
                             src="/images/event/blog-05.avif"/>
                        <span class="absolute top-4 start-4 text-sm bg-primary-2 text-default-800 px-2 py-0.5">Team Dynamics</span>
                    </div>
                    <div class="text-lg mb-1.25 text-default-600 font-normal">November 19, 2024</div>
                    <h3 class="lg:text-2xl text-lg font-semibold text-black md:mb-5"> Building a productive and
                        collaborative work culture</h3>
                </a>
                <!-- Workspace Item 6 -->
                <a class="relative group block bg-default-100 p-2.5 transition-shadow hover:bg-linear-to-b hover:from-secondary-2"
                   href="{{ url('/blog-details') }}">
                    <div class="relative md:mb-5 mb-2.5 overflow-hidden aspect-4/3">
                        <img alt="Private office"
                             class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-106"
                             src="/images/event/blog-06.avif"/>
                        <span class="absolute top-4 start-4 text-sm bg-primary-2 text-default-800 px-2 py-0.5">Scalability</span>
                    </div>
                    <div class="text-lg mb-1.25 text-default-600 font-normal">November 19, 2024</div>
                    <h3 class="lg:text-2xl text-lg font-semibold text-black md:mb-5">The flexibility of coworking for
                        growing teams</h3>
                </a>
                <div class="lg:block hidden"></div>
                <div class="text-center mt-4">1/2</div>
                <div>
                    <button
                        class="flex items-center justify-center gap-1 bg-primary hover:bg-primary-2 text-lg transition-all w-full py-3.5 px-5">
                        Next
                        <i class="iconify lucide--chevron-right size-4 text-default-900"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    @include('shared.partials.footer')
@endsection

@section('scripts')

@endsection
