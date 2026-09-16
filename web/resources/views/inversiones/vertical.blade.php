@extends('shared.base', ['title' => $vertical['nombre']])

@section('content')
    @include('shared.partials.navbar')
    @include('shared.partials.breadcrumb', ['items' => [
        ['label' => 'Inicio', 'url' => url('/')],
        ['label' => 'Inversiones', 'url' => route('second', ['first' => 'inversiones', 'second' => 'index'])],
        ['label' => $vertical['nombre']],
    ]])

    <section class="lg:pt-10 pt-4 lg:pb-16 pb-10">
        <div class="container-full">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-start">
                <div class="lg:col-span-2">
                    <h1 class="text-4xl md:text-6xl font-semibold text-default-900 leading-tight mb-6">
                        {{ $vertical['nombre'] }}
                    </h1>
                    <p class="text-lg text-default-600 leading-relaxed">
                        {{ $vertical['resumen'] }}
                    </p>
                </div>
                <div class="aspect-square bg-default-950 flex items-center justify-center text-primary-1 [clip-path:polygon(0_0,calc(100%-32px)_0,100%_32px,100%_100%,0_100%)]">
                    <i class="iconify {{ $vertical['icon'] }} size-20"></i>
                </div>
            </div>
        </div>
    </section>

    @if ($proyectos->count() > 0)
        <section class="bg-default-50 lg:py-20 py-12">
            <div class="container-full">
                <div class="flex items-end justify-between mb-8">
                    <h2 class="text-2xl md:text-3xl font-semibold text-default-900">Proyectos</h2>
                    <span class="text-default-400 font-mono text-sm">{{ str_pad($proyectos->count(), 2, '0', STR_PAD_LEFT) }}</span>
                </div>
                <div class="flex flex-col divide-y divide-default-200 border-y border-default-200">
                    @foreach ($proyectos as $proyecto)
                        <a href="{{ route('third', ['first' => 'inversiones', 'second' => $vertical['slug'], 'third' => $proyecto['slug']]) }}"
                           class="group flex flex-col sm:flex-row sm:items-center gap-3 py-6 hover:bg-white transition-colors px-2">
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-default-900 group-hover:text-primary-2 transition-colors">
                                    {{ $proyecto['nombre'] }}
                                </h3>
                                @if (!empty($proyecto['ubicacion']))
                                    <p class="text-default-500 text-sm mt-1">{{ $proyecto['ubicacion'] }}</p>
                                @endif
                            </div>
                            @if (!empty($proyecto['estado']))
                                <span class="text-xs font-semibold uppercase tracking-wide text-primary-2 border border-primary-1 px-3 py-1 shrink-0">
                                    {{ $proyecto['estado'] }}
                                </span>
                            @endif
                            <i class="iconify tabler--chevron-right text-default-400 group-hover:text-primary-2 group-hover:translate-x-1 transition-all size-6 shrink-0"></i>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <section class="lg:py-16 py-10 text-center">
        <div class="container">
            <a class="bg-primary-1 text-black font-medium px-5 py-3.5 hover:bg-primary-2 transition-all text-lg inline-block"
               href="{{ route('second', ['first' => 'inversiones', 'second' => 'index']) }}">
                Ver todas las inversiones
            </a>
        </div>
    </section>

    @include('shared.partials.footer')
@endsection
