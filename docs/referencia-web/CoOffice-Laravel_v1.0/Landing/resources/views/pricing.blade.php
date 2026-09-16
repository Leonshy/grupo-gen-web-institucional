@extends('shared.base', ['title' => 'Pricing'])



@section('styles')

@endsection

@section('content')
    @include('shared.partials.navbar')

    <section class="relative overflow-hidden bg-white lg:pt-46 md:pt-44 pt-30 lg:pb-24 pb-12">
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
            <h2 class="text-center lg:text-[90px] md:text-6xl text-[40px] font-bold text-default-900 mb-16 tracking-normal">
                Choose your workspace plan
            </h2>
            <!-- Pricing Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:gap-12.5 gap-7.5 md:mt-24 mt-17">
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
