<!-- Navbar -->
<header>
    <div class="nav-sticky navbar fixed inset-x-0 top-0 z-120 w-full bg-white border-b-2 border-primary-1 transition-all duration-300">
        <div class="container-full lg:py-6 md:py-5 py-2.5">
            <div class="flex items-center gap-25">
                <a class="flex items-center me-auto" href="{{ url('/') }}">
                    <img src="/images/marca/logo-horizontal-claro.png" alt="Grupo GEN — Desarrollo & Inversión" class="h-11 md:h-13 w-auto">
                </a>
                <div class="hidden lg:flex items-center justify-center" id="navbar">
                    <div class="hs-dropdown relative inline-flex [--trigger:hover]">
                        <a class="hs-dropdown-toggle group flex items-center px-5 py-2 text-lg font-medium text-default-800 transition-all hover:text-primary-2"
                           href="{{ url('/') }}">
                            Inicio
                            <i class="iconify tabler--chevron-down size-4 ms-1"></i>
                        </a>
                        <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 mt-1 hidden min-w-40 border border-default-200 bg-white p-1.5 opacity-0 shadow-lg transition-[opacity,margin] duration-300 before:absolute before:start-0 before:-top-3 before:h-3 before:w-full after:absolute after:start-0 after:-bottom-3 after:h-3 after:w-full"
                             role="menu">
                            <a class="block px-4 py-2 text-base font-medium text-default-700 hover:text-primary-2 hover:bg-default-50 transition-colors"
                               href="{{ route('home2') }}">
                                Inicio 2
                            </a>
                        </div>
                    </div>
                    <a class="group flex items-center px-5 py-2 text-lg font-medium text-default-800 transition-all hover:text-primary-2"
                       href="{{ route('second', ['first' => 'grupo', 'second' => 'index']) }}">
                        Quiénes somos
                    </a>
                    <a class="group flex items-center px-5 py-2 text-lg font-medium text-default-800 transition-all hover:text-primary-2"
                       href="{{ route('second', ['first' => 'empresas', 'second' => 'index']) }}">
                        Empresas
                    </a>
                    <a class="group flex items-center px-5 py-2 text-lg font-medium text-default-800 transition-all hover:text-primary-2"
                       href="{{ route('second', ['first' => 'inversiones', 'second' => 'index']) }}">
                        Inversiones
                    </a>
                    <a class="group flex items-center px-5 py-2 text-lg font-medium text-default-800 transition-all hover:text-primary-2"
                       href="{{ route('second', ['first' => 'contacto', 'second' => 'index']) }}">
                        Contacto
                    </a>
                </div>
                <div class="flex items-center justify-end gap-5">
                    <!-- Selector de idioma -->
                    <div class="hidden md:flex items-center border border-default-200 text-sm font-semibold">
                        <a class="px-3 py-1.5 bg-default-900 text-white" href="{{ url()->current() }}">ES</a>
                        <a class="px-3 py-1.5 text-default-600 hover:text-primary-2 transition-colors" href="{{ url('/en'.parse_url(url()->current(), PHP_URL_PATH)) }}">EN</a>
                    </div>
                    <div class="flex items-center lg:hidden">
                        <button aria-controls="mobile-menu" aria-expanded="false" aria-haspopup="dialog"
                                class="inline-flex md:size-14 size-10.5 items-center justify-center bg-transparent border border-default-300 text-base font-medium text-default-900 transition-all"
                                data-hs-overlay="#mobile-menu" type="button">
                            <i class="iconify tabler--align-right size-6"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div aria-labelledby="mobile-menu-label"
         class="hs-overlay hs-overlay-open:trandefault-y-0 md:hs-overlay-open:top-24 hs-overlay-open:top-15 hs-overlay-open:opacity-100 [--body-scroll:true] opacity-0 fixed inset-x-0 top-0 z-110 h-auto -trandefault-y-full transform overflow-hidden bg-white border-b-2 border-primary-1 shadow-xl transition-all duration-300 hidden"
         id="mobile-menu" role="dialog" tabindex="-1">
        <div class="flex max-h-80 flex-col gap-1 divide-y divide-default-100 overflow-y-auto">
            <a class="group flex items-center px-5 py-3 text-base font-medium text-default-800 transition-all hover:text-primary-2"
               href="{{ url('/') }}">
                Inicio
            </a>
            <a class="group flex items-center px-8 py-2 text-sm font-medium text-default-500 transition-all hover:text-primary-2"
               href="{{ route('home2') }}">
                ↳ Inicio 2
            </a>
            <a class="group flex items-center px-5 py-3 text-base font-medium text-default-800 transition-all hover:text-primary-2"
               href="{{ route('second', ['first' => 'grupo', 'second' => 'index']) }}">
                Quiénes somos
            </a>
            <a class="group flex items-center px-5 py-3 text-base font-medium text-default-800 transition-all hover:text-primary-2"
               href="{{ route('second', ['first' => 'empresas', 'second' => 'index']) }}">
                Empresas
            </a>
            <a class="group flex items-center px-5 py-3 text-base font-medium text-default-800 transition-all hover:text-primary-2"
               href="{{ route('second', ['first' => 'inversiones', 'second' => 'index']) }}">
                Inversiones
            </a>
            <a class="group flex items-center px-5 py-3 text-base font-medium text-default-800 transition-all hover:text-primary-2"
               href="{{ route('second', ['first' => 'contacto', 'second' => 'index']) }}">
                Contacto
            </a>
            <div class="flex items-center gap-2 px-5 py-3">
                <span class="text-sm font-semibold text-default-500">Idioma:</span>
                <div class="flex items-center border border-default-200 text-sm font-semibold">
                    <a class="px-3 py-1.5 bg-default-900 text-white" href="#">ES</a>
                    <a class="px-3 py-1.5 text-default-600" href="#">EN</a>
                </div>
            </div>
        </div>
    </div>
</header>
