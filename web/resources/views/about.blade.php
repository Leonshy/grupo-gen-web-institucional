@extends('shared.base', ['title' => 'About us'])



@section('styles')

@endsection

@section('content')
    @include('shared.partials.navbar')

    <section class="relative overflow-hidden bg-white lg:pt-50 md:pt-40 pt-30 lg:pb-24 pb-12">
        <!-- Background Decorations (The Blur Effects) -->
        <div class="pointer-events-none absolute inset-0 overflow-hidden">
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
        <div class="container-full relative">
            <!-- Header Title -->
            <h1 class="md:mb-7.5 mb-5 font-bold leading-tight tracking-tight text-default-900 lg:text-8xl md:text-6xl text-4xl lg:leading-tight z-10">
                Flexible spaces for productivity and connection
            </h1>
            <!-- Grid Content -->
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 items-start lg:gap-30 md:gap-7.5 gap-17.5">
                <!-- Left Side: Description & CTA -->
                <div class="lg:col-span-1">
                    <p class="lg:mb-17.5 md:mb-10 mb-2.5 text-lg leading-relaxed text-default-700 font-normal">
                        At CoOffice, we believe that great ideas come to life in inspiring environments. Since our
                        founding in 2020, we’ve been committed to creating flexible, dynamic workspaces that foster
                        innovation, collaboration, and productivity. Our spaces are designed to adapt to the unique
                        needs of entrepreneurs, freelancers, startups, and established businesses alike.
                    </p>
                    <a class="inline-block bg-primary-1 hover:bg-primary-2 px-5 py-3.5 text-lg font-medium tracking-wider text-black transition-transform"
                       href="{{ url('/contact') }}">
                        Book a tour
                    </a>
                </div>
                <!-- Right Side: Image -->
                <div class="lg:col-span-2">
                    <div class="relative w-full overflow-hidden lg:ms-20">
                        <img alt="Modern office interior" class="lg:w-255 h-full! object-cover" loading="eager"
                             src="/images/about/hero-image.avif"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-default-100 lg:py-32.5 md:py-22.5 py-15">
        <div class="container-full">
            <!-- Section Title -->
            <div class="lg:mb-17.5 mb-10 text-center">
                <h2 class="lg:text-[76px] md:text-5xl text-4xl font-medium tracking-tight text-default-900">
                    Innovative spaces for growth
                </h2>
            </div>
            <!-- Tabs Navigation (Preline Structure) -->
            <nav aria-label="Tabs" class="flex flex-wrap justify-center md:gap-7.5 gap-3.5 lg:mb-17.5 md:mb-7.5 mb-5"
                 data-hs-tabs-nav-buttons="true" role="tablist">
                <button aria-controls="tabs-panel-1"
                        class="hs-tab-active:bg-primary-2 hs-tab-active:text-black py-3.5 px-7.5 inline-flex items-center gap-x-2 bg-white text-default-900 font-medium text-lg transition-all active"
                        data-hs-tab="#tabs-panel-1" id="tabs-item-1" role="tab" type="button">
                    Our story
                </button>
                <button aria-controls="tabs-panel-2"
                        class="hs-tab-active:bg-primary-2 hs-tab-active:text-black py-3.5 px-7.5 inline-flex items-center gap-x-2 bg-white text-default-900 font-medium text-lg transition-all"
                        data-hs-tab="#tabs-panel-2" id="tabs-item-2" role="tab" type="button">
                    Our mission
                </button>
                <button aria-controls="tabs-panel-3"
                        class="hs-tab-active:bg-primary-2 hs-tab-active:text-black py-3.5 px-7.5 inline-flex items-center gap-x-2 bg-white text-default-900 font-medium text-lg transition-all"
                        data-hs-tab="#tabs-panel-3" id="tabs-item-3" role="tab" type="button">
                    Our values
                </button>
                <button aria-controls="tabs-panel-4"
                        class="hs-tab-active:bg-primary-2 hs-tab-active:text-black py-3.5 px-7.5 inline-flex items-center gap-x-2 bg-white text-default-900 font-medium text-lg transition-all"
                        data-hs-tab="#tabs-panel-4" id="tabs-item-4" role="tab" type="button">
                    Our vision
                </button>
            </nav>
            <!-- Tab Content -->
            <div class="mt-3">
                <!-- Panel 1: Our Story (Matching Screenshot) -->
                <div aria-labelledby="tabs-item-1" id="tabs-panel-1" role="tabpanel">
                    <div class="grid lg:grid-cols-3 grid-cols-2 lg:gap-25 md:gap-7.5 gap-5 items-start">
                        <!-- Left Image -->
                        <div class="lg:order-1 order-2">
                            <img alt="Our story office" class="w-full h-auto object-cover shadow-sm"
                                 src="/images/about/tab-image-01.avif"/>
                        </div>
                        <!-- Middle Content -->
                        <div class="lg:order-2 order-1 lg:col-span-1 col-span-2">
                            <h3 class="text-lg font-medium leading-snug lg:mb-10 mb-3.5">
                                We started with a vision to redefine the traditional workspace and create a thriving
                                environment for modern professionals.
                            </h3>
                            <div class="grid md:grid-cols-2 grid-cols-1 lg:gap-x-20 lg:gap-y-12.5 gap-3.5">
                                <!-- Item 1 -->
                                <div class="flex gap-2.5">
                                    <div class="mt-1.5 size-1.5 shrink-0 bg-primary-3"></div>
                                    <div>
                                        <h4 class="font-medium text-default-900 mb-1.25">Humble beginnings</h4>
                                        <p class="text-lg text-default-500 leading-relaxed">Started as a small coworking
                                            space, now a thriving community.</p>
                                    </div>
                                </div>
                                <!-- Item 2 -->
                                <div class="flex gap-2.5">
                                    <div class="mt-1.5 size-1.5 shrink-0 bg-primary-3"></div>
                                    <div>
                                        <h4 class="font-medium text-default-900 mb-1.25">Passion for growth</h4>
                                        <p class="text-lg text-default-500 leading-relaxed">Expanding to meet the needs
                                            of modern professionals.</p>
                                    </div>
                                </div>
                                <!-- Item 3 -->
                                <div class="flex gap-2.5">
                                    <div class="mt-1.5 size-1.5 shrink-0 bg-primary-3"></div>
                                    <div>
                                        <h4 class="font-medium text-default-900 mb-1.25">Shaping the future</h4>
                                        <p class="text-lg text-default-500 leading-relaxed">Leading the coworking
                                            movement with innovation.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Right Image -->
                        <div class="lg:order-3 order-3">
                            <img alt="Team meeting" class="w-full h-auto object-cover shadow-sm"
                                 src="/images/about/tab-image-02.avif"/>
                        </div>
                    </div>
                </div>
                <!-- Panel 2: Our Mission -->
                <div aria-labelledby="tabs-item-2" class="hidden" id="tabs-panel-2" role="tabpanel">
                    <div class="grid lg:grid-cols-3 grid-cols-2 lg:gap-25 md:gap-7.5 gap-5 items-start">
                        <!-- Left Image -->
                        <div class="lg:order-1 order-2">
                            <img alt="Our mission workspace" class="w-full h-auto object-cover shadow-sm"
                                 src="/images/about/tab-image-03.avif"/>
                        </div>
                        <!-- Middle Content -->
                        <div class="lg:order-2 order-1 lg:col-span-1 col-span-2">
                            <h3 class="text-lg font-medium leading-snug lg:mb-10 mb-3.5">
                                We create workspaces that empower professionals, foster innovation, and build
                                connections.
                            </h3>
                            <div class="grid md:grid-cols-2 grid-cols-1 lg:gap-x-20 lg:gap-y-12.5 gap-3.5">
                                <div class="flex gap-4">
                                    <div class="mt-1.5 size-1.5 shrink-0 bg-primary-3"></div>
                                    <div>
                                        <h4 class="font-medium text-default-900 mb-1.25">Empowering professionals</h4>
                                        <p class="text-lg text-default-500 leading-relaxed">Providing resources for
                                            growth and success.</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="mt-1.5 size-1.5 shrink-0 bg-primary-3"></div>
                                    <div>
                                        <h4 class="font-medium text-default-900 mb-1.25">Fostering collaboration</h4>
                                        <p class="text-lg text-default-500 leading-relaxed">Designing spaces that unite
                                            and inspire teamwork.</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="mt-1.5 size-1.5 shrink-0 bg-primary-3"></div>
                                    <div>
                                        <h4 class="font-medium text-default-900 mb-1.25">Driving innovation</h4>
                                        <p class="text-lg text-default-500 leading-relaxed">Inspiring forward-thinking
                                            solutions.</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="mt-1.5 size-1.5 shrink-0 bg-primary-3"></div>
                                    <div>
                                        <h4 class="font-medium text-default-900 mb-1.25">Building community</h4>
                                        <p class="text-lg text-default-500 leading-relaxed">Connecting like-minded
                                            individuals to grow together.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Right Image -->
                        <div class="lg:order-3 order-3">
                            <img alt="Community connection" class="w-full h-auto object-cover shadow-sm"
                                 src="/images/about/tab-image-04.avif"/>
                        </div>
                    </div>
                </div>
                <!-- Panel 3: Our Values -->
                <div aria-labelledby="tabs-item-3" class="hidden" id="tabs-panel-3" role="tabpanel">
                    <div class="grid lg:grid-cols-3 grid-cols-2 lg:gap-25 md:gap-7.5 gap-5 items-start">
                        <!-- Left Image -->
                        <div class="lg:order-1 order-2">
                            <img alt="Our core values" class="w-full h-auto object-cover shadow-sm"
                                 src="/images/about/tab-image-05.avif"/>
                        </div>
                        <!-- Middle Content -->
                        <div class="lg:order-2 order-1 lg:col-span-1 col-span-2">
                            <h3 class="text-lg font-medium leading-snug lg:mb-10 mb-3.5">
                                We are driven by a set of core values that guide everything we do.
                            </h3>
                            <div class="grid md:grid-cols-2 grid-cols-1 lg:gap-x-20 lg:gap-y-12.5 gap-3.5">
                                <div class="flex gap-4">
                                    <div class="mt-1.5 size-1.5 shrink-0 bg-primary-3"></div>
                                    <div>
                                        <h4 class="font-medium text-default-900 mb-1.25">Collaboration</h4>
                                        <p class="text-lg text-default-500 leading-relaxed">Modern, ergonomic furniture
                                            to ensure comfort and productivity.</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="mt-1.5 size-1.5 shrink-0 bg-primary-3"></div>
                                    <div>
                                        <h4 class="font-medium text-default-900 mb-1.25">Community</h4>
                                        <p class="text-lg text-default-500 leading-relaxed">We’re more than a coworking
                                            space; we’re a thriving network of professionals.</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="mt-1.5 size-1.5 shrink-0 bg-primary-3"></div>
                                    <div>
                                        <h4 class="font-medium text-default-900 mb-1.25">Flexibility</h4>
                                        <p class="text-lg text-default-500 leading-relaxed">With diverse workspace
                                            options, we offer solutions that adapt to your business’s changing
                                            needs.</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="mt-1.5 size-1.5 shrink-0 bg-primary-3"></div>
                                    <div>
                                        <h4 class="font-medium text-default-900 mb-1.25">Innovation</h4>
                                        <p class="text-lg text-default-500 leading-relaxed">Our spaces are designed to
                                            inspire creativity and forward thinking.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Right Image -->
                        <div class="lg:order-3 order-3">
                            <img alt="Innovation focus" class="w-full h-auto object-cover shadow-sm"
                                 src="/images/about/tab-image-06.avif"/>
                        </div>
                    </div>
                </div>
                <!-- Panel 4: Our Vision -->
                <div aria-labelledby="tabs-item-4" class="hidden" id="tabs-panel-4" role="tabpanel">
                    <div class="grid lg:grid-cols-3 grid-cols-2 lg:gap-25 md:gap-7.5 gap-5 items-start">
                        <!-- Left Image -->
                        <div class="lg:order-1 order-2">
                            <img alt="Our vision future" class="w-full h-auto object-cover shadow-sm"
                                 src="/images/about/tab-image-07.avif"/>
                        </div>
                        <!-- Middle Content -->
                        <div class="lg:col-span-1 col-span-2 lg:order-2 order-1">
                            <h3 class="text-lg font-medium leading-snug md:mb-10 mb-3.5">
                                We envision a world where workspaces inspire innovation, collaboration, and growth for
                                everyone.
                            </h3>
                            <div class="grid md:grid-cols-2 grid-cols-1 lg:gap-x-20 lg:gap-y-12.5 gap-3.5">
                                <div class="flex gap-4">
                                    <div class="mt-1.5 size-1.5 shrink-0 bg-primary-3"></div>
                                    <div>
                                        <h4 class="font-medium text-default-900 mb-1.25">Inspiring creativity</h4>
                                        <p class="text-lg text-default-500 leading-relaxed">Creating environments that
                                            spark new ideas and foster bold thinking.</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="mt-1.5 size-1.5 shrink-0 bg-primary-3"></div>
                                    <div>
                                        <h4 class="font-medium text-default-900 mb-1.25">Supporting growth</h4>
                                        <p class="text-lg text-default-500 leading-relaxed">Empowering individuals and
                                            businesses to reach their full potential.</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="mt-1.5 size-1.5 shrink-0 bg-primary-3"></div>
                                    <div>
                                        <h4 class="font-medium text-default-900 mb-1.25">Connecting communities</h4>
                                        <p class="text-lg text-default-500 leading-relaxed">Building a network of
                                            professionals who collaborate, share, and thrive together.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Right Image -->
                        <div class="lg:order-3 order-3">
                            <img alt="Connecting professional communities" class="w-full h-auto object-cover shadow-sm"
                                 src="/images/about/tab-image-08.avif"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="lg:py-32.5 md:py-22.5 py-15 bg-default-950">
        <div class="container-full relative">
            <!-- Section Title -->
            <div class="text-center lg:mb-16 md:mb-10 mb-2.5">
                <h2 class="text-4xl md:text-5xl lg:text-[76px] font-semibold text-white">
                    What we provide
                </h2>
            </div>
            <!-- Swiper -->
            <div class="swiper workspaceSwiper relative">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <a class="p-2.5 bg-linear-to-bl from-primary-1 via-white/90 to-white hover:from-primary-2 flex flex-col group overflow-hidden transition-all duration-500"
                           href="#">
                            <div class="bg-white p-5 text-center">
                                <h3 class="md:text-2xl text-lg font-bold text-black">Private office</h3>
                            </div>
                            <div class="relative aspect-4/5 overflow-hidden">
                                <img class="w-full h-full object-cover transition duration-500 group-hover:scale-108"
                                     src="/images/workspace/1.avif"/>
                            </div>
                        </a>
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <a class="p-2.5 bg-linear-to-bl from-primary-1 via-white/90 to-white hover:from-primary-2 flex flex-col group overflow-hidden transition-all duration-500"
                           href="#">
                            <div class="bg-white p-5 text-center">
                                <h3 class="md:text-2xl text-lg font-bold text-black">Dedicated desks</h3>
                            </div>
                            <div class="relative aspect-4/5 overflow-hidden">
                                <img class="w-full h-full object-cover transition duration-500 group-hover:scale-108"
                                     src="/images/workspace/2.avif"/>
                            </div>
                        </a>
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <a class="p-2.5 bg-linear-to-bl from-primary-1 via-white/90 to-white hover:from-primary-2 flex flex-col group overflow-hidden transition-all duration-500"
                           href="#">
                            <div class="bg-white p-5 text-center">
                                <h3 class="md:text-2xl text-lg font-bold text-black">Hot desks</h3>
                            </div>
                            <div class="relative aspect-4/5 overflow-hidden">
                                <img class="w-full h-full object-cover transition duration-500 group-hover:scale-108"
                                     src="/images/workspace/3.avif"/>
                            </div>
                        </a>
                    </div>
                    <!-- Slide 4 -->
                    <div class="swiper-slide">
                        <a class="p-2.5 bg-linear-to-bl from-primary-1 via-white/90 to-white hover:from-primary-2 flex flex-col group overflow-hidden transition-all duration-500"
                           href="#">
                            <div class="bg-white p-5 text-center">
                                <h3 class="md:text-2xl text-lg font-bold text-black">Meeting rooms</h3>
                            </div>
                            <div class="relative aspect-4/5 overflow-hidden">
                                <img class="w-full h-full object-cover transition duration-500 group-hover:scale-108"
                                     src="/images/workspace/4.avif"/>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="p-2.5 bg-linear-to-bl from-primary-1 via-white/90 to-white hover:from-primary-2 flex flex-col group overflow-hidden transition-all duration-500"
                           href="#">
                            <div class="bg-white p-5 text-center">
                                <h3 class="md:text-2xl text-lg font-bold text-black">Day pass</h3>
                            </div>
                            <div class="relative aspect-4/5 overflow-hidden">
                                <img class="w-full h-full object-cover transition duration-500 group-hover:scale-108"
                                     src="/images/workspace/5.avif"/>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="p-2.5 bg-linear-to-bl from-primary-1 via-white/90 to-white hover:from-primary-2 flex flex-col group overflow-hidden transition-all duration-500"
                           href="#">
                            <div class="bg-white p-5 text-center">
                                <h3 class="md:text-2xl text-lg font-bold text-black">Event pass</h3>
                            </div>
                            <div class="relative aspect-4/5 overflow-hidden">
                                <img class="w-full h-full object-cover transition duration-500 group-hover:scale-108"
                                     src="/images/workspace/6.avif"/>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Arrows -->
                <div class="swiper-button-prev size-12.5 bg-white flex justify-center items-center after:hidden!">
                    <i class="iconify lucide--arrow-left text-default-800 text-base"></i>
                </div>
                <div class="swiper-button-next size-12.5 bg-white flex justify-center items-center after:hidden!">
                    <i class="iconify lucide--arrow-right text-default-800 text-base"></i>
                </div>
            </div>
        </div>
    </section>
    <section class="lg:py-32.5 md:py-22.5 py-15">
        <div class="container-full">
            <!-- Section Title -->
            <div class="md:mb-17.5 mb-5 text-center">
                <h2 class="lg:text-[76px] md:text-5xl text-4xl font-medium tracking-tight text-black">
                    <span">Meet our team
                    </span"></h2>
            </div>
            <!-- On desktop (lg), we use a 5-column grid and top-padding on even items to create the zigzag effect -->
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 md:gap-12.5 gap-5">
                <!-- Member 1 -->
                <div class="lg:mt-0">
                    <a class="group block bg-default-100 hover:bg-linear-to-br hover:from-secondary-2 hover:to-default-100 p-2.5 text-center transition-all duration-300 hover:-trandefault-y-2"
                       href="#">
                        <div class="mb-3.5 overflow-hidden">
                            <img alt="Bryan Knight" class="w-full transition-all duration-500"
                                 src="/images/team/1.avif"/>
                        </div>
                        <h3 class="md:text-2xl text-xl font-medium text-black mb-1.25">Bryan Knight</h3>
                        <p class="text-lg text-default-500 font-normal">Founder &amp; CEO</p>
                    </a>
                </div>
                <!-- Member 2 (Lowered) -->
                <div class="lg:mt-20 md:mt-12.5">
                    <a class="group block bg-default-100 hover:bg-linear-to-br hover:from-secondary-2 hover:to-default-100 p-2.5 text-center transition-all duration-300 hover:-trandefault-y-2"
                       href="/team/john-smith">
                        <div class="mb-3.5 overflow-hidden">
                            <img alt="John Smith" class="w-full transition-all duration-500" src="/images/team/2.avif"/>
                        </div>
                        <h3 class="md:text-2xl text-xl font-medium text-black mb-1.25">John Smith</h3>
                        <p class="text-lg text-default-500 font-normal">Community Manager</p>
                    </a>
                </div>
                <!-- Member 3 -->
                <div class="lg:mt-0">
                    <a class="group block bg-default-100 hover:bg-linear-to-br hover:from-secondary-2 hover:to-default-100 p-2.5 text-center transition-all duration-300 hover:-trandefault-y-2"
                       href="/team/dennis-barrett">
                        <div class="mb-3.5 overflow-hidden">
                            <img alt="Dennis Barrett" class="w-full transition-all duration-500"
                                 src="/images/team/3.avif"/>
                        </div>
                        <h3 class="md:text-2xl text-xl font-medium text-black mb-1.25">Dennis Barrett</h3>
                        <p class="text-lg text-default-500 font-normal">Operations Manager</p>
                    </a>
                </div>
                <!-- Member 4 (Lowered) -->
                <div class="lg:mt-16 md:mt-12.5">
                    <a class="group block bg-default-100 hover:bg-linear-to-br hover:from-secondary-2 hover:to-default-100 p-2.5 text-center transition-all duration-300 hover:-trandefault-y-2"
                       href="/team/larry-lawson">
                        <div class="mb-3.5 overflow-hidden">
                            <img alt="Larry Lawson" class="w-full transition-all duration-500"
                                 src="/images/team/4.avif"/>
                        </div>
                        <h3 class="md:text-2xl text-xl font-medium text-black mb-1.25">Larry Lawson</h3>
                        <p class="text-lg text-default-500 font-normal">Marketing Specialist</p>
                    </a>
                </div>
                <!-- Member 5 -->
                <div class="lg:mt-0">
                    <a class="group block bg-default-100 hover:bg-linear-to-br hover:from-secondary-2 hover:to-default-100 p-2.5 text-center transition-all duration-300 hover:-trandefault-y-2"
                       href="/team/amanda-reed">
                        <div class="mb-3.5 overflow-hidden">
                            <img alt="Amanda Reed" class="w-full transition-all duration-500"
                                 src="/images/team/5.avif"/>
                        </div>
                        <h3 class="md:text-2xl text-xl font-medium text-black mb-1.25">Amanda Reed</h3>
                        <p class="text-lg text-default-500 font-normal">Events Coordinator</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="lg:pb-32.5 md:pb-22.5 pb-15">
        <!-- Container for centering content -->
        <div class="container text-center">
            <!-- Headline -->
            <h2 class="text-3xl md:text-5xl lg:text-[76px] font-semibold text-default-900 leading-tight tracking-tight lg:mb-6.5 mb-2.5">
                Explore fresh ideas, book your free coworking tour
            </h2>
            <!-- Description -->
            <p class="text-lg text-default-600 lg:mb-12.5 mb-5 font-medium lg:max-w-[60%] mx-auto leading-relaxed">
                Whether you're a freelancer, entrepreneur, or part of a growing team, our flexible workspaces are
                designed to inspire productivity and collaboration.
            </p>
            <!-- Button Group -->
            <div class="flex flex-row items-center justify-center md:gap-12.5 gap-5">
                <!-- Primary Action -->
                <a class="bg-primary-1 text-black font-medium px-5 py-3.5 hover:bg-primary-2 transition-all text-lg"
                   href="#">
                    See our space
                </a>
                <!-- Link Action -->
                <a class="group flex items-center gap-2 text-black hover:text-primary-3 font-medium text-lg underline hover:opacity-70 transition-all"
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
