@extends('shared.base', ['title' => $proyecto['nombre']])

@section('content')
    @include('shared.partials.navbar')
    @include('shared.partials.breadcrumb', ['items' => [
        ['label' => 'Inicio', 'url' => url('/')],
        ['label' => 'Inversiones', 'url' => route('second', ['first' => 'inversiones', 'second' => 'index'])],
        ['label' => $vertical['nombre'], 'url' => route('second', ['first' => 'inversiones', 'second' => $vertical['slug']])],
        ['label' => $proyecto['nombre']],
    ]])

    <section class="lg:pt-10 pt-4 lg:pb-16 pb-10">
        <div class="container-full">
            <div class="flex flex-wrap items-center gap-3 mb-6">
                <span class="inline-block bg-default-950 text-white text-xs font-bold uppercase tracking-wide px-3 py-1">
                    {{ $vertical['nombre'] }}
                </span>
                @if (!empty($proyecto['estado']))
                    <span class="inline-block border border-primary-1 text-primary-2 text-xs font-bold uppercase tracking-wide px-3 py-1">
                        {{ $proyecto['estado'] }}
                    </span>
                @endif
            </div>
            <h1 class="text-4xl md:text-6xl font-semibold text-default-900 leading-tight max-w-4xl mb-6">
                {{ $proyecto['nombre'] }}
            </h1>
            <div class="flex flex-wrap gap-x-8 gap-y-2 text-default-600">
                @if (!empty($proyecto['ubicacion']))
                    <span class="flex items-center gap-2">
                        <i class="iconify tabler--map-pin-filled text-primary-2 size-4.5"></i>
                        {{ $proyecto['ubicacion'] }}
                    </span>
                @endif
                @if ($empresa)
                    <a href="{{ route('second', ['first' => 'empresas', 'second' => $empresa['slug']]) }}"
                       class="flex items-center gap-2 hover:text-primary-2 transition-colors">
                        <i class="iconify tabler--building-skyscraper text-primary-2 size-4.5"></i>
                        {{ $empresa['nombre'] }}
                    </a>
                @endif
            </div>
        </div>
    </section>

    <section class="lg:pb-24 pb-14">
        <div class="container-full">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <div class="lg:col-span-2 flex flex-col gap-5 text-lg text-default-600 leading-relaxed">
                    @foreach ($proyecto['descripcion'] as $parrafo)
                        <p>{{ $parrafo }}</p>
                    @endforeach

                    @if (!empty($proyecto['tabla']))
                        <div class="overflow-x-auto mt-4 border border-default-200">
                            <table class="w-full text-sm text-left">
                                <thead class="bg-default-50 text-default-500 uppercase text-xs tracking-wide">
                                    <tr>
                                        @foreach ($proyecto['tabla']['encabezados'] as $encabezado)
                                            <th class="px-4 py-3 font-semibold">{{ $encabezado }}</th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-default-200">
                                    @foreach ($proyecto['tabla']['filas'] as $fila)
                                        <tr>
                                            @foreach ($fila as $celda)
                                                <td class="px-4 py-3 text-default-700">{{ $celda }}</td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif

                    @if (!empty($proyecto['documentos']))
                        <div class="mt-4 border-t border-default-200 pt-5">
                            <span class="text-default-400 text-xs uppercase tracking-wide">Documentos disponibles</span>
                            <ul class="flex flex-col gap-2 mt-3">
                                @foreach ($proyecto['documentos'] as $documento)
                                    <li class="flex items-center gap-2 text-default-700 text-base">
                                        <i class="iconify tabler--file-text text-primary-2 size-5"></i>
                                        {{ $documento }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>

                <div class="flex flex-col gap-4">
                    @if (!empty($proyecto['cifras']))
                        @foreach ($proyecto['cifras'] as $cifra)
                            <div class="border border-default-200 p-6">
                                <span class="block w-8 h-1 bg-primary-1 mb-3"></span>
                                <span class="block text-3xl font-bold text-default-900">{{ $cifra['valor'] }}</span>
                                <span class="text-default-500 text-sm uppercase tracking-wide">{{ $cifra['label'] }}</span>
                            </div>
                        @endforeach
                    @endif
                    @if (!empty($proyecto['sitio_propio']))
                        <div class="border border-default-200 p-6">
                            <span class="text-default-400 text-xs uppercase tracking-wide">Sitio propio</span>
                            <p class="text-default-900 font-medium mt-1">{{ $proyecto['sitio_propio'] }}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="lg:py-16 py-10 text-center bg-default-50">
        <div class="container">
            <a class="bg-primary-1 text-black font-medium px-5 py-3.5 hover:bg-primary-2 transition-all text-lg inline-block"
               href="{{ route('second', ['first' => 'inversiones', 'second' => $vertical['slug']]) }}">
                Ver más proyectos de {{ $vertical['nombre'] }}
            </a>
        </div>
    </section>

    @include('shared.partials.footer')
@endsection
