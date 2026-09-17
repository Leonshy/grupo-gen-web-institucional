@extends('shared.base', ['title' => 'Empresas'])

@php
    $empresas = config('contenido.empresas');
@endphp

@section('content')
    @include('shared.partials.navbar')
    @include('shared.partials.page-hero', [
        'image' => 'hero/banner-empresas.jpg',
        'title' => 'Las empresas del holding',
        'subtitle' => 'Cinco sociedades con ficha completa, cada una con nombre y responsabilidad propia sobre su sector.',
        'items' => [
            ['label' => 'Inicio', 'url' => url('/')],
            ['label' => 'Empresas'],
        ],
    ])

    <section class="pt-14 lg:pt-20 pb-16 lg:pb-24">
        <div class="container-full">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach ($empresas as $slug => $empresa)
                    <a href="{{ route('second', ['first' => 'empresas', 'second' => $slug]) }}"
                       class="group flex items-center gap-6 border border-default-200 hover:border-primary-1 p-6 transition-colors">
                        <div class="shrink-0 size-20 bg-default-950 flex items-center justify-center text-primary-1 [clip-path:polygon(0_0,calc(100%-16px)_0,100%_16px,100%_100%,0_100%)]">
                            <i class="iconify {{ $empresa['icon'] }} size-9"></i>
                        </div>
                        <div class="flex-1">
                            <h2 class="text-xl font-bold text-default-900 group-hover:text-primary-2 transition-colors">
                                {{ $empresa['nombre'] }}
                            </h2>
                            <p class="text-default-500 text-sm mt-1">{{ $empresa['sector'] }} · {{ $empresa['pais'] }}</p>
                            <p class="text-primary-2 font-semibold text-sm mt-2">{{ $empresa['cifra']['valor'] }} — {{ $empresa['cifra']['label'] }}</p>
                        </div>
                        <i class="iconify tabler--chevron-right text-default-400 group-hover:text-primary-2 group-hover:translate-x-1 transition-all size-6 shrink-0"></i>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Empresas con las que trabajamos -->
    <section class="bg-default-50 lg:py-20 py-12">
        <div class="container-full">
            <div class="flex items-end justify-between mb-8">
                <h2 class="text-2xl md:text-3xl font-semibold text-default-900">Empresas con las que trabajamos</h2>
                <span class="text-default-400 font-mono text-sm">07</span>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-7 border border-default-200 divide-x divide-y md:divide-y-0 divide-default-200">
                @foreach ([1, 2, 3, 4, 6, 7, 8] as $n)
                    <div class="aspect-square flex items-center justify-center p-6 bg-white grayscale opacity-70 hover:opacity-100 hover:grayscale-0 transition-all">
                        <img src="/images/clients/clients-logo{{ $n }}.png" alt="Empresa con la que trabajamos (identificación pendiente)"
                             class="max-w-full max-h-full object-contain">
                    </div>
                @endforeach
            </div>
            <p class="text-default-400 text-sm mt-4 max-w-3xl">
                Logos extraídos del sitio actual — falta identificar a qué empresa corresponde cada
                uno y su autorización de uso antes de publicarlos con nombre y link propio.
            </p>
        </div>
    </section>

    <!-- Presencia territorial -->
    <section class="lg:py-20 py-12">
        <div class="container-full">
            <h2 class="text-2xl md:text-3xl font-semibold text-default-900 mb-8">Presencia territorial</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                @foreach ($empresas as $slug => $empresa)
                    <div class="flex items-center gap-3 border border-default-200 p-4">
                        <i class="iconify tabler--map-pin-filled text-primary-2 size-5 shrink-0"></i>
                        <span class="text-default-700 text-sm"><strong>{{ $empresa['nombre'] }}</strong> — {{ $empresa['pais'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('shared.partials.footer')
@endsection
