<!-- Main Wrapper -->
<div class="relative bg-white lg:pb-10 md:pb-6 pb-4 overflow-hidden font-sans">
    <!-- Footer Section -->
    <div class="container-full">
        <footer class="bg-default-950 text-white relative z-10 lg:p-17.5 md:p-7.5 p-3.5">
            <!-- Inner Subtle Glow -->
            <div
                class="absolute bottom-0 left-1/2 -trandefault-x-1/2 w-full h-64 bg-linear-to-t from-primary/5 to-transparent blur-3xl -z-10"></div>
            <!-- Top Section: Logo -->
            <div class="flex items-center gap-3 lg:mb-25 mb-7.5">
                <span class="flex items-center justify-center bg-primary-1 text-black font-bold text-lg w-10 h-10">G</span>
                <span class="text-white font-bold text-xl">GEN</span>
            </div>
            <!-- Main Grid -->
            <div
                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 lg:gap-17.5 gap-7.5 lg:pb-10 pb-5 mb-7.5 lg:mb-12.5 border-b border-default-800">
                <!-- Column 1: Social (Span 2) -->
                <div class="lg:col-span-2 bg-default-900 lg:p-5 p-2.5 lg:order-1 order-3">
                    <div class="flex gap-3">
                        <a class="bg-primary-2 size-7 flex justify-center items-center text-default-950 hover:brightness-110 transition-all"
                           href="https://www.linkedin.com" target="_blank" rel="noopener">
                            <i class="iconify tabler--brand-linkedin w-4 h-4"></i>
                        </a>
                    </div>
                </div>
                <!-- Column 2: Pages (Span 4) -->
                <div class="lg:col-span-4 lg:order-2 order-1">
                    <h4 class="text-2xl text-white font-bold md:mb-5 mb-2.5">Navegación</h4>
                    <div class="space-y-2.5 text-lg text-default-400">
                        <a class="hover:text-primary-1 block" href="{{ url('/') }}">Inicio</a>
                        <a class="hover:text-primary-1 block" href="{{ route('second', ['first' => 'grupo', 'second' => 'index']) }}">Quiénes somos</a>
                        <a class="hover:text-primary-1 block" href="{{ route('second', ['first' => 'empresas', 'second' => 'index']) }}">Empresas</a>
                        <a class="hover:text-primary-1 block" href="{{ route('second', ['first' => 'inversiones', 'second' => 'index']) }}">Inversiones</a>
                        <a class="hover:text-primary-1 block" href="{{ route('second', ['first' => 'contacto', 'second' => 'index']) }}">Contacto</a>
                    </div>
                </div>
                <!-- Column 3: Address (Span 6) -->
                <div class="lg:col-span-6 bg-default-900 md:p-5 p-3 self-start lg:order-4 order-4">
                    <div class="flex items-start gap-2 mb-4">
                        <i class="iconify tabler--map-pin-filled text-primary-2 size-6 brightness-200"></i>
                        <p class="text-default-400 text-lg">Asunción, Paraguay — Avenida Primer Presidente 3508</p>
                    </div>
                    <p class="text-base text-default-500 italic">
                        Dirección en Uruguay pendiente de confirmación del cliente.
                    </p>
                </div>
            </div>
            <!-- Bottom Copyright -->
            <div
                class="flex flex-col md:flex-row md:justify-between justify-start items-center text-sm text-default-400">
                <p class="text-lg text-white">© Grupo GEN — Desarrollo &amp; Inversión</p>
                <p class="text-lg text-start">Uruguay · Paraguay · Argentina</p>
            </div>
        </footer>
    </div>
    <!-- Blur Decoration Background -->
    <div class="absolute inset-x-0 bottom-0 flex opacity-60 z-0 pointer-events-none h-[300px]">
        <div class="w-1/4 h-full bg-linear-to-t from-primary via-primary-2 to-transparent"></div>
        <div class="w-1/4 h-full bg-linear-to-t from-primary via-primary-2 to-transparent"></div>
        <div class="w-1/4 h-full bg-linear-to-t from-primary via-primary-2 to-transparent"></div>
        <div class="w-1/4 h-full bg-linear-to-t from-primary via-primary-2 to-transparent"></div>
        <!-- Blur Overlays (White bars to create the soft separation) -->
        <div class="absolute inset-y-0 left-[20%] w-[15%] h-full bg-white blur-[50px]"></div>
        <div class="absolute inset-y-0 inset-x-0 mx-auto w-[15%] h-full bg-white blur-[50px]"></div>
        <div class="absolute inset-y-0 right-[20%] w-[15%] h-full bg-white blur-[50px]"></div>
    </div>
</div>
