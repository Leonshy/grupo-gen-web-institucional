@extends('shared.base', ['title' => 'Inversiones'])

@php
    $verticales = config('contenido.verticales');
@endphp

@section('content')
    @include('shared.partials.navbar')
    @include('shared.partials.breadcrumb', ['items' => [
        ['label' => 'Inicio', 'url' => url('/')],
        ['label' => 'Inversiones'],
    ]])

    <section class="lg:pt-10 pt-4 pb-10">
        <div class="container-full">
            <h1 class="text-4xl md:text-6xl font-semibold text-default-900 leading-tight max-w-2xl">
                Áreas de inversión
            </h1>
            <p class="text-lg text-default-600 mt-4 max-w-2xl">
                Ocho verticales, tres países. Minería, energía, forestación, transporte fluvial,
                puertos, bienes raíces, construcción y electrodomésticos.
            </p>
        </div>
    </section>

    <section class="bg-default-950 lg:py-20 py-12">
        <div class="container-full">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($verticales as $slug => $vertical)
                    <a href="{{ route('second', ['first' => 'inversiones', 'second' => $slug]) }}"
                       class="area-card bg-default-900 p-3 flex flex-col group transition-all hover:bg-default-800">
                        <div class="overflow-hidden aspect-square bg-{{ $vertical['color'] }} flex items-center justify-center {{ $vertical['color'] === 'white' ? 'text-default-900' : 'text-black' }} [clip-path:polygon(0_0,calc(100%-24px)_0,100%_24px,100%_100%,0_100%)]">
                            <i class="iconify {{ $vertical['icon'] }} size-14 transition-transform group-hover:scale-110"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mt-4 px-1 pb-1">{{ $vertical['nombre'] }}</h3>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    @include('shared.partials.footer')
@endsection
