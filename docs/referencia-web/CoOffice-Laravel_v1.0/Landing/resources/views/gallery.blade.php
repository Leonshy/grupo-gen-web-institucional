@extends('shared.base', ['title' => 'Gallery'])



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
            <h2 class="text-center lg:text-[80px] md:text-[54px] text-4xl font-bold text-default-900 mb-20 tracking-normal">
                Our gallery
            </h2>
            <!-- Masonry-style Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 md:gap-7.5 gap-3.5" data-toggle="gallery">
                <!-- Column 1, Row 1 -->
                <a class="overflow-hidden group" href="images/gallery/5.avif">
                    <img class="w-full h-full object-cover transition duration-700 group-hover:scale-105"
                         src="/images/gallery/5.avif"/>
                </a>
                <!-- Column 2, Tall Item (Spans 2 rows) -->
                <a class="row-span-2 overflow-hidden group" href="images/gallery/1.avif">
                    <img class="w-full h-full object-cover transition duration-700 group-hover:scale-105"
                         src="/images/gallery/1.avif"/>
                </a>
                <!-- Column 3, Row 1 -->
                <a class="overflow-hidden group" href="images/gallery/4.avif">
                    <img class="w-full h-full object-cover transition duration-700 group-hover:scale-105"
                         src="/images/gallery/4.avif"/>
                </a>
                <!-- Column 4, Row 1 -->
                <a class="overflow-hidden group" href="images/gallery/6.avif">
                    <img class="w-full h-full object-cover transition duration-700 group-hover:scale-105"
                         src="/images/gallery/6.avif"/>
                </a>
                <!-- Column 1, Row 2 -->
                <a class="overflow-hidden group" href="images/gallery/8.avif">
                    <img class="w-full h-full object-cover transition duration-700 group-hover:scale-105"
                         src="/images/gallery/8.avif"/>
                </a>
                <!-- Column 3, Row 2 -->
                <a class="overflow-hidden group" href="images/gallery/6.avif">
                    <img class="w-full h-full object-cover transition duration-700 group-hover:scale-105"
                         src="/images/gallery/6.avif"/>
                </a>
                <!-- Item 4 (TALL - Spans 2 Rows on the right) -->
                <a class="lg:row-span-2 lg:col-start-4 overflow-hidden group" href="images/gallery/2.avif">
                    <img class="w-full h-full object-cover transition duration-700 group-hover:scale-105"
                         src="/images/gallery/2.avif"/>
                </a>
                <!-- ROW 2 -->
                <!-- Item 5 (WIDE - Video Item spanning 2 columns) -->
                <div class="lg:col-span-2 relative overflow-hidden group cursor-pointer">
                    <img
                        class="w-full h-full object-cover transition duration-700 group-hover:scale-105 brightness-[0.8]"
                        src="/images/gallery/6.avif"/>
                    <!-- Play Button Overlay -->
                    <a class="absolute inset-0 flex items-center justify-center" data-toggle="video"
                       href="https://www.youtube.com/watch?v=HTFHoA12MJk&amp;t=16s">
                        <div
                            class="size-12.5 bg-primary-3 rounded-full flex items-center justify-center shadow-2xl transition-transform">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewbox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 5v14l11-7z"></path>
                            </svg>
                        </div>
                    </a>
                </div>
                <!-- Item 6 (Remaining Square) -->
                <a class="overflow-hidden group" href="images/gallery/9.avif">
                    <img class="w-full h-full object-cover transition duration-700 group-hover:scale-105"
                         src="/images/gallery/9.avif"/>
                </a>
            </div>
        </div>
    </section>

    @include('shared.partials.footer')
@endsection

@section('scripts')

@endsection
