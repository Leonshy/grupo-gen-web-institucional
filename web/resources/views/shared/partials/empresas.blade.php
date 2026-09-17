{{-- Nuestras empresas. Pasar ['dark' => true] para la variante oscura. --}}
@php($dark = $dark ?? false)
<section class="lg:py-32.5 md:py-22.5 py-15 {{ $dark ? 'bg-default-950' : 'bg-default-50' }}">
    <div class="container-full relative">
        <!-- Section Title -->
        <div class="text-center lg:mb-16 md:mb-10 mb-2.5">
            <h2 class="text-4xl md:text-5xl lg:text-[76px] font-semibold {{ $dark ? 'text-white' : 'text-default-900' }}">
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
