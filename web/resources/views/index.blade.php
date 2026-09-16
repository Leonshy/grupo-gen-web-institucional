@extends('shared.base', ['title' => 'Home'])

@section('styles')

@endsection

@section('content')
    @include('shared.partials.navbar')

    <!-- Hero Section -->
    <section class="overflow-hidden relative w-full lg:pt-49 md:pt-40 pt-30">
        <div class="container-full relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center xl:gap-50 md:gap-12 gap-3.5 lg:mb-20 mb-12.5">
                <!-- Left Side: Logo -->
                <div class="flex items-center justify-center">
                    <img src="/images/marca/logo-vertical-claro.png" alt="Grupo GEN — Desarrollo & Inversión"
                         class="w-full max-w-64 h-auto">
                </div>
                <!-- Right Side: Título (bajada) & CTA -->
                <div class="flex flex-col justify-center mt-8 md:mt-0">
                    <h1 class="lg:text-4xl md:text-3xl text-2xl font-medium leading-tight tracking-normal text-default-600 mb-6">
                        Un holding uruguayo con operaciones reales en minería, energía, forestación,
                        transporte fluvial y bienes raíces, en Uruguay, Paraguay y Argentina.
                    </h1>
                    <div class="flex gap-4 flex-wrap">
                        <a class="inline-block bg-primary-1 hover:bg-primary-2 text-black font-medium py-3.75 px-5 transition-all text-lg"
                           href="{{ route('second', ['first' => 'inversiones', 'second' => 'index']) }}">
                            Ver inversiones
                        </a>
                        <a class="inline-block border border-default-900 text-default-900 hover:bg-default-900 hover:text-white font-medium py-3.75 px-5 transition-all text-lg"
                           href="{{ route('second', ['first' => 'empresas', 'second' => 'index']) }}">
                            Ver empresas
                        </a>
                    </div>
                </div>
            </div>
            <!-- Cifras del grupo -->
            <div class="grid grid-cols-2 lg:grid-cols-4 border border-default-200 divide-y divide-default-200 lg:divide-y-0 lg:divide-x lg:mb-20 mb-12.5">
                <div class="lg:p-10 p-6">
                    <span class="block w-10 h-1 bg-primary-1 mb-4"></span>
                    <span class="block lg:text-5xl text-3xl font-bold text-default-900 mb-1">190.000</span>
                    <span class="text-default-500 text-sm uppercase tracking-wide">ha forestales</span>
                </div>
                <div class="lg:p-10 p-6">
                    <span class="block w-10 h-1 bg-primary-1 mb-4"></span>
                    <span class="block lg:text-5xl text-3xl font-bold text-default-900 mb-1">3</span>
                    <span class="text-default-500 text-sm uppercase tracking-wide">países</span>
                </div>
                <div class="lg:p-10 p-6">
                    <span class="block w-10 h-1 bg-primary-1 mb-4"></span>
                    <span class="block lg:text-5xl text-3xl font-bold text-default-900 mb-1">6</span>
                    <span class="text-default-500 text-sm uppercase tracking-wide">remolcadores</span>
                </div>
                <div class="lg:p-10 p-6">
                    <span class="block w-10 h-1 bg-primary-1 mb-4"></span>
                    <span class="block lg:text-5xl text-3xl font-bold text-default-900 mb-1">+60</span>
                    <span class="text-default-500 text-sm uppercase tracking-wide">años (Vía Confort, 1960)</span>
                </div>
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
    <section class="lg:py-32.5 md:py-22.5 py-15 bg-default-950">
        <div class="container-full relative">
            <!-- Section Title -->
            <div class="text-center lg:mb-16 md:mb-10 mb-2.5">
                <h2 class="text-4xl md:text-5xl lg:text-[76px] font-semibold text-white">
                    Nuestras empresas
                </h2>
            </div>
            <!-- Swiper -->
            <div class="swiper workspaceSwiper relative overflow-visible!">
                <div class="swiper-wrapper">
                    <!-- Dialeca -->
                    <div class="swiper-slide">
                        <a class="p-2.5 bg-linear-to-bl from-primary-1 via-white/90 to-white hover:from-primary-2 flex flex-col group overflow-hidden transition-all duration-500"
                           href="#">
                            <div class="bg-white p-5 text-center">
                                <h3 class="md:text-2xl text-lg font-bold text-black">Dialeca S.A.</h3>
                                <p class="text-default-600 text-sm mt-1">Minería · Construcción</p>
                            </div>
                            <div class="relative aspect-4/5 overflow-hidden bg-default-900 flex flex-col items-center justify-center gap-4 text-white">
                                <i class="iconify tabler--mountain size-16"></i>
                                <span class="font-bold text-lg">5.817 ha</span>
                            </div>
                        </a>
                    </div>
                    <!-- Viagen -->
                    <div class="swiper-slide">
                        <a class="p-2.5 bg-linear-to-bl from-primary-1 via-white/90 to-white hover:from-primary-2 flex flex-col group overflow-hidden transition-all duration-500"
                           href="#">
                            <div class="bg-white p-5 text-center">
                                <h3 class="md:text-2xl text-lg font-bold text-black">Viagen S.A.</h3>
                                <p class="text-default-600 text-sm mt-1">Transporte fluvial</p>
                            </div>
                            <div class="relative aspect-4/5 overflow-hidden bg-primary-1 flex flex-col items-center justify-center gap-4 text-black">
                                <i class="iconify tabler--anchor size-16"></i>
                                <span class="font-bold text-lg">6 remolcadores</span>
                            </div>
                        </a>
                    </div>
                    <!-- Lumiganor -->
                    <div class="swiper-slide">
                        <a class="p-2.5 bg-linear-to-bl from-primary-1 via-white/90 to-white hover:from-primary-2 flex flex-col group overflow-hidden transition-all duration-500"
                           href="#">
                            <div class="bg-white p-5 text-center">
                                <h3 class="md:text-2xl text-lg font-bold text-black">Lumiganor S.A.</h3>
                                <p class="text-default-600 text-sm mt-1">Energía</p>
                            </div>
                            <div class="relative aspect-4/5 overflow-hidden bg-default-900 flex flex-col items-center justify-center gap-4 text-white">
                                <i class="iconify tabler--bolt size-16"></i>
                                <span class="font-bold text-lg">11,4 MW</span>
                            </div>
                        </a>
                    </div>
                    <!-- Vía Confort -->
                    <div class="swiper-slide">
                        <a class="p-2.5 bg-linear-to-bl from-primary-1 via-white/90 to-white hover:from-primary-2 flex flex-col group overflow-hidden transition-all duration-500"
                           href="#">
                            <div class="bg-white p-5 text-center">
                                <h3 class="md:text-2xl text-lg font-bold text-black">Vía Confort</h3>
                                <p class="text-default-600 text-sm mt-1">Electrodomésticos</p>
                            </div>
                            <div class="relative aspect-4/5 overflow-hidden bg-primary-1 flex flex-col items-center justify-center gap-4 text-black">
                                <i class="iconify tabler--plug size-16"></i>
                                <span class="font-bold text-lg">Desde 1960</span>
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
    <section class="lg:py-32.5 md:py-22.5 py-15 bg-default-50">
        <div class="container-full">
            <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 lg:gap-12 items-stretch">
                <!-- Left Column -->
                <div class="flex flex-col justify-between py-4 relative z-10">
                    <div>
                        <h2 class="text-4xl md:text-5xl lg:text-[76px] font-semibold text-default-900 md:leading-tight md:mb-7.5 mb-5 w-full!">
                            Áreas de <br/> inversión
                        </h2>
                        <a class="inline-block bg-primary-1 hover:bg-primary-2 text-black font-medium px-5 py-3.5 transition"
                           href="{{ route('second', ['first' => 'inversiones', 'second' => 'index']) }}">
                            Ver todas las inversiones
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
                            <div class="swiper-slide">
                                <div class="bg-white p-2.5 h-full flex flex-col group cursor-pointer">
                                    <div class="overflow-hidden aspect-5/5 bg-primary-1 flex items-center justify-center text-black">
                                        <i class="iconify tabler--tree size-14"></i>
                                    </div>
                                    <h3 class="text-2xl font-bold text-default-900 mt-5">Forestal</h3>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bg-white p-2.5 h-full flex flex-col group cursor-pointer">
                                    <div class="overflow-hidden aspect-5/5 bg-default-900 flex items-center justify-center text-white">
                                        <i class="iconify tabler--bolt size-14"></i>
                                    </div>
                                    <h3 class="text-2xl font-bold text-default-900 mt-5">Energía</h3>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bg-white p-2.5 h-full flex flex-col group cursor-pointer">
                                    <div class="overflow-hidden aspect-5/5 bg-primary-1 flex items-center justify-center text-black">
                                        <i class="iconify tabler--mountain size-14"></i>
                                    </div>
                                    <h3 class="text-2xl font-bold text-default-900 mt-5">Minería</h3>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bg-white p-2.5 h-full flex flex-col group cursor-pointer">
                                    <div class="overflow-hidden aspect-5/5 bg-default-900 flex items-center justify-center text-white">
                                        <i class="iconify tabler--anchor size-14"></i>
                                    </div>
                                    <h3 class="text-2xl font-bold text-default-900 mt-5">Puertos</h3>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bg-white p-2.5 h-full flex flex-col group cursor-pointer">
                                    <div class="overflow-hidden aspect-5/5 bg-primary-1 flex items-center justify-center text-black">
                                        <i class="iconify tabler--ship size-14"></i>
                                    </div>
                                    <h3 class="text-2xl font-bold text-default-900 mt-5">Transporte fluvial</h3>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bg-white p-2.5 h-full flex flex-col group cursor-pointer">
                                    <div class="overflow-hidden aspect-5/5 bg-default-900 flex items-center justify-center text-white">
                                        <i class="iconify tabler--building-estate size-14"></i>
                                    </div>
                                    <h3 class="text-2xl font-bold text-default-900 mt-5">Bienes raíces</h3>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bg-white p-2.5 h-full flex flex-col group cursor-pointer">
                                    <div class="overflow-hidden aspect-5/5 bg-primary-1 flex items-center justify-center text-black">
                                        <i class="iconify tabler--building-warehouse size-14"></i>
                                    </div>
                                    <h3 class="text-2xl font-bold text-default-900 mt-5">Construcción</h3>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bg-white p-2.5 h-full flex flex-col group cursor-pointer">
                                    <div class="overflow-hidden aspect-5/5 bg-default-900 flex items-center justify-center text-white">
                                        <i class="iconify tabler--plug size-14"></i>
                                    </div>
                                    <h3 class="text-2xl font-bold text-default-900 mt-5">Electrodomésticos</h3>
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
                Un holding con activos reales, medibles y verificables
            </h2>
            <!-- Description -->
            <p class="text-lg text-default-600 lg:mb-12.5 mb-5 font-medium lg:max-w-[60%] mx-auto leading-relaxed">
                Conocé en detalle cada empresa del grupo y las verticales en las que invertimos en
                Uruguay, Paraguay y Argentina.
            </p>
            <!-- Button Group -->
            <div class="flex flex-row items-center justify-center md:gap-12.5 gap-5">
                <!-- Primary Action -->
                <a class="bg-primary-1 text-black font-medium px-5 py-3.5 hover:bg-primary-2 transition-all text-lg"
                   href="{{ route('second', ['first' => 'empresas', 'second' => 'index']) }}">
                    Ver empresas
                </a>
                <!-- Link Action -->
                <a class="group flex items-center gap-2 text-black hover:text-primary-3 font-medium text-lg underline hover:opacity-70 transition-all"
                   href="{{ route('second', ['first' => 'contacto', 'second' => 'index']) }}">
                    Contacto
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
