@extends('shared.base', ['title' => 'Contacto'])

@section('content')
    @include('shared.partials.navbar')
    @include('shared.partials.breadcrumb', ['items' => [
        ['label' => 'Inicio', 'url' => url('/')],
        ['label' => 'Contacto'],
    ]])

    <section class="lg:pt-10 pt-4 lg:pb-24 pb-14">
        <div class="container-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-14">
                <div>
                    <h1 class="text-4xl md:text-6xl font-semibold text-default-900 leading-tight mb-6">
                        Contacto
                    </h1>
                    <p class="text-lg text-default-600 leading-relaxed mb-10 max-w-lg">
                        Escribinos y te respondemos a la brevedad. No publicamos teléfono ni WhatsApp
                        — este formulario es el canal directo con el grupo.
                    </p>

                    <div class="flex flex-col gap-6">
                        <div class="flex items-start gap-3">
                            <i class="iconify tabler--map-pin-filled text-primary-2 size-5 mt-1 shrink-0"></i>
                            <div>
                                <h3 class="font-bold text-default-900">Asunción, Paraguay</h3>
                                <p class="text-default-600">Avenida Primer Presidente 3508</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="iconify tabler--map-pin text-default-400 size-5 mt-1 shrink-0"></i>
                            <div>
                                <h3 class="font-bold text-default-500">Uruguay</h3>
                                <p class="text-default-400 italic">Dirección pendiente de confirmación</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="iconify tabler--mail text-primary-2 size-5 mt-1 shrink-0"></i>
                            <div>
                                <h3 class="font-bold text-default-900">Correo</h3>
                                <p class="text-default-600">info@grupo-gen.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <form class="flex flex-col gap-5 border border-default-200 p-8">
                    <div>
                        <label class="block text-sm font-medium text-default-700 mb-2">Nombre</label>
                        <input type="text" class="w-full border border-default-300 px-4 py-3 focus:outline-none focus:border-primary-1" placeholder="Tu nombre">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-default-700 mb-2">Correo electrónico</label>
                        <input type="email" class="w-full border border-default-300 px-4 py-3 focus:outline-none focus:border-primary-1" placeholder="tu@correo.com">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-default-700 mb-2">Asunto</label>
                        <input type="text" class="w-full border border-default-300 px-4 py-3 focus:outline-none focus:border-primary-1" placeholder="¿En qué podemos ayudarte?">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-default-700 mb-2">Mensaje</label>
                        <textarea rows="5" class="w-full border border-default-300 px-4 py-3 focus:outline-none focus:border-primary-1" placeholder="Contanos más..."></textarea>
                    </div>
                    <button type="submit" class="bg-primary-1 hover:bg-primary-2 text-black font-medium py-3.5 transition-all text-lg">
                        Enviar mensaje
                    </button>
                </form>
            </div>
        </div>
    </section>

    @include('shared.partials.footer')
@endsection
