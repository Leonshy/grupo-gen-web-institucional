@extends('shared.base', ['title' => 'Home'])

@section('styles')

@endsection

@section('content')
    @include('shared.partials.navbar')

    {{-- ══════════════ PROPUESTA 1 — Foto a pantalla completa ══════════════ --}}
    <section class="relative min-h-screen flex flex-col justify-between overflow-hidden bg-default-950">
        <span class="absolute lg:top-28 top-24 right-6 z-30 bg-primary-3 text-black text-[11px] font-bold uppercase tracking-[0.2em] px-3 py-1.5">Propuesta 1 — Foto full-bleed</span>
        <img src="/images/hero/hero-mineria.jpg" alt=""
             class="absolute inset-0 w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/55 to-black/20"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-transparent to-black/30"></div>

        <div class="container-full relative z-10 flex-1 flex items-center lg:pt-32 pt-28 pb-10">
            <div class="max-w-4xl">
                <div class="flex items-center gap-4 mb-6">
                    <span class="block w-14 h-0.5 bg-primary-1"></span>
                    <span class="text-primary-1 text-xs md:text-sm font-bold uppercase tracking-[0.25em]">
                        Uruguay · Paraguay · Argentina
                    </span>
                </div>

                <h1 class="text-white font-semibold leading-[0.95] tracking-tight text-5xl md:text-6xl lg:text-[80px] mb-6">
                    Un holding uruguayo<br>
                    con <span class="text-primary-1">operaciones reales.</span>
                </h1>

                <p class="text-white/65 text-lg md:text-xl max-w-2xl leading-relaxed mb-8">
                    Minería, energía, forestación, transporte fluvial y bienes raíces,
                    en Uruguay, Paraguay y Argentina.
                </p>

                <div class="flex gap-4 flex-wrap">
                    <a class="inline-block bg-primary-1 hover:bg-white text-black font-semibold py-4 px-7 transition-all text-lg"
                       href="{{ route('second', ['first' => 'inversiones', 'second' => 'index']) }}">
                        Ver inversiones
                    </a>
                    <a class="inline-flex items-center gap-2 border border-white/40 hover:border-primary-1 hover:text-primary-1 text-white font-semibold py-4 px-7 transition-all text-lg"
                       href="{{ route('second', ['first' => 'empresas', 'second' => 'index']) }}">
                        Nuestras empresas
                        <i class="iconify tabler--arrow-right size-5"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Cifras ancladas al pie del hero -->
        <div class="relative z-10 border-t border-white/15 bg-black/45 backdrop-blur-sm">
            <div class="container-full">
                <div class="grid grid-cols-2 lg:grid-cols-4 lg:divide-x divide-white/15">
                    <div class="lg:px-8 py-5 lg:py-6">
                        <span class="block lg:text-4xl text-2xl font-bold text-white leading-none mb-2">190.000</span>
                        <span class="text-primary-1 text-[11px] md:text-xs uppercase tracking-[0.18em] font-semibold">ha forestales</span>
                    </div>
                    <div class="lg:px-8 py-5 lg:py-6">
                        <span class="block lg:text-4xl text-2xl font-bold text-white leading-none mb-2">50 M t</span>
                        <span class="text-primary-1 text-[11px] md:text-xs uppercase tracking-[0.18em] font-semibold">reserva de hierro</span>
                    </div>
                    <div class="lg:px-8 py-5 lg:py-6">
                        <span class="block lg:text-4xl text-2xl font-bold text-white leading-none mb-2">11,4 MW</span>
                        <span class="text-primary-1 text-[11px] md:text-xs uppercase tracking-[0.18em] font-semibold">planta de biomasa</span>
                    </div>
                    <div class="lg:px-8 py-5 lg:py-6">
                        <span class="block lg:text-4xl text-2xl font-bold text-white leading-none mb-2">9</span>
                        <span class="text-primary-1 text-[11px] md:text-xs uppercase tracking-[0.18em] font-semibold">verticales productivas</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ══════════════ PROPUESTA 2 — Mosaico de verticales ══════════════ --}}
    <section class="relative bg-default-950 overflow-hidden">
        <span class="absolute top-6 right-6 z-30 bg-primary-3 text-black text-[11px] font-bold uppercase tracking-[0.2em] px-3 py-1.5">Propuesta 2 — Mosaico</span>
        <!-- Halo verde sutil detrás del mosaico -->
        <div class="absolute top-0 right-0 lg:size-[600px] size-80 bg-primary-1/15 blur-[140px] pointer-events-none"></div>

        <div class="container-full relative z-10 lg:py-28 py-16">
            <div class="grid grid-cols-1 lg:grid-cols-12 lg:gap-16 gap-12 items-center">

                <div class="lg:col-span-6">
                    <div class="flex items-center gap-4 mb-6">
                        <span class="block w-14 h-0.5 bg-primary-1"></span>
                        <span class="text-primary-1 text-xs md:text-sm font-bold uppercase tracking-[0.25em]">
                            Uruguay · Paraguay · Argentina
                        </span>
                    </div>

                    <h1 class="text-white font-semibold leading-[0.95] tracking-tight text-5xl md:text-6xl lg:text-[64px] mb-7">
                        Un holding con <span class="text-primary-1">operaciones reales.</span>
                    </h1>

                    <p class="text-white/60 text-lg md:text-xl leading-relaxed mb-9 max-w-lg">
                        Nueve verticales productivas con activos medibles en Uruguay,
                        Paraguay y Argentina.
                    </p>

                    <div class="flex gap-4 flex-wrap mb-10">
                        <a class="inline-block bg-primary-1 hover:bg-white text-black font-semibold py-4 px-7 transition-all text-lg"
                           href="{{ route('second', ['first' => 'inversiones', 'second' => 'index']) }}">
                            Ver inversiones
                        </a>
                        <a class="inline-flex items-center gap-2 border border-white/40 hover:border-primary-1 hover:text-primary-1 text-white font-semibold py-4 px-7 transition-all text-lg"
                           href="{{ route('second', ['first' => 'empresas', 'second' => 'index']) }}">
                            Nuestras empresas
                            <i class="iconify tabler--arrow-right size-5"></i>
                        </a>
                    </div>

                    <div class="flex flex-wrap gap-x-10 gap-y-5 border-t border-white/15 pt-7">
                        <div>
                            <span class="block text-3xl font-bold text-white leading-none mb-1.5">190.000</span>
                            <span class="text-white/45 text-[11px] uppercase tracking-[0.18em] font-semibold">ha forestales</span>
                        </div>
                        <div>
                            <span class="block text-3xl font-bold text-white leading-none mb-1.5">50 M t</span>
                            <span class="text-white/45 text-[11px] uppercase tracking-[0.18em] font-semibold">reserva de hierro</span>
                        </div>
                        <div>
                            <span class="block text-3xl font-bold text-white leading-none mb-1.5">3</span>
                            <span class="text-white/45 text-[11px] uppercase tracking-[0.18em] font-semibold">países</span>
                        </div>
                    </div>
                </div>

                <!-- Mosaico 3x3, corte diagonal en el bloque entero -->
                <div class="lg:col-span-6">
                    <div class="grid grid-cols-3 gap-1.5 [clip-path:polygon(0_0,calc(100%-56px)_0,100%_56px,100%_100%,0_100%)]">
                        @foreach (config('contenido.verticales') as $slug => $vertical)
                            <a href="{{ route('second', ['first' => 'inversiones', 'second' => $slug]) }}"
                               class="group relative aspect-square overflow-hidden bg-default-900">
                                @if (!empty($vertical['imagen']))
                                    <img src="/images/{{ $vertical['imagen'] }}" alt="{{ $vertical['nombre'] }}"
                                         class="absolute inset-0 w-full h-full object-cover opacity-70 transition-all duration-500 group-hover:opacity-100 group-hover:scale-110">
                                @endif
                                <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/20 to-transparent"></div>
                                <div class="absolute inset-0 ring-1 ring-inset ring-white/0 group-hover:ring-primary-1 transition-all duration-300"></div>
                                <i class="iconify {{ $vertical['icon'] }} absolute top-3 left-3 text-primary-1 size-5 md:size-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></i>
                                <span class="absolute bottom-0 inset-x-0 p-3 md:p-4 text-white font-semibold text-xs md:text-sm leading-tight">
                                    {{ $vertical['nombre'] }}
                                </span>
                            </a>
                        @endforeach
                    </div>
                </div>

            </div>
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
