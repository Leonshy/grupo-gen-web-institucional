@extends('shared.base', ['title' => 'Home'])

@section('styles')

@endsection

@section('content')
    @include('shared.partials.navbar')

    <!-- Hero Section -->
    <section class="overflow-hidden relative w-full lg:pt-49 md:pt-40 pt-30">
        <div class="container-full relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 items-start xl:gap-50 md:gap-12 gap-3.5 lg:mb-20 mb-12.5">
                <!-- Left Side: Title -->
                <div>
                    <h1 class="font-bold lg:text-[90px] md:text-6xl text-[40px] lg:leading-26 tracking-normal text-default-900">
                        Find your ideal workspace
                    </h1>
                </div>
                <!-- Right Side: Description & Info -->
                <div class="flex flex-col">
                    <p class="text-default-800 text-lg leading-6 w-full! mb-5">
                        Our flexible workspace solutions are tailored to meet the needs of freelancers, startups, and
                        growing teams, offering a variety of spaces that encourage creativity, productivity, and
                        collaboration.
                    </p>
                    <div>
                        <a class="inline-block bg-primary-1 hover:bg-primary-2 text-black font-medium py-3.75 px-5 transition-all text-lg"
                           href="#">
                            Book a tour
                        </a>
                    </div>
                    <!-- Contact Info Grid -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-8 gap-5 lg:mt-25 mt-5">
                        <div>
                            <h2 class="text-default-600 font-normal text-lg tracking-normal mb-1.25">Call us at</h2>
                            <a class="text-lg font-normal text-default-900 hover:text-primary-3 transition-colors"
                               href="tel:+123-456-7890">
                                +123-456-7890
                            </a>
                        </div>
                        <div>
                            <h2 class="text-default-600 font-normal text-lg tracking-normal mb-1.25">Address</h2>
                            <p class="text-default-900 font-normal leading-relaxed text-nowrap">
                                Chicago HQ Estica Cop. <br/> Macomb, MI 48042
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hero Image -->
            <div class="overflow-hidden group">
                <img alt="Modern office interior"
                     class="w-full h-auto object-cover transition-all duration-1000 scale-100 group-hover:scale-105"
                     src="/images/hero-image.avif"/>
            </div>
        </div>
        <!-- Top Blur Decoration -->
        <div
            class="absolute inset-x-0 top-0 flex opacity-60 z-0 pointer-events-none h-107.5 [transform:rotateX(-180deg)]">
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
    </section>
    <section class="lg:py-32.5 md:py-22.5 py-15">
        <div class="container-full relative z-10">
            <!-- Main Heading -->
            <h2 class="text-4xl md:text-5xl lg:text-[76px] font-semibold text-default-900 lg:mb-20 md:mb-7.5 mb-2.5 tracking-tight">
                Personalized offices for maximum flexibility
            </h2>
            <!-- Main Grid Content -->
            <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-20 gap-7.5 items-start">
                <div class="md:col-span-2">
                    <div class="md:flex items-start lg:gap-20 gap-7.5">
                        <!-- Left Column: Description, Button, and Counters -->
                        <div class="flex flex-col h-full justify-between lg:gap-32 gap-5 md:w-110 mb-10">
                            <div>
                                <p class="text-default-600 leading-relaxed lg:mb-7.5 mb-2.5 font-normal text-lg">
                                    We are dedicated to creating an inspiring and productive environment for
                                    professionals of all kinds. Founded with the vision to revolutionize the way people
                                    work, we offer flexible and dynamic workspaces designed to meet the evolving needs
                                    of modern businesses.
                                </p>
                                <a class="inline-block bg-primary-1 hover:bg-primary-2 text-black font-medium px-5 py-3.75 transition-all lg:mb-16"
                                   href="#">
                                    More about us
                                </a>
                            </div>
                            <!-- Counters -->
                            <div class="grid grid-cols-2 gap-12.5 mt-auto">
                                <div>
                                    <h3 class="lg:text-5xl text-3xl font-semibold mb-2.5">50+</h3>
                                    <div class="text-default-500 text-lg font-normal">Desk options</div>
                                </div>
                                <div>
                                    <h3 class="lg:text-5xl text-3xl font-semibold mb-2.5">750+</h3>
                                    <div class="text-default-500 text-lg font-normal">Number of members</div>
                                </div>
                            </div>
                        </div>
                        <!-- Middle Column: Image -->
                        <div class="lg:w-145.5">
                            <img alt="Team working in office" class="object-cover" src="/images/about-image.avif"/>
                        </div>
                    </div>
                </div>
                <!-- Right Column: Features List -->
                <div class="lg:space-y-7.5 md:space-y-5 space-y-2.5">
                    <h4 class="text-2xl font-medium text-default-900">What we offer:</h4>
                    <div class="lg:space-y-10 md:space-y-7.5 space-y-5">
                        <!-- Item 1 -->
                        <div class="flex gap-2.5">
                            <div class="size-1.5 bg-primary-3 mt-2 shrink-0"></div>
                            <div>
                                <h5 class="font-medium text-lg text-default-900 mb-1.25">Diverse workspace options</h5>
                                <p class="text-default-500 leading-relaxed font-normal">
                                    From private offices and dedicated desks to hot desks and meeting rooms.
                                </p>
                            </div>
                        </div>
                        <!-- Item 2 -->
                        <div class="flex gap-2.5">
                            <div class="size-1.5 bg-primary-3 mt-2 shrink-0"></div>
                            <div>
                                <h5 class="font-medium text-lg text-default-900 mb-1.25">Vibrant community</h5>
                                <p class="text-default-500 leading-relaxed font-normal">
                                    Join a network of like-minded professionals and entrepreneurs.
                                </p>
                            </div>
                        </div>
                        <!-- Item 3 -->
                        <div class="flex gap-2.5">
                            <div class="size-1.5 bg-primary-3 mt-2 shrink-0"></div>
                            <div>
                                <h5 class="font-medium text-lg text-default-900 mb-1.25">State-of-the-art amenities</h5>
                                <p class="text-default-500 leading-relaxed font-normal">
                                    Enjoy high-speed internet, modern furnishings, and conference facilities.
                                </p>
                            </div>
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
                    Select the ideal workspace
                </h2>
            </div>
            <!-- Swiper -->
            <div class="swiper workspaceSwiper relative overflow-visible!">
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
                <div
                    class="swiper-button-prev size-12.5 bg-white flex justify-center items-center -translate-x-1/2 after:hidden!">
                    <i class="iconify lucide--arrow-left text-default-800 size-6"></i>
                </div>
                <div
                    class="swiper-button-next size-12.5 bg-white flex justify-center items-center translate-x-1/2 after:hidden!">
                    <i class="iconify lucide--arrow-right text-default-800 size-6"></i>
                </div>
            </div>
        </div>
    </section>
    <section class="lg:py-32.5 md:py-22.5 py-15">
        <div class="container-full">
            <!-- Section Header -->
            <div class="text-center lg:mb-17.5 md:mb-10 mb-5">
                <h2 class="text-4xl md:text-5xl lg:text-[76px] font-semibold text-default-900 tracking-normal">
                    Services &amp; amenities
                </h2>
            </div>
            <!-- Main Content Split: Left (Grid) | Right (Image) -->
            <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-25 md:gap-7.5 gap-3.5 Workspace plan items-center">
                <!-- Left: Amenity Icons Grid -->
                <div class="grid grid-cols-2 md:grid-cols-3">
                    <!-- Amenity Item 1 -->
                    <div class="flex flex-col items-center text-center group lg:p-10 p-3">
                        <img alt="High-speed internet"
                             class="size-7.5 md:mb-5 mb-2.5 transition-transform group-hover:scale-110"
                             src="/images/icons/5.svg"/>
                        <span class="text-default-600 text-base">High-speed internet</span>
                    </div>
                    <!-- Amenity Item 2 -->
                    <div class="flex flex-col items-center text-center group lg:p-10 p-3">
                        <img alt="Phone booths"
                             class="size-7.5 md:mb-5 mb-2.5 transition-transform group-hover:scale-110"
                             src="/images/icons/10.svg"/>
                        <span class="text-default-600 text-base">Phone booths</span>
                    </div>
                    <!-- Amenity Item 3 -->
                    <div class="flex flex-col items-center text-center group lg:p-10 p-3">
                        <img alt="Ergonomics furniture"
                             class="size-7.5 md:mb-5 mb-2.5 transition-transform group-hover:scale-110"
                             src="/images/icons/7.svg"/>
                        <span class="text-default-600 text-base">Ergonomics furniture</span>
                    </div>
                    <!-- Amenity Item 4 -->
                    <div class="flex flex-col items-center text-center group lg:p-10 p-3">
                        <img alt="Kitchen facilities"
                             class="size-7.5 md:mb-5 mb-2.5 transition-transform group-hover:scale-110"
                             src="/images/icons/11.svg"/>
                        <span class="text-default-600 text-base">Kitchen facilities</span>
                    </div>
                    <!-- Amenity Item 5 -->
                    <div class="flex flex-col items-center text-center group lg:p-10 p-3">
                        <img alt="Lockers" class="size-7.5 md:mb-5 mb-2.5 transition-transform group-hover:scale-110"
                             src="/images/icons/9.svg"/>
                        <span class="text-default-600 text-base">Lockers</span>
                    </div>
                    <!-- Amenity Item 6 -->
                    <div class="flex flex-col items-center text-center group lg:p-10 p-3">
                        <img alt="Printing &amp; scanning"
                             class="size-7.5 md:mb-5 mb-2.5 transition-transform group-hover:scale-110"
                             src="/images/icons/1.svg"/>
                        <span class="text-default-600 text-base">Printing &amp; scanning</span>
                    </div>
                    <!-- Amenity Item 7 -->
                    <div class="flex flex-col items-center text-center group lg:p-10 p-3">
                        <img alt="EV charging"
                             class="size-7.5 md:mb-5 mb-2.5 transition-transform group-hover:scale-110"
                             src="/images/icons/12.svg"/>
                        <span class="text-default-600 text-base">EV charging</span>
                    </div>
                    <!-- Amenity Item 8 -->
                    <div class="flex flex-col items-center text-center group lg:p-10 p-3">
                        <img alt="Transportation"
                             class="size-7.5 md:mb-5 mb-2.5 transition-transform group-hover:scale-110"
                             src="/images/icons/3.svg"/>
                        <span class="text-default-600 text-base">Transportation</span>
                    </div>
                    <!-- Amenity Item 9 -->
                    <div class="flex flex-col items-center text-center group lg:p-10 p-3">
                        <img alt="24/7 access"
                             class="size-7.5 md:mb-5 mb-2.5 transition-transform group-hover:scale-110"
                             src="/images/icons/2.svg"/>
                        <span class="text-default-600 text-base">24/7 access</span>
                    </div>
                    <!-- Amenity Item 10 -->
                    <div class="flex flex-col items-center text-center group lg:p-10 p-3">
                        <img alt="Parking" class="size-7.5 md:mb-5 mb-2.5 transition-transform group-hover:scale-110"
                             src="/images/icons/4.svg"/>
                        <span class="text-default-600 text-base">Parking</span>
                    </div>
                    <!-- Amenity Item 11 -->
                    <div class="flex flex-col items-center text-center group lg:p-10 p-3">
                        <img alt="Snack bar" class="size-7.5 md:mb-5 mb-2.5 transition-transform group-hover:scale-110"
                             src="/images/icons/8.svg"/>
                        <span class="text-default-600 text-base">Snack bar</span>
                    </div>
                    <!-- Amenity Item 12 -->
                    <div class="flex flex-col items-center text-center group lg:p-10 p-3">
                        <img alt="Wellness rooms"
                             class="size-7.5 md:mb-5 mb-2.5 transition-transform group-hover:scale-110"
                             src="/images/icons/6.svg"/>
                        <span class="text-default-600 text-base">Wellness rooms</span>
                    </div>
                </div>
                <!-- Right: Large Image -->
                <div class="w-full h-full min-h-100">
                    <img alt="Modern office lounge area" class="w-full h-full object-cover shadow-sm"
                         src="/images/about-image-2.avif"/>
                </div>
            </div>
        </div>
    </section>
    <section class="lg:pb-32.5 pb-22.5">
        <div class="container-full">
            <!-- Section Heading -->
            <h2 class="text-4xl md:text-5xl lg:text-[76px] font-bold text-default-900 lg:mb-17.5 md:mb-10 mb-5 tracking-normal">
                Workspace plan
            </h2>
            <!-- Pricing Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Card 1: Day pass -->
                <div class="p-2.5 bg-default-100/80">
                    <div class="flex flex-col">
                        <div class="bg-white lg:p-6 p-3.5 lg:mb-10 mb-3.5">
                            <h3 class="lg:text-2xl md:text-xl text-lg font-semibold text-default-900">Day pass</h3>
                        </div>
                        <div class="bg-default-100/70 lg:mx-6.5 mx-3.5 mb-6.5 grow flex flex-col">
                            <div class="lg:mb-7.5 md:mb-5 mb-2.5">
                                <span class="lg:text-5xl text-2xl font-semibold text-default-900">$25</span>
                                <span class="text-xl font-medium text-default-900">/day</span>
                            </div>
                            <div class="mb-5 text-default-600 leading-relaxed text-lg">
                                <span class="font-bold text-default-900">Perfect for:</span>
                                Freelancers, remote workers, or travelers who need a workspace for the day.
                            </div>
                            <div class="grow">
                                <h5 class="font-bold text-default-900 mb-6">What’s included:</h5>
                                <ul class="space-y-3.75 lg:ps-12.5 ps-2.5">
                                    <li class="flex items-start gap-3 text-default-600">
                                        <span class="size-1.5 bg-primary-3 mt-2.5 shrink-0"></span>
                                        <span class="font-normal">Access to hot desks in common areas</span>
                                    </li>
                                    <li class="flex items-start gap-3 text-default-600">
                                        <span class="size-1.5 bg-primary-3 mt-2.5 shrink-0"></span>
                                        <span class="font-normal">High-speed Wi-Fi for seamless work</span>
                                    </li>
                                    <li class="flex items-start gap-3 text-default-600">
                                        <span class="size-1.5 bg-primary-3 mt-2.5 shrink-0"></span>
                                        <span class="font-normal">Complimentary coffee and tea</span>
                                    </li>
                                    <li class="flex items-start gap-3 text-default-600">
                                        <span class="size-1.5 bg-primary-3 mt-2.5 shrink-0"></span>
                                        <span
                                            class="font-normal">Access to lounge areas for informal meetings or breaks</span>
                                    </li>
                                    <li class="flex items-start gap-3 text-default-600">
                                        <span class="size-1.5 bg-primary-3 mt-2.5 shrink-0"></span>
                                        <span class="font-normal">9 AM to 6 PM access</span>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <a class="lg:ms-12.5 ms-2.5 md:mt-12 mt-5 inline-block bg-primary-1 hover:bg-primary-2 text-black font-medium px-5 py-3.5 transition-all text-center"
                                   href="#">
                                    Book now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 2: Hot desk -->
                <div class="p-2.5 bg-default-100/80">
                    <div class="flex flex-col">
                        <div class="bg-white lg:p-6 p-3.5 lg:mb-10 mb-3.5">
                            <h3 class="lg:text-2xl md:text-xl text-lg font-semibold text-default-900">Hot desk</h3>
                        </div>
                        <div class="bg-default-100/70 lg:mx-6.5 mx-3.5 mb-6.5 grow flex flex-col">
                            <div class="lg:mb-7.5 md:mb-5 mb-2.5">
                                <span class="lg:text-5xl text-2xl font-semibold text-default-900">$200</span>
                                <span class="text-xl font-medium text-default-900">/month</span>
                            </div>
                            <div class="mb-5 text-default-600 leading-relaxed text-lg">
                                <span class="font-bold text-default-900">Perfect for:</span>
                                Freelancers or entrepreneurs who need a flexible workspace without committing to a
                                permanent desk.
                            </div>
                            <div class="grow">
                                <h5 class="font-bold text-default-900 mb-6">What’s included:</h5>
                                <ul class="space-y-3.75 lg:ps-12.5 ps-2.5">
                                    <li class="flex items-start gap-3 text-default-600">
                                        <span class="size-1.5 bg-primary-3 mt-2.5 shrink-0"></span>
                                        <span class="font-normal">Flexible seating in shared work areas</span>
                                    </li>
                                    <li class="flex items-start gap-3 text-default-600">
                                        <span class="size-1.5 bg-primary-3 mt-2.5 shrink-0"></span>
                                        <span class="font-normal">High-speed Wi-Fi</span>
                                    </li>
                                    <li class="flex items-start gap-3 text-default-600">
                                        <span class="size-1.5 bg-primary-3 mt-2.5 shrink-0"></span>
                                        <span class="font-normal">5 hours/month of meeting room access</span>
                                    </li>
                                    <li class="flex items-start gap-3 text-default-600">
                                        <span class="size-1.5 bg-primary-3 mt-2.5 shrink-0"></span>
                                        <span class="font-normal">Access to community events and networking opportunities</span>
                                    </li>
                                    <li class="flex items-start gap-3 text-default-600">
                                        <span class="size-1.5 bg-primary-3 mt-2.5 shrink-0"></span>
                                        <span class="font-normal">24/7 access to the coworking space</span>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <a class="lg:ms-12.5 ms-2.5 md:mt-12 mt-5 inline-block bg-primary-1 hover:bg-primary-2 text-black font-medium px-5 py-3.5 transition-all text-center"
                                   href="#">
                                    Book now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 3: Dedicated desk -->
                <div class="p-2.5 bg-default-100/80">
                    <div class="flex flex-col">
                        <div class="bg-white lg:p-6 p-3.5 lg:mb-10 mb-3.5">
                            <h3 class="lg:text-2xl md:text-xl text-lg font-semibold text-default-900">Dedicated
                                desk</h3>
                        </div>
                        <div class="bg-default-100/70 lg:mx-6.5 mx-3.5 mb-6.5 grow flex flex-col">
                            <div class="lg:mb-7.5 md:mb-5 mb-2.5">
                                <span class="lg:text-5xl text-2xl font-semibold text-default-900">$350</span>
                                <span class="text-xl font-medium text-default-900">/month</span>
                            </div>
                            <div class="mb-5 text-default-600 leading-relaxed text-lg">
                                <span class="font-bold text-default-900">Perfect for:</span>
                                Professionals or small teams that need a permanent workspace.
                            </div>
                            <div class="grow">
                                <h5 class="font-bold text-default-900 mb-6">What’s included:</h5>
                                <ul class="space-y-3.75 lg:ps-12.5 ps-2.5">
                                    <li class="flex items-start gap-3 text-default-600">
                                        <span class="size-1.5 bg-primary-3 mt-2.5 shrink-0"></span>
                                        <span
                                            class="font-normal">A dedicated desk is reserved exclusively for you</span>
                                    </li>
                                    <li class="flex items-start gap-3 text-default-600">
                                        <span class="size-1.5 bg-primary-3 mt-2.5 shrink-0"></span>
                                        <span class="font-normal">Personal locker for storing belongings</span>
                                    </li>
                                    <li class="flex items-start gap-3 text-default-600">
                                        <span class="size-1.5 bg-primary-3 mt-2.5 shrink-0"></span>
                                        <span class="font-normal">Unlimited access to meeting rooms</span>
                                    </li>
                                    <li class="flex items-start gap-3 text-default-600">
                                        <span class="size-1.5 bg-primary-3 mt-2.5 shrink-0"></span>
                                        <span class="font-normal">24/7 access to the coworking space</span>
                                    </li>
                                    <li class="flex items-start gap-3 text-default-600">
                                        <span class="size-1.5 bg-primary-3 mt-2.5 shrink-0"></span>
                                        <span class="font-normal">Printing, scanning, and business-class services</span>
                                    </li>
                                    <li class="flex items-start gap-3 text-default-600">
                                        <span class="size-1.5 bg-primary-3 mt-2.5 shrink-0"></span>
                                        <span class="font-normal">Invitations to exclusive community events</span>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <a class="lg:ms-12.5 ms-2.5 md:mt-12 mt-5 inline-block bg-primary-1 hover:bg-primary-2 text-black font-medium px-5 py-3.5 transition-all text-center"
                                   href="#">
                                    Book now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 4: Private office -->
                <div class="p-2.5 bg-default-100/80">
                    <div class="flex flex-col">
                        <div class="bg-white lg:p-6 p-3.5 lg:mb-10 mb-3.5">
                            <h3 class="lg:text-2xl md:text-xl text-lg font-semibold text-default-900">Dedicated
                                desk</h3>
                        </div>
                        <div class="bg-default-100/70 lg:mx-6.5 mx-3.5 mb-6.5 grow flex flex-col">
                            <div class="lg:mb-7.5 md:mb-5 mb-2.5">
                                <span class="lg:text-5xl text-2xl font-semibold text-default-900">$350</span>
                                <span class="text-xl font-medium text-default-900">/month</span>
                            </div>
                            <div class="mb-5 text-default-600 leading-relaxed text-lg">
                                <span class="font-bold text-default-900">Perfect for:</span>
                                Professionals or small teams that need a permanent workspace.
                            </div>
                            <div class="grow">
                                <h5 class="font-bold text-default-900 mb-6">What’s included:</h5>
                                <ul class="space-y-3.75 lg:ps-12.5 ps-2.5">
                                    <li class="flex items-start gap-3 text-default-600">
                                        <span class="size-1.5 bg-primary-3 mt-2.5 shrink-0"></span>
                                        <span
                                            class="font-normal">A dedicated desk is reserved exclusively for you</span>
                                    </li>
                                    <li class="flex items-start gap-3 text-default-600">
                                        <span class="size-1.5 bg-primary-3 mt-2.5 shrink-0"></span>
                                        <span class="font-normal">Personal locker for storing belongings</span>
                                    </li>
                                    <li class="flex items-start gap-3 text-default-600">
                                        <span class="size-1.5 bg-primary-3 mt-2.5 shrink-0"></span>
                                        <span class="font-normal">Unlimited access to meeting rooms</span>
                                    </li>
                                    <li class="flex items-start gap-3 text-default-600">
                                        <span class="size-1.5 bg-primary-3 mt-2.5 shrink-0"></span>
                                        <span class="font-normal">24/7 access to the coworking space</span>
                                    </li>
                                    <li class="flex items-start gap-3 text-default-600">
                                        <span class="size-1.5 bg-primary-3 mt-2.5 shrink-0"></span>
                                        <span class="font-normal">Printing, scanning, and business-class services</span>
                                    </li>
                                    <li class="flex items-start gap-3 text-default-600">
                                        <span class="size-1.5 bg-primary-3 mt-2.5 shrink-0"></span>
                                        <span class="font-normal">Invitations to exclusive community events</span>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <a class="lg:ms-12.5 ms-2.5 md:mt-12 mt-5 inline-block bg-primary-1 hover:bg-primary-2 text-black font-medium px-5 py-3.5 transition-all text-center"
                                   href="#">
                                    Book now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="lg:py-32.5 md:py-22.5 py-15 bg-default-950">
        <div class="container-full">
            <!-- Section Title -->
            <div class="text-center lg:mb-24 mb-10">
                <h2 class="text-4xl md:text-5xl lg:text-[76px] font-semibold text-white tracking-normal">
                    Hear from our happy members
                </h2>
            </div>
            <!-- On desktop (lg), we use 5 columns. On tablet (md) 3, on mobile 1. -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 lg:gap-12.5 gap-7.5 items-start">
                <!-- Card 1: Sarah L. (Down) -->
                <div class="flex flex-col bg-default-900 lg:trandefault-y-8">
                    <div class="p-7.5 flex flex-col items-center text-center">
                        <div class="bg-black text-primary text-sm tracking-normal font-normal px-3 py-1 mb-7.5">
                            Member for 6 months
                        </div>
                        <img alt="Rating" class="w-24 mb-3.5" src="/images/icons/star-alt.svg"/>
                        <p class="text-default-400 text-lg leading-relaxed">
                            Perceived end knowledge certainly day sweetness why cordially.
                        </p>
                    </div>
                    <!-- White Info Box -->
                    <div
                        class="p-2 bg-linear-to-t from-primary-1 via-secondary-1 to-default-800 text-center relative group">
                        <div class="bg-white p-3.5">
                            <h3 class="text-black font-bold text-lg mb-1.25">Sarah L.</h3>
                            <div class="text-default-500 text-lg font-normal">Freelance Designer</div>
                        </div>
                    </div>
                </div>
                <!-- Card 2: John D. (Up) -->
                <div class="flex flex-col bg-default-900 lg:trandefault-y-8">
                    <div class="p-7.5 flex flex-col items-center text-center">
                        <div class="bg-black text-primary text-sm tracking-normal font-normal px-3 py-1 mb-7.5">
                            Member for 1 year
                        </div>
                        <img alt="Rating" class="w-24 mb-4" src="/images/icons/star.svg"/>
                        <p class="text-default-400 text-lg leading-relaxed">
                            The furnished she concluded depending procuring concealed. Perceived end knowledge certainly
                            day sweetness why cordially.
                        </p>
                    </div>
                    <div
                        class="p-2 bg-linear-to-t from-primary-1 via-secondary-1 to-default-800 text-center relative group">
                        <div class="bg-white p-3.5">
                            <h3 class="text-black font-bold text-lg mb-1.25">John D.</h3>
                            <div class="text-default-500 text-lg font-normal">CEO of StudioPlus</div>
                        </div>
                    </div>
                </div>
                <!-- Card 3: Michael R. (Down) -->
                <div class="flex flex-col bg-default-900 border border-white/5 lg:trandefault-y-8">
                    <div class="p-7.5 flex flex-col items-center text-center">
                        <img alt="Rating" class="w-24 mb-4" src="/images/icons/star-alt.svg"/>
                        <p class="text-default-400 text-lg leading-relaxed">
                            Luckily cheered colonel I do we attack highest enabled. Tried law yet style child.
                        </p>
                    </div>
                    <div
                        class="p-2 bg-linear-to-t from-primary-1 via-secondary-1 to-default-800 text-center relative group">
                        <div class="bg-white p-3.5">
                            <h3 class="text-black font-bold text-lg mb-1.25">Michael R.</h3>
                            <div class="text-default-500 text-lg font-normal">Marketing Consultant</div>
                        </div>
                    </div>
                </div>
                <!-- Card 4: David P. (Up) -->
                <div class="flex flex-col bg-default-900 lg:trandefault-y-8">
                    <div class="p-7.5 flex flex-col items-center text-center">
                        <div class="bg-black text-primary text-sm tracking-normal font-normal px-3 py-1 mb-7.5">
                            Member for 2 years
                        </div>
                        <img alt="Rating" class="w-24 mb-4" src="/images/icons/star-alt.svg"/>
                        <p class="text-default-400 text-lg leading-relaxed">
                            Up attempt offered ye civilly so sitting to. She new course gets living within elinor joy.
                        </p>
                    </div>
                    <div
                        class="p-2 bg-linear-to-t from-primary-1 via-secondary-1 to-default-800 text-center relative group">
                        <div class="bg-white p-3.5">
                            <h3 class="text-black font-bold text-lg mb-1.25">David P.</h3>
                            <div class="text-default-500 text-lg font-normal">Entrepreneur</div>
                        </div>
                    </div>
                </div>
                <!-- Card 5: Larry L. (Down) -->
                <div class="flex flex-col bg-default-900 border border-white/5 lg:trandefault-y-8">
                    <div class="p-7.5 flex flex-col items-center text-center">
                        <!-- No Tag -->
                        <div class="h-8 mb-6"></div>
                        <img alt="Rating" class="w-24 mb-4" src="/images/icons/star-alt.svg"/>
                        <p class="text-default-400 text-lg leading-relaxed">
                            Supposing so be resolving breakfast am or perfectly. It drew a hill from me. Valley by oh
                            twenty direct me so.
                        </p>
                    </div>
                    <div
                        class="p-2 bg-linear-to-t from-primary-1 via-secondary-1 to-default-800 text-center relative group">
                        <div class="bg-white p-3.5">
                            <h3 class="text-black font-bold text-lg mb-1.25">Larry L.</h3>
                            <div class="text-default-500 text-lg font-normal">Freelance Designer</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="lg:py-32.5 md:py-22.5 py-15 bg-default-50">
        <div class="container-full">
            <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 lg:gap-12 items-stretch">
                <!-- Left Column -->
                <div class="flex flex-col justify-between py-4 relative z-10">
                    <div>
                        <h2 class="text-4xl md:text-5xl lg:text-[76px] font-semibold text-default-900 md:leading-tight md:mb-7.5 mb-5 w-full!">
                            Find us in <br/> the heart of <br/> the city
                        </h2>
                        <a class="inline-block bg-primary-1 hover:bg-primary-2 text-black font-medium px-5 py-3.5 transition"
                           href="#">
                            View all locations
                        </a>
                    </div>
                    <!-- Navigation -->
                    <div class="flex gap-3 md:mt-12 mt-6 lg:mt-0">
                        <button
                            class="swiper-prev size-12.5 flex items-center justify-center bg-white hover:bg-primary-1 hover:brightness-95 transition">
                            <i class="iconify lucide--arrow-left size-5"></i>
                        </button>
                        <button
                            class="swiper-next size-12.5 flex items-center justify-center bg-white hover:bg-primary-1 transition">
                            <i class="iconify lucide--arrow-right size-5"></i>
                        </button>
                    </div>
                </div>
                <!-- Right Column: Swiper -->
                <div class="lg:col-span-2">
                    <div class="swiper locationSwiper overflow-visible">
                        <div class="swiper-wrapper">
                            <!-- Slide 1 -->
                            <div class="swiper-slide">
                                <div class="bg-white p-2.5 h-full flex flex-col group cursor-pointer">
                                    <div class="overflow-hidden aspect-5/5">
                                        <img class="w-full h-full object-cover transition duration-300"
                                             src="/images/locations/1.avif"/>
                                    </div>
                                    <h3 class="text-2xl font-bold text-default-900 mt-5">San Francisco</h3>
                                </div>
                            </div>
                            <!-- Slide 2 -->
                            <div class="swiper-slide">
                                <div class="bg-white p-2.5 h-full flex flex-col group cursor-pointer">
                                    <div class="overflow-hidden aspect-5/5">
                                        <img class="w-full h-full object-cover transition duration-300"
                                             src="/images/locations/2.avif"/>
                                    </div>
                                    <h3 class="text-2xl font-bold text-default-900 mt-5">New York</h3>
                                </div>
                            </div>
                            <!-- Slide 3 -->
                            <div class="swiper-slide">
                                <div class="bg-white p-2.5 h-full flex flex-col group cursor-pointer">
                                    <div class="overflow-hidden aspect-5/5">
                                        <img class="w-full h-full object-cover transition duration-300"
                                             src="/images/locations/3.avif"/>
                                    </div>
                                    <h3 class="text-2xl font-bold text-default-900 mt-5">Chicago</h3>
                                </div>
                            </div>
                            <!-- Slide 4 -->
                            <div class="swiper-slide">
                                <div class="bg-white p-2.5 h-full flex flex-col group cursor-pointer">
                                    <div class="overflow-hidden aspect-5/5">
                                        <img class="w-full h-full object-cover transition duration-300"
                                             src="/images/locations/4.avif"/>
                                    </div>
                                    <h3 class="text-2xl font-bold text-default-900 mt-5">Atlanta</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

    <!-- Swiper JS -->
@endsection

@section('scripts')
    @vite(['resources/js/components/swiper.js'])
@endsection
