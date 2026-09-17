@extends('shared.base', ['title' => 'Quiénes somos'])

@section('content')
    @include('shared.partials.navbar')
    @include('shared.partials.breadcrumb', ['items' => [
        ['label' => 'Inicio', 'url' => url('/')],
        ['label' => 'Quiénes somos'],
    ]])

    <section class="lg:pt-10 pt-4 lg:pb-24 pb-14">
        <div class="container-full">
            <h1 class="text-4xl md:text-6xl font-semibold text-default-900 leading-tight max-w-3xl mb-10">
                Un holding con operaciones reales, no solo participaciones financieras.
            </h1>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <div class="lg:col-span-2 flex flex-col gap-5 text-lg text-default-600 leading-relaxed">
                    <p>
                        Grupo GEN es un holding de origen uruguayo con operaciones reales en Uruguay,
                        Paraguay y Argentina. No es una empresa: es un conjunto de sociedades
                        participadas —Dialeca S.A. en minería y construcción, Viagen S.A. en
                        transporte fluvial, Lumiganor S.A. en energía y Vía Confort en
                        electrodomésticos, entre otras— que despliegan capital en sectores
                        productivos con activos medibles: 190.000 hectáreas forestales en el Chaco
                        paraguayo, más de 5.800 hectáreas de propiedad minera con una reserva de
                        hierro de 50 millones de toneladas probadas de magnetita, una planta de
                        biomasa de 11,4 MW, dos puertos propios sobre la Hidrovía, una flota de seis
                        remolcadores y tres barcazas, y una cartera inmobiliaria que incluye varios
                        fraccionamientos y un shopping en Fernando de la Mora.
                    </p>
                    <p>
                        El grupo abrió una dirección comercial en Asunción, Avenida Primer Presidente
                        3508, que acompaña una operación paraguaya en crecimiento e integra minería,
                        transporte fluvial, puertos y desarrollo forestal con la base histórica
                        uruguaya.
                    </p>
                    <p>
                        Cada empresa participada opera con nombre propio y responsabilidad sobre su
                        sector; el holding coordina la estrategia de conjunto y la asignación de
                        capital entre las verticales de minería, energía, forestación, transporte
                        fluvial, puertos, bienes raíces, construcción y electrodomésticos, con agro
                        como línea en desarrollo.
                    </p>
                </div>
                <div class="flex flex-col gap-4">
                    <a href="{{ route('second', ['first' => 'empresas', 'second' => 'index']) }}"
                       class="block border border-default-200 hover:border-primary-1 p-6 transition-colors group">
                        <i class="iconify tabler--building-skyscraper text-primary-2 size-8 mb-3"></i>
                        <h3 class="text-lg font-bold text-default-900 group-hover:text-primary-2 transition-colors">Empresas del holding</h3>
                        <p class="text-default-500 text-sm mt-1">Conocé cada sociedad participada</p>
                    </a>
                    <a href="{{ route('second', ['first' => 'inversiones', 'second' => 'index']) }}"
                       class="block border border-default-200 hover:border-primary-1 p-6 transition-colors group">
                        <i class="iconify tabler--chart-arrows text-primary-2 size-8 mb-3"></i>
                        <h3 class="text-lg font-bold text-default-900 group-hover:text-primary-2 transition-colors">Áreas de inversión</h3>
                        <p class="text-default-500 text-sm mt-1">Nueve verticales, tres países</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Cifras del grupo -->
    <section class="bg-default-950 lg:py-20 py-12">
        <div class="container-full">
            <h2 class="text-white text-2xl md:text-3xl font-semibold mb-10">Activos medibles, no promesas</h2>
            <div class="grid grid-cols-2 lg:grid-cols-4 divide-y divide-default-800 lg:divide-y-0 lg:divide-x border border-default-800">
                <div class="lg:p-10 p-6">
                    <span class="block w-10 h-1 bg-primary-1 mb-4"></span>
                    <span class="block lg:text-5xl text-3xl font-bold text-white mb-1">190.000</span>
                    <span class="text-default-400 text-sm uppercase tracking-wide">ha forestales</span>
                </div>
                <div class="lg:p-10 p-6">
                    <span class="block w-10 h-1 bg-primary-1 mb-4"></span>
                    <span class="block lg:text-5xl text-3xl font-bold text-white mb-1">50 M t</span>
                    <span class="text-default-400 text-sm uppercase tracking-wide">reserva de hierro (magnetita)</span>
                </div>
                <div class="lg:p-10 p-6">
                    <span class="block w-10 h-1 bg-primary-1 mb-4"></span>
                    <span class="block lg:text-5xl text-3xl font-bold text-white mb-1">11,4 MW</span>
                    <span class="text-default-400 text-sm uppercase tracking-wide">planta de biomasa</span>
                </div>
                <div class="lg:p-10 p-6">
                    <span class="block w-10 h-1 bg-primary-1 mb-4"></span>
                    <span class="block lg:text-5xl text-3xl font-bold text-white mb-1">2</span>
                    <span class="text-default-400 text-sm uppercase tracking-wide">puertos propios sobre la Hidrovía</span>
                </div>
            </div>
        </div>
    </section>

    <section class="lg:py-24 py-14 text-center">
        <div class="container">
            <h2 class="text-3xl md:text-5xl font-semibold text-default-900 mb-5">
                Uruguay, Paraguay y Argentina
            </h2>
            <p class="text-lg text-default-600 max-w-2xl mx-auto mb-10">
                Base histórica en Uruguay, oficina comercial en Asunción y desarrollos en expansión
                en la región.
            </p>
            <a class="bg-primary-1 text-black font-medium px-5 py-3.5 hover:bg-primary-2 transition-all text-lg inline-block"
               href="{{ route('second', ['first' => 'contacto', 'second' => 'index']) }}">
                Contacto
            </a>
        </div>
    </section>

    @include('shared.partials.footer')
@endsection
