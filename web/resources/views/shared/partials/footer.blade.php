<!-- Main Wrapper -->
<div class="relative bg-white overflow-hidden font-sans">
    <!-- Footer Section -->
    <footer class="bg-default-950 text-white relative z-10">
        <div class="container-full lg:pt-20 pt-12 lg:pb-10 pb-6">
            <!-- Main Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 lg:gap-12 gap-10 lg:pb-14 pb-10 mb-10 border-b border-default-800">
                <!-- Column 1: Brand -->
                <div class="flex flex-col gap-5">
                    <img src="/images/marca/logo-horizontal-oscuro.png" alt="Grupo GEN — Desarrollo & Inversión" class="h-14 w-auto self-start">
                    <p class="text-default-400 text-base leading-relaxed max-w-xs">
                        Holding con operaciones reales en minería, energía, forestación, transporte
                        fluvial y bienes raíces, en Uruguay, Paraguay y Argentina.
                    </p>
                    <a class="inline-flex bg-default-900 hover:bg-primary-1 hover:text-default-950 size-9 items-center justify-center text-white transition-colors"
                       href="https://www.linkedin.com" target="_blank" rel="noopener" aria-label="LinkedIn">
                        <i class="iconify tabler--brand-linkedin size-4.5"></i>
                    </a>
                </div>
                <!-- Column 2: Navegación -->
                <div>
                    <h4 class="text-sm font-bold text-default-400 uppercase tracking-wide mb-5">Navegación</h4>
                    <div class="flex flex-col gap-3 text-base text-default-200">
                        <a class="hover:text-primary-1 transition-colors w-fit" href="{{ url('/') }}">Inicio</a>
                        <a class="hover:text-primary-1 transition-colors w-fit" href="{{ route('second', ['first' => 'grupo', 'second' => 'index']) }}">Quiénes somos</a>
                        <a class="hover:text-primary-1 transition-colors w-fit" href="{{ route('second', ['first' => 'empresas', 'second' => 'index']) }}">Empresas</a>
                        <a class="hover:text-primary-1 transition-colors w-fit" href="{{ route('second', ['first' => 'inversiones', 'second' => 'index']) }}">Inversiones</a>
                        <a class="hover:text-primary-1 transition-colors w-fit" href="{{ route('second', ['first' => 'contacto', 'second' => 'index']) }}">Contacto</a>
                    </div>
                </div>
                <!-- Column 3: Contacto -->
                <div>
                    <h4 class="text-sm font-bold text-default-400 uppercase tracking-wide mb-5">Contacto</h4>
                    <div class="flex flex-col gap-4 text-base">
                        <div class="flex items-start gap-2.5">
                            <i class="iconify tabler--map-pin-filled text-primary-1 size-5 mt-0.5 shrink-0"></i>
                            <p class="text-default-200">Asunción, Paraguay<br>Avenida Primer Presidente 3508</p>
                        </div>
                        <div class="flex items-start gap-2.5">
                            <i class="iconify tabler--map-pin text-default-600 size-5 mt-0.5 shrink-0"></i>
                            <p class="text-default-500 italic text-sm">Dirección en Uruguay<br>pendiente de confirmación</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bottom Copyright -->
            <div class="flex flex-col-reverse md:flex-row md:justify-between gap-3 items-center text-sm text-default-500">
                <p>© {{ date('Y') }} Grupo GEN — Desarrollo &amp; Inversión</p>
                <p>Uruguay · Paraguay · Argentina</p>
            </div>
        </div>
    </footer>
</div>
