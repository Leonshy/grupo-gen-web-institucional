@extends('shared.base', ['title' => 'Locations'])



@section('styles')

@endsection

@section('content')
    @include('shared.partials.navbar')

    <section class="relative overflow-hidden bg-white lg:pt-46 md:pt-44 pt-30">
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
            <!-- Section Heading -->
            <h2 class="text-center lg:text-[80px] md:text-[54px] text-4xl font-bold text-default-900 mb-16 tracking-normal">
                Our locations
            </h2>
            <!-- Grid Container -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 lg:gap-17.5 gap-7.5 md:mt-24 mt-10">
                <!-- Location: San Francisco -->
                <div class="flex flex-col">
                    <div class="mb-2.5 overflow-hidden">
                        <img alt="San Francisco" class="w-full object-cover transition-transform duration-500"
                             src="/images/locations/1.avif"/>
                    </div>
                    <h3 class="text-2xl font-bold md:mb-5 mb-2.5 text-black">San Francisco</h3>
                    <ul class="md:space-y-3 space-y-1.25">
                        <li class="flex items-start gap-3">
                            <span class="size-1.5 bg-primary-3 mt-2 shrink-0"></span>
                            <span class="text-default-600 text-lg font-normal leading-relaxed">123 Creative Lane, Innovate City, IC 45678</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="size-1.5 bg-primary-3 shrink-0"></span>
                            <a class="text-default-600 text-lg font-normal hover:text-black transition-colors"
                               href="tel:5551234567">(555) 123-4567</a>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="size-1.5 bg-primary-3 shrink-0"></span>
                            <a class="text-default-600 text-lg font-normal hover:text-black transition-colors"
                               href="mailto:hello@sanfancisco.com">hello@sanfancisco.com</a>
                        </li>
                    </ul>
                </div>
                <!-- Location: New York -->
                <div class="flex flex-col">
                    <div class="mb-2.5 overflow-hidden">
                        <img alt="New York" class="w-full object-cover transition-transform duration-500"
                             src="/images/locations/2.avif"/>
                    </div>
                    <h3 class="text-2xl font-bold md:mb-5 mb-2.5 text-black">New York</h3>
                    <ul class="md:space-y-3 space-y-1.25">
                        <li class="flex items-start gap-3">
                            <span class="size-1.5 bg-primary-3 mt-2 shrink-0"></span>
                            <span class="text-default-600 text-lg font-normal leading-relaxed">129 Rutherford Ports, Port Laurence, OR 92981-4603</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="size-1.5 bg-primary-3 shrink-0"></span>
                            <a class="text-default-600 text-lg font-normal hover:text-black transition-colors"
                               href="tel:4540123456">(454) 012-3456</a>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="size-1.5 bg-primary-3 shrink-0"></span>
                            <a class="text-default-600 text-lg font-normal hover:text-black transition-colors"
                               href="mailto:hello@newyork.com">hello@newyork.com</a>
                        </li>
                    </ul>
                </div>
                <!-- Location: Chicago -->
                <div class="flex flex-col">
                    <div class="mb-2.5 overflow-hidden">
                        <img alt="Chicago" class="w-full object-cover transition-transform duration-500"
                             src="/images/locations/3.avif"/>
                    </div>
                    <h3 class="text-2xl font-bold md:mb-5 mb-2.5 text-black">Chicago</h3>
                    <ul class="md:space-y-3 space-y-1.25">
                        <li class="flex items-start gap-3">
                            <span class="size-1.5 bg-primary-3 mt-2 shrink-0"></span>
                            <span class="text-default-600 text-lg font-normal leading-relaxed">84790 Heller Mountains, Merleport, MI 01436-7947</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="size-1.5 bg-primary-3 shrink-0"></span>
                            <a class="text-default-600 text-lg font-normal hover:text-black transition-colors"
                               href="tel:5551234587">(555) 123-4587</a>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="size-1.5 bg-primary-3 shrink-0"></span>
                            <a class="text-default-600 text-lg font-normal hover:text-black transition-colors"
                               href="mailto:hello@chicago.com">hello@chicago.com</a>
                        </li>
                    </ul>
                </div>
                <!-- Location: Atlanta -->
                <div class="flex flex-col">
                    <div class="mb-2.5 overflow-hidden">
                        <img alt="Atlanta" class="w-full object-cover transition-transform duration-500"
                             src="/images/locations/4.avif"/>
                    </div>
                    <h3 class="text-2xl font-bold md:mb-5 mb-2.5 text-black">Atlanta</h3>
                    <ul class="md:space-y-3 space-y-1.25">
                        <li class="flex items-start gap-3">
                            <span class="size-1.5 bg-primary-3 mt-2 shrink-0"></span>
                            <span class="text-default-600 text-lg font-normal leading-relaxed">Atlanta HQ Estica Cop. Macomb, MI 48042</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="size-1.5 bg-primary-3 shrink-0"></span>
                            <a class="text-default-600 text-lg font-normal hover:text-black transition-colors"
                               href="tel:5551235667">(555) 123-5667</a>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="size-1.5 bg-primary-3 shrink-0"></span>
                            <a class="text-default-600 text-lg font-normal hover:text-black transition-colors"
                               href="mailto:hello@atlanta.com">hello@atlanta.com</a>
                        </li>
                    </ul>
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
@endsection

@section('scripts')

@endsection
