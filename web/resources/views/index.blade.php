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
                         class="w-full max-w-md h-auto">
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
        <div class="container-full">
            <div class="flex md:flex-row flex-col md:items-end justify-between gap-6 mb-12.5">
                <div>
                    <h2 class="text-4xl md:text-5xl lg:text-[76px] font-semibold text-white leading-tight">
                        Áreas de inversión
                    </h2>
                    <p class="text-default-400 text-lg mt-3">Nueve verticales, tres países.</p>
                </div>
                <a class="inline-block bg-primary-1 hover:bg-primary-2 text-black font-medium px-5 py-3.5 transition shrink-0"
                   href="{{ route('second', ['first' => 'inversiones', 'second' => 'index']) }}">
                    Ver todas las inversiones
                </a>
            </div>
            <div class="grid grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach (config('contenido.verticales') as $slug => $vertical)
                    <a href="{{ route('second', ['first' => 'inversiones', 'second' => $slug]) }}"
                       class="area-card bg-default-900 p-3 flex flex-col group transition-all hover:bg-default-800">
                        @if (!empty($vertical['imagen']))
                            <div class="relative overflow-hidden aspect-square [clip-path:polygon(0_0,calc(100%-24px)_0,100%_24px,100%_100%,0_100%)]">
                                <img src="/images/{{ $vertical['imagen'] }}" alt="{{ $vertical['nombre'] }}"
                                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
                                <i class="iconify {{ $vertical['icon'] }} absolute top-3 left-3 text-primary-1 size-8"></i>
                            </div>
                        @else
                            <div class="overflow-hidden aspect-square bg-{{ $vertical['color'] }} flex items-center justify-center {{ $vertical['color'] === 'white' ? 'text-default-900' : 'text-black' }} [clip-path:polygon(0_0,calc(100%-24px)_0,100%_24px,100%_100%,0_100%)]">
                                <i class="iconify {{ $vertical['icon'] }} size-14 transition-transform group-hover:scale-110"></i>
                            </div>
                        @endif
                        <h3 class="text-xl font-bold text-white mt-4 px-1 pb-1">{{ $vertical['nombre'] }}</h3>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    <section class="lg:py-32.5 md:py-22.5 py-15 bg-default-50">
        <div class="container-full relative">
            <!-- Section Title -->
            <div class="text-center lg:mb-16 md:mb-10 mb-2.5">
                <h2 class="text-4xl md:text-5xl lg:text-[76px] font-semibold text-default-900">
                    Nuestras empresas
                </h2>
            </div>
            <!-- Grilla chica -->
            <div class="flex flex-wrap justify-center gap-6 max-w-5xl mx-auto">
                <a class="w-36 p-1.5 bg-linear-to-bl from-primary-1 via-white/90 to-white hover:from-primary-2 flex flex-col group overflow-hidden shadow-md transition-all duration-500"
                   href="{{ route('second', ['first' => 'empresas', 'second' => 'dialeca']) }}">
                    <div class="bg-white px-2 py-2.5 text-center">
                        <h3 class="text-sm font-bold text-black">Dialeca S.A.</h3>
                        <p class="text-default-600 text-xs mt-0.5">Minería · Construcción</p>
                    </div>
                    <div class="relative aspect-square overflow-hidden bg-default-900 flex flex-col items-center justify-center gap-1 text-white">
                        <i class="iconify tabler--mountain size-7"></i>
                        <span class="font-bold text-xs">5.817 ha</span>
                    </div>
                </a>
                <a class="w-36 p-1.5 bg-linear-to-bl from-primary-1 via-white/90 to-white hover:from-primary-2 flex flex-col group overflow-hidden shadow-md transition-all duration-500"
                   href="{{ route('second', ['first' => 'empresas', 'second' => 'viagen']) }}">
                    <div class="bg-white px-2 py-2.5 text-center">
                        <h3 class="text-sm font-bold text-black">Viagen S.A.</h3>
                        <p class="text-default-600 text-xs mt-0.5">Transporte fluvial</p>
                    </div>
                    <div class="relative aspect-square overflow-hidden bg-primary-1 flex flex-col items-center justify-center gap-1 text-black">
                        <i class="iconify tabler--anchor size-7"></i>
                        <span class="font-bold text-xs">6 remolcadores</span>
                    </div>
                </a>
                <a class="w-36 p-1.5 bg-linear-to-bl from-primary-1 via-white/90 to-white hover:from-primary-2 flex flex-col group overflow-hidden shadow-md transition-all duration-500"
                   href="{{ route('second', ['first' => 'empresas', 'second' => 'lumiganor']) }}">
                    <div class="bg-white px-2 py-2.5 text-center">
                        <h3 class="text-sm font-bold text-black">Lumiganor S.A.</h3>
                        <p class="text-default-600 text-xs mt-0.5">Energía</p>
                    </div>
                    <div class="relative aspect-square overflow-hidden bg-default-900 flex flex-col items-center justify-center gap-1 text-white">
                        <i class="iconify tabler--bolt size-7"></i>
                        <span class="font-bold text-xs">11,4 MW</span>
                    </div>
                </a>
                <a class="w-36 p-1.5 bg-linear-to-bl from-primary-1 via-white/90 to-white hover:from-primary-2 flex flex-col group overflow-hidden shadow-md transition-all duration-500"
                   href="{{ route('second', ['first' => 'empresas', 'second' => 'via-confort']) }}">
                    <div class="bg-white px-2 py-2.5 text-center">
                        <h3 class="text-sm font-bold text-black">Vía Confort</h3>
                        <p class="text-default-600 text-xs mt-0.5">Electrodomésticos</p>
                    </div>
                    <div class="relative aspect-square overflow-hidden bg-primary-1 flex flex-col items-center justify-center gap-1 text-black">
                        <i class="iconify tabler--plug size-7"></i>
                        <span class="font-bold text-xs">Desde 1960</span>
                    </div>
                </a>
                <a class="w-36 p-1.5 bg-linear-to-bl from-primary-1 via-white/90 to-white hover:from-primary-2 flex flex-col group overflow-hidden shadow-md transition-all duration-500"
                   href="{{ route('second', ['first' => 'empresas', 'second' => 'igp-metales']) }}">
                    <div class="bg-white px-2 py-2.5 text-center">
                        <h3 class="text-sm font-bold text-black">IGP Metales</h3>
                        <p class="text-default-600 text-xs mt-0.5">Siderurgia</p>
                    </div>
                    <div class="relative aspect-square overflow-hidden bg-default-900 flex flex-col items-center justify-center gap-1 text-white">
                        <i class="iconify tabler--flame size-7"></i>
                        <span class="font-bold text-xs">Villa Hayes, PY</span>
                    </div>
                </a>
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
