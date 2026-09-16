<!-- Navbar -->
<header>
    <div class="nav-sticky navbar fixed inset-x-0 top-0 z-120 w-full bg-default-950 transition-all duration-300">
        <div class="container-full lg:py-7.5 md:py-5 py-2.5">
            <div class="flex items-center gap-25">
                <a class="flex items-center me-auto" href="{{ url('/') }}">
                    <img class="md:h-10.5 h-10" src="/images/logo.svg"/>
                </a>
                <div class="hidden lg:flex items-center justify-center" id="navbar">
                    <a class="group flex items-center px-5 py-2 text-lg font-medium text-white transition-all hover:text-primary"
                       href="{{ url('/') }}">
                        Home
                    </a>
                    <a class="group flex items-center px-5 py-2 text-lg font-medium text-white transition-all hover:text-primary"
                       href="{{ url('/about') }}">
                        About
                    </a>
                    <a class="group flex items-center px-5 py-2 text-lg font-medium text-white transition-all hover:text-primary"
                       href="{{ url('/workspace') }}">
                        Workspace
                    </a>
                    <a class="group flex items-center px-5 py-2 text-lg font-medium text-white transition-all hover:text-primary"
                       href="{{ url('/pricing') }}">
                        Pricing
                    </a>
                    <div class="hs-dropdown relative inline-flex [--trigger:hover]">
                        <button aria-expanded="false" aria-haspopup="menu" aria-label="Dropdown"
                                class="hs-dropdown-toggle group flex items-center px-5 py-2 text-lg font-medium text-white transition-all hover:text-primary"
                                type="button">
                            Pages
                            <i class="iconify tabler--chevron-down ms-0.5"></i>
                        </button>
                        <div aria-orientation="vertical"
                             class="hs-dropdown-menu hs-dropdown-open:opacity-100 mt-2 hidden w-45 rounded-lg border border-default-800 bg-default-950 p-2 opacity-0 transition-[opacity,margin] duration-300 before:absolute before:start-0 before:-top-4 before:h-4 before:w-full after:absolute after:start-0 after:-bottom-4 after:h-4 after:w-full"
                             role="menu">
                            <div class="flex flex-col gap-1">
                                <a class="block rounded-sm px-3 py-1 text-lg font-normal text-default-400 hover:text-primary"
                                   href="{{ url('/') }}">Home</a>
                                <a class="block rounded-sm px-3 py-1 text-lg font-normal text-default-400 hover:text-primary"
                                   href="{{ url('/workspace') }}">Workspace</a>
                                <a class="block rounded-sm px-3 py-1 text-lg font-normal text-default-400 hover:text-primary"
                                   href="{{ url('/locations') }}">Locations</a>
                                <a class="block rounded-sm px-3 py-1 text-lg font-normal text-default-400 hover:text-primary"
                                   href="{{ url('/about') }}">About</a>
                                <a class="block rounded-sm px-3 py-1 text-lg font-normal text-default-400 hover:text-primary"
                                   href="{{ url('/pricing') }}">Pricing</a>
                                <a class="block rounded-sm px-3 py-1 text-lg font-normal text-default-400 hover:text-primary"
                                   href="{{ url('/gallery') }}">Gallery</a>
                                <a class="block rounded-sm px-3 py-1 text-lg font-normal text-default-400 hover:text-primary"
                                   href="{{ url('/event') }}">Event</a>
                                <a class="block rounded-sm px-3 py-1 text-lg font-normal text-default-400 hover:text-primary"
                                   href="{{ url('/blog') }}">Blog</a>
                                <a class="block rounded-sm px-3 py-1 text-lg font-normal text-default-400 hover:text-primary"
                                   href="{{ url('/contact') }}">Contact</a>
                                <a class="block rounded-sm px-3 py-1 text-lg font-normal text-default-400 hover:text-primary"
                                   href="{{ url('/privacy-policy') }}">Privacy Policy</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-end gap-4">
                    <a class="underline text-primary decoration-2 underline-offset-4 flex items-center text-lg transition-all hover:text-white md:flex hidden"
                       href="{{ url('/contact') }}">
                        Contact now
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
                Home
            </a>
            <a class="group flex items-center px-5 py-2 text-base font-medium text-white transition-all hover:text-primary"
               href="{{ url('/about') }}">
                About
            </a>
            <a class="group flex items-center px-5 py-2 text-base font-medium text-white transition-all hover:text-primary"
               href="services.html">
                Services
            </a>
            <a class="group flex items-center px-5 py-2 text-base font-medium text-white transition-all hover:text-primary"
               href="{{ url('/contact') }}">
                Contact
            </a>
            <div class="hs-accordion">
                <button aria-expanded="false" aria-haspopup="menu" aria-label="Dropdown"
                        class="hs-accordion-toggle group flex items-center px-5 py-2 text-base font-medium text-white transition-all hover:text-primary"
                        type="button">
                    Pages
                    <i class="iconify tabler--chevron-down ms-4"></i>
                </button>
                <div class="hs-accordion-content hidden w-full overflow-hidden ps-5 pb-4 transition-[height]">
                    <a class="block rounded-sm px-3 py-2 text-lg font-normal text-default-400 hover:text-primary"
                       href="{{ url('/') }}">Home</a>
                    <a class="block rounded-sm px-3 py-2 text-lg font-normal text-default-400 hover:text-primary"
                       href="{{ url('/workspace') }}">Workspace</a>
                    <a class="block rounded-sm px-3 py-2 text-lg font-normal text-default-400 hover:text-primary"
                       href="{{ url('/locations') }}">Locations</a>
                    <a class="block rounded-sm px-3 py-2 text-lg font-normal text-default-400 hover:text-primary"
                       href="{{ url('/about') }}">About</a>
                    <a class="block rounded-sm px-3 py-2 text-lg font-normal text-default-400 hover:text-primary"
                       href="{{ url('/pricing') }}">Pricing</a>
                    <a class="block rounded-sm px-3 py-2 text-lg font-normal text-default-400 hover:text-primary"
                       href="{{ url('/gallery') }}">Gallery</a>
                    <a class="block rounded-sm px-3 py-2 text-lg font-normal text-default-400 hover:text-primary"
                       href="{{ url('/event') }}">Event</a>
                    <a class="block rounded-sm px-3 py-2 text-lg font-normal text-default-400 hover:text-primary"
                       href="{{ url('/contact') }}">Contact</a>
                    <a class="block rounded-sm px-3 py-2 text-lg font-normal text-default-400 hover:text-primary"
                       href="{{ url('/privacy-policy') }}">Privacy Policy</a>
                </div>
            </div>
        </div>
    </div>
</header>
