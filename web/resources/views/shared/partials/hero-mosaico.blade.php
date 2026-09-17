{{-- Hero Propuesta 2 — Mosaico de verticales --}}
<section class="relative bg-default-950 overflow-hidden">
    <!-- Halo verde sutil detrás del mosaico -->
    <div class="absolute top-0 right-0 lg:size-[600px] size-80 bg-primary-1/15 blur-[140px] pointer-events-none"></div>

    <div class="container-full relative z-10 lg:pt-40 pt-28 lg:pb-28 pb-16">
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
