<!-- Navbar -->
<header>
    <div class="nav-sticky navbar fixed inset-x-0 top-0 z-120 w-full bg-default-950 transition-all duration-300">
        <div class="container-full lg:py-7.5 md:py-5 py-2.5">
            <div class="flex items-center gap-25">
                <a class="flex items-center gap-2.5 me-auto" href="{{ url('/') }}">
                    <span class="flex items-center justify-center bg-primary-1 text-black font-bold text-lg w-10 h-10">G</span>
                    <span class="text-white font-bold text-xl">GEN</span>
                </a>
                <div class="hidden lg:flex items-center justify-center" id="navbar">
                    <a class="group flex items-center px-5 py-2 text-lg font-medium text-white transition-all hover:text-primary"
                       href="{{ url('/') }}">
                        Inicio
                    </a>
                    <a class="group flex items-center px-5 py-2 text-lg font-medium text-white transition-all hover:text-primary"
                       href="{{ route('second', ['first' => 'grupo', 'second' => 'index']) }}">
                        Quiénes somos
                    </a>
                    <a class="group flex items-center px-5 py-2 text-lg font-medium text-white transition-all hover:text-primary"
                       href="{{ route('second', ['first' => 'empresas', 'second' => 'index']) }}">
                        Empresas
                    </a>
                    <a class="group flex items-center px-5 py-2 text-lg font-medium text-white transition-all hover:text-primary"
                       href="{{ route('second', ['first' => 'inversiones', 'second' => 'index']) }}">
                        Inversiones
                    </a>
                </div>
                <div class="flex items-center justify-end gap-4">
                    <a class="underline text-primary decoration-2 underline-offset-4 flex items-center text-lg transition-all hover:text-white md:flex hidden"
                       href="{{ route('second', ['first' => 'contacto', 'second' => 'index']) }}">
                        Contacto
                    </a>
                    <div class="flex items-center lg:hidden">
                        <button aria-controls="mobile-menu" aria-expanded="false" aria-haspopup="dialog"
                                class="inline-flex md:size-14 size-10.5 items-center justify-center bg-transparent border border-white/30 text-base font-medium text-white transition-all"
                                data-hs-overlay="#mobile-menu" type="button">
                            <i class="iconify tabler--align-right size-6"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div aria-labelledby="mobile-menu-label"
         class="hs-overlay hs-overlay-open:trandefault-y-0 md:hs-overlay-open:top-24 hs-overlay-open:top-15 hs-overlay-open:opacity-100 [--body-scroll:true] opacity-0 fixed inset-x-0 top-0 z-110 h-60 -trandefault-y-full transform overflow-hidden bg-default-950 shadow-xl transition-all duration-300 hidden"
         id="mobile-menu" role="dialog" tabindex="-1">
        <div class="flex max-h-60 flex-col gap-1 divide-y divide-default-700 overflow-y-auto">
            <a class="group flex items-center px-5 py-2 text-base font-medium text-white transition-all hover:text-primary"
               href="{{ url('/') }}">
                Inicio
            </a>
            <a class="group flex items-center px-5 py-2 text-base font-medium text-white transition-all hover:text-primary"
               href="{{ route('second', ['first' => 'grupo', 'second' => 'index']) }}">
                Quiénes somos
            </a>
            <a class="group flex items-center px-5 py-2 text-base font-medium text-white transition-all hover:text-primary"
               href="{{ route('second', ['first' => 'empresas', 'second' => 'index']) }}">
                Empresas
            </a>
            <a class="group flex items-center px-5 py-2 text-base font-medium text-white transition-all hover:text-primary"
               href="{{ route('second', ['first' => 'inversiones', 'second' => 'index']) }}">
                Inversiones
            </a>
            <a class="group flex items-center px-5 py-2 text-base font-medium text-white transition-all hover:text-primary"
               href="{{ route('second', ['first' => 'contacto', 'second' => 'index']) }}">
                Contacto
            </a>
        </div>
    </div>
</header>
