{{-- Hero Propuesta 1 — Foto a pantalla completa --}}
<section class="relative min-h-screen flex flex-col justify-between overflow-hidden bg-default-950">
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
