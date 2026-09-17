<section class="lg:py-32.5 md:py-22.5 py-15">
    <!-- Container for centering content -->
    <div class="container text-center">
        <!-- Headline -->
        <h2 class="text-3xl md:text-5xl lg:text-[76px] font-semibold text-default-900 leading-tight tracking-tight lg:mb-6.5 mb-2.5">
            Un holding con activos reales, medibles y verificables
        </h2>
        <!-- Description -->
        <p class="text-lg text-default-600 lg:mb-12.5 mb-5 font-medium lg:max-w-[60%] mx-auto leading-relaxed">
            Conocé en detalle cada empresa del grupo y las verticales en las que invertimos en
            Uruguay, Paraguay y Argentina.
        </p>
        <!-- Button Group -->
        <div class="flex flex-row items-center justify-center md:gap-12.5 gap-5">
            <!-- Primary Action -->
            <a class="bg-primary-1 text-black font-medium px-5 py-3.5 hover:bg-primary-2 transition-all text-lg"
               href="{{ route('second', ['first' => 'empresas', 'second' => 'index']) }}">
                Ver empresas
            </a>
            <!-- Link Action -->
            <a class="group flex items-center gap-2 text-black hover:text-primary-3 font-medium text-lg underline hover:opacity-70 transition-all"
               href="{{ route('second', ['first' => 'contacto', 'second' => 'index']) }}">
                Contacto
            </a>
        </div>
    </div>
</section>
