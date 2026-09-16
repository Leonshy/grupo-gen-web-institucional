@extends('shared.base', ['title' => 'Events'])



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
            <!-- Section Title -->
            <h2 class="text-center lg:text-[80px] md:text-[54px] text-4xl font-bold text-black md:mb-24 mb-16 tracking-tight">
                Events at CoOffice
            </h2>
            <!-- Events Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 lg:gap-12.5 md:gap-7.5 gap-5">
                <!-- Event 01 -->
                <a class="group flex flex-col bg-default-100 hover:bg-linear-to-b hover:from-secondary-2 overflow-hidden transition-all duration-300"
                   href="#">
                    <div class="p-3.5 pb-0">
                        <div class="overflow-hidden">
                            <img alt="Networking"
                                 class="w-full object-cover transition-transform duration-700 group-hover:scale-106"
                                 src="/images/event/1.avif"/>
                        </div>
                    </div>
                    <div class="p-3.5">
                        <div class="flex flex-wrap gap-x-6 gap-y-2 mb-2">
                            <div class="flex items-center gap-2 text-sm font-medium text-default-800 tracking-wide">
                                <i class="iconify lucide--calendar text-default-400 text-xs"></i>
                                November 30, 2024
                            </div>
                            <div class="flex items-center gap-2 text-sm font-medium text-default-800 tracking-wide">
                                <i class="iconify lucide--clock text-default-400 text-xs"></i>
                                6:00 PM- 8:00 PM
                            </div>
                        </div>
                        <h3 class="md:text-2xl text-xl font-semibold text-black leading-tight">Start-up networking
                            mixer</h3>
                    </div>
                </a>
                <!-- Event 02 -->
                <a class="group flex flex-col bg-default-100 hover:bg-linear-to-b hover:from-secondary-2 overflow-hidden transition-all duration-300"
                   href="#">
                    <div class="p-3.5 pb-0">
                        <div class="overflow-hidden">
                            <img alt="Meet &amp; Greet"
                                 class="w-full object-cover transition-transform duration-700 group-hover:scale-106"
                                 src="/images/event/2.avif"/>
                        </div>
                    </div>
                    <div class="p-3.5">
                        <div class="flex flex-wrap gap-x-6 gap-y-2 mb-2">
                            <div class="flex items-center gap-2 text-sm font-medium text-default-800 tracking-wide">
                                <i class="iconify lucide--calendar text-default-400 text-xs"></i>
                                December 4, 2024
                            </div>
                            <div class="flex items-center gap-2 text-sm font-medium text-default-800 tracking-wide">
                                <i class="iconify lucide--clock text-default-400 text-xs"></i>
                                4:00 PM- 6:00 PM
                            </div>
                        </div>
                        <h3 class="md:text-2xl text-xl font-semibold text-black leading-tight">Freelancer meet &amp;
                            greet</h3>
                    </div>
                </a>
                <!-- Event 03 (Featured with Border) -->
                <a class="group flex flex-col bg-default-100 hover:bg-linear-to-b hover:from-secondary-2 overflow-hidden transition-all duration-300"
                   href="#">
                    <div class="p-3.5 pb-0">
                        <div class="overflow-hidden">
                            <img alt="Seminar"
                                 class="w-full object-cover transition-transform duration-700 group-hover:scale-106"
                                 src="/images/event/3.avif"/>
                        </div>
                    </div>
                    <div class="p-3.5">
                        <div class="flex flex-wrap gap-x-6 gap-y-2 mb-2">
                            <div class="flex items-center gap-2 text-sm font-medium text-default-800 tracking-wide">
                                <i class="iconify lucide--calendar text-default-400 text-xs"></i>
                                December 21, 2024
                            </div>
                            <div class="flex items-center gap-2 text-sm font-medium text-default-800 tracking-wide">
                                <i class="iconify lucide--clock text-default-400 text-xs"></i>
                                9:00 AM- 12:00 AM
                            </div>
                        </div>
                        <h3 class="md:text-2xl text-xl font-semibold text-black leading-tight">Leadership &amp; growth
                            seminar</h3>
                    </div>
                </a>
                <!-- Event 04 -->
                <a class="group flex flex-col bg-default-100 hover:bg-linear-to-b hover:from-secondary-2 overflow-hidden transition-all duration-300"
                   href="#">
                    <div class="p-3.5 pb-0">
                        <div class="overflow-hidden">
                            <img alt="Pitch Night"
                                 class="w-full object-cover transition-transform duration-700 group-hover:scale-106"
                                 src="/images/event/4.avif"/>
                        </div>
                    </div>
                    <div class="p-3.5">
                        <div class="flex flex-wrap gap-x-6 gap-y-2 mb-2">
                            <div class="flex items-center gap-2 text-sm font-medium text-default-800 tracking-wide">
                                <i class="iconify lucide--calendar text-default-400 text-xs"></i>
                                December 31, 2024
                            </div>
                            <div class="flex items-center gap-2 text-sm font-medium text-default-800 tracking-wide">
                                <i class="iconify lucide--clock text-default-400 text-xs"></i>
                                9:00 AM - 11:00 AM
                            </div>
                        </div>
                        <h3 class="md:text-2xl text-xl font-semibold text-black leading-tight">Startup pitch night</h3>
                    </div>
                </a>
                <!-- Event 05 -->
                <a class="group flex flex-col bg-default-100 hover:bg-linear-to-b hover:from-secondary-2 overflow-hidden transition-all duration-300"
                   href="#">
                    <div class="p-3.5 pb-0">
                        <div class="overflow-hidden">
                            <img alt="Workshop"
                                 class="w-full object-cover transition-transform duration-700 group-hover:scale-106"
                                 src="/images/event/5.avif"/>
                        </div>
                    </div>
                    <div class="p-3.5">
                        <div class="flex flex-wrap gap-x-6 gap-y-2 mb-2">
                            <div class="flex items-center gap-2 text-sm font-medium text-default-800 tracking-wide">
                                <i class="iconify lucide--calendar text-default-400 text-xs"></i>
                                January 3, 2025
                            </div>
                            <div class="flex items-center gap-2 text-sm font-medium text-default-800 tracking-wide">
                                <i class="iconify lucide--clock text-default-400 text-xs"></i>
                                07:00 AM - 10:00 AM
                            </div>
                        </div>
                        <h3 class="md:text-2xl text-xl font-semibold text-black leading-tight">Wellness and productivity
                            workshop</h3>
                    </div>
                </a>
                <!-- Event 06 -->
                <a class="group flex flex-col bg-default-100 hover:bg-linear-to-b hover:from-secondary-2 overflow-hidden transition-all duration-300"
                   href="#">
                    <div class="p-3.5 pb-0">
                        <div class="overflow-hidden">
                            <img alt="Branding"
                                 class="w-full object-cover transition-transform duration-700 group-hover:scale-106"
                                 src="/images/event/6.avif"/>
                        </div>
                    </div>
                    <div class="p-3.5">
                        <div class="flex flex-wrap gap-x-6 gap-y-2 mb-2">
                            <div class="flex items-center gap-2 text-sm font-medium text-default-800 tracking-wide">
                                <i class="iconify lucide--calendar text-default-400 text-xs"></i>
                                January 17, 2025
                            </div>
                            <div class="flex items-center gap-2 text-sm font-medium text-default-800 tracking-wide">
                                <i class="iconify lucide--clock text-default-400 text-xs"></i>
                                9:00 AM - 1:00 PM
                            </div>
                        </div>
                        <h3 class="md:text-2xl text-xl font-semibold text-black leading-tight">Creative branding
                            workshop</h3>
                    </div>
                </a>
            </div>
        </div>
    </section>

    @include('shared.partials.footer')
@endsection

@section('scripts')

@endsection
