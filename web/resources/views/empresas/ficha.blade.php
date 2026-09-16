@extends('shared.base', ['title' => $empresa['nombre']])

@section('content')
    @include('shared.partials.navbar')
    @include('shared.partials.breadcrumb', ['items' => [
        ['label' => 'Inicio', 'url' => url('/')],
        ['label' => 'Empresas', 'url' => route('second', ['first' => 'empresas', 'second' => 'index'])],
        ['label' => $empresa['nombre']],
    ]])

    <section class="lg:pt-10 pt-4 lg:pb-24 pb-14">
        <div class="container-full">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <div class="lg:col-span-2">
                    <span class="inline-block bg-primary-1 text-black text-xs font-bold uppercase tracking-wide px-3 py-1 mb-5">
                        {{ $empresa['sector'] }}
                    </span>
                    <h1 class="text-4xl md:text-6xl font-semibold text-default-900 leading-tight mb-6">
                        {{ $empresa['nombre'] }}
                    </h1>
                    <p class="text-lg text-default-600 leading-relaxed mb-8">
                        {{ $empresa['descripcion'] }}
                    </p>
                    <dl class="grid grid-cols-2 sm:grid-cols-3 gap-6 border-t border-default-200 pt-6">
                        <div>
                            <dt class="text-default-400 text-xs uppercase tracking-wide">Razón social</dt>
                            <dd class="text-default-900 font-medium mt-1">{{ $empresa['razon_social'] }}</dd>
                        </div>
                        <div>
                            <dt class="text-default-400 text-xs uppercase tracking-wide">País</dt>
                            <dd class="text-default-900 font-medium mt-1">{{ $empresa['pais'] }}</dd>
                        </div>
                        @if (!empty($empresa['sitio_propio']))
                            <div>
                                <dt class="text-default-400 text-xs uppercase tracking-wide">Sitio propio</dt>
                                <dd class="text-default-900 font-medium mt-1">{{ $empresa['sitio_propio'] }}</dd>
                            </div>
                        @endif
                    </dl>
                </div>
                <div class="flex flex-col gap-4">
                    <div class="aspect-square bg-default-950 flex flex-col items-center justify-center gap-3 text-white [clip-path:polygon(0_0,calc(100%-32px)_0,100%_32px,100%_100%,0_100%)]">
                        <i class="iconify {{ $empresa['icon'] }} size-16 text-primary-1"></i>
                        <div class="text-center">
                            <span class="block text-3xl font-bold">{{ $empresa['cifra']['valor'] }}</span>
                            <span class="text-default-400 text-sm uppercase tracking-wide">{{ $empresa['cifra']['label'] }}</span>
                        </div>
                    </div>
                    @if (count($empresa['verticales']) > 0)
                        <div class="border border-default-200 p-5">
                            <span class="text-default-400 text-xs uppercase tracking-wide">Verticales</span>
                            <div class="flex flex-wrap gap-2 mt-3">
                                @foreach ($empresa['verticales'] as $verticalSlug)
                                    @php($vertical = config('contenido.verticales.' . $verticalSlug))
                                    <a href="{{ route('second', ['first' => 'inversiones', 'second' => $verticalSlug]) }}"
                                       class="text-sm font-medium text-primary-2 hover:text-default-900 border border-default-200 hover:border-primary-1 px-3 py-1.5 transition-colors">
                                        {{ $vertical['nombre'] ?? $verticalSlug }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="lg:py-20 py-12 text-center">
        <div class="container">
            <a class="bg-primary-1 text-black font-medium px-5 py-3.5 hover:bg-primary-2 transition-all text-lg inline-block"
               href="{{ route('second', ['first' => 'empresas', 'second' => 'index']) }}">
                Ver todas las empresas
            </a>
        </div>
    </section>

    @include('shared.partials.footer')
@endsection
