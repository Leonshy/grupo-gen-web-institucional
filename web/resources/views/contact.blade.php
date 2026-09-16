@extends('shared.base', ['title' => 'Contact Us'])



@section('styles')

@endsection

@section('content')
    @include('shared.partials.navbar')

    <section class="relative overflow-hidden lg:pt-46 md:pt-44 pt-30">
        <!-- Background Decorative Blurs -->
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
        <div class="container-full relative z-20">
            <!-- Section Heading -->
            <h2 class="text-center lg:text-[90px] md:text-[54px] text-4xl font-bold text-default-900 md:mb-16 mb-5 tracking-normal">
                Have questions? contact us
            </h2>
            <div class="bg-default-950 md:p-7.5 p-5 grid lg:grid-cols-2 gap-7.5 items-start">
                <!-- LEFT: FORM SECTION -->
                <form class="grid grid-cols-1 md:grid-cols-2 md:gap-7.5 gap-5">
                    <!-- Name -->
                    <div class="md:col-span-2">
                        <input
                            class="w-full bg-default-900 text-default-300 py-2.5 px-5 border-none focus:ring-1 focus:ring-primary-1 outline-none transition-all placeholder-default-500"
                            placeholder="Name" type="text"/>
                    </div>
                    <!-- Email -->
                    <div>
                        <input
                            class="w-full bg-default-900 text-default-300 py-2.5 px-5 border-none focus:ring-1 focus:ring-primary-1 outline-none transition-all placeholder-default-500"
                            placeholder="Email" type="email"/>
                    </div>
                    <!-- Phone -->
                    <div>
                        <input
                            class="w-full bg-default-900 text-default-300 py-2.5 px-5 border-none focus:ring-1 focus:ring-primary-1 outline-none transition-all placeholder-default-500"
                            placeholder="Phone number" type="text"/>
                    </div>
                    <!-- Space Type Select -->
                    <div class="relative">
                        <select
                            class="w-full appearance-none bg-default-900 text-default-300 py-2.5 px-5 border-none focus:ring-1 focus:ring-primary-1 outline-none transition-all">
                            <option>Space type</option>
                            <option>Private Office</option>
                            <option>Co-working Space</option>
                        </select>
                    </div>
                    <!-- Number of Seats Select -->
                    <div class="relative">
                        <select
                            class="w-full appearance-none bg-default-900 text-default-300 py-2.5 px-5 border-none focus:ring-1 focus:ring-primary-1 outline-none transition-all">
                            <option>Number of seats</option>
                            <option>1-5</option>
                            <option>5-20</option>
                            <option>20+</option>
                        </select>
                    </div>
                    <!-- Location Select -->
                    <div class="relative">
                        <select
                            class="w-full appearance-none bg-default-900 text-default-300 py-2.5 px-5 border-none focus:ring-1 focus:ring-primary-1 outline-none transition-all">
                            <option>Location</option>
                            <option>Chicago</option>
                            <option>New York</option>
                        </select>
                    </div>
                    <!-- Subject -->
                    <div>
                        <input
                            class="w-full bg-default-900 text-default-300 py-2.5 px-5 border-none focus:ring-1 focus:ring-primary-1 outline-none transition-all placeholder-default-500"
                            placeholder="Subject" type="text"/>
                    </div>
                    <!-- Message -->
                    <div class="md:col-span-2">
                        <textarea
                            class="w-full bg-default-900 text-default-300 py-2.5 px-5 border-none focus:ring-1 focus:ring-primary-1 outline-none transition-all placeholder-default-500 resize-none"
                            placeholder="Message" rows="8"></textarea>
                    </div>
                    <!-- Submit Button -->
                    <div class="md:col-span-2">
                        <button
                            class="bg-primary-1 hover:bg-primary-2 text-black font-medium py-3.5 px-5 transition-colors text-lg"
                            type="submit">
                            Submit
                        </button>
                    </div>
                </form>
                <!-- RIGHT: INFO SECTION -->
                <div class="flex flex-col h-full justify-between">
                    <div>
                        <!-- Image -->
                        <div class="overflow-hidden mb-6 shadow-2xl">
                            <img alt="Office space" class="w-full h-80 object-cover"
                                 src="/images/about/about-image.avif"/>
                        </div>
                        <!-- Contact Details Grid -->
                        <div class="grid grid-cols-1 md:grid-cols-2 md:gap-x-7.5 md:gap-y-0 gap-y-3.5 text-default-300">
                            <!-- Left Sub-col -->
                            <div class="space-y-3.5 md:order-1 order-1">
                                <div class="flex items-center gap-2.5">
<span>
<i class="iconify tabler--phone-filled mt-1.5 text-primary-1"></i>
</span>
                                    <span class="text-xl font-medium tracking-wide text-default-400 hover:text-white">+123-456-7890</span>
                                </div>
                                <div class="flex items-center gap-4">
<span>
<i class="iconify tabler--mail-filled mt-1.5 text-primary-1"></i>
</span>
                                    <span class="text-xl font-medium tracking-wide text-default-400 hover:text-white">hello@example.com</span>
                                </div>
                            </div>
                            <!-- Right Sub-col -->
                            <div class="md:mb-10 mb-5 md:order-2 order-3">
                                <div class="lg:col-span-4 rounded-sm self-start">
                                    <div class="flex items-start gap-2 mb-4">
                                        <i class="iconify tabler--map-pin-filled text-primary-2 size-4 brightness-200 mt-1"></i>
                                        <p class="text-default-400 text-lg">Chicago HQ Estica Cop. Macomb, MI 48042</p>
                                    </div>
                                    <p class="text-base">
                                        <span class="text-primary-2 font-bold">Office hours:</span>
                                        <span class="text-default-400 ml-1">Monday - Friday: 9 AM - 11 AM</span>
                                    </p>
                                </div>
                            </div>
                            <div class="flex gap-3 md:order-3 order-2">
                                <a class="bg-primary-2 size-7 flex justify-center items-center text-default-950 hover:brightness-110 hover:-trandefault-y-1 transition-all"
                                   href="#">
                                    <i class="iconify tabler--brand-x w-4 h-4"></i>
                                </a>
                                <a class="bg-primary-2 size-7 flex justify-center items-center text-default-950 hover:brightness-110 hover:-trandefault-y-1 transition-all"
                                   href="#">
                                    <i class="iconify tabler--brand-facebook w-4 h-4"></i>
                                </a>
                                <a class="bg-primary-2 size-7 flex justify-center items-center text-default-950 hover:brightness-110 hover:-trandefault-y-1 transition-all"
                                   href="#">
                                    <i class="iconify tabler--brand-instagram w-4 h-4"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="lg:py-32.5 md:py-22.5 py-15">
        <div class="container-full">
            <!-- Section Title -->
            <h2 class="lg:text-[56px] md:text-[42px] text-3xl font-medium lg:mb-17.5 md:mb-10 mb-5 text-black tracking-tight">
                Visit us at below locations
            </h2>
            <!-- Grid Container -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 lg:gap-17.5 gap-7.5">
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


    @include('shared.partials.footer')
@endsection

@section('scripts')

@endsection
