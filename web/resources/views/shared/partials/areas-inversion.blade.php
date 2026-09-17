{{-- Áreas de inversión — grilla 3x3. Pasar ['dark' => false] para la variante clara. --}}
@php($dark = $dark ?? true)
<section class="lg:py-32.5 md:py-22.5 py-15 {{ $dark ? 'bg-default-950' : 'bg-white' }}">
    <div class="container-full">
        <div class="flex md:flex-row flex-col md:items-end justify-between gap-6 mb-12.5">
            <div>
                <h2 class="text-4xl md:text-5xl lg:text-[76px] font-semibold leading-tight {{ $dark ? 'text-white' : 'text-default-900' }}">
                    Áreas de inversión
                </h2>
                <p class="text-lg mt-3 {{ $dark ? 'text-default-400' : 'text-default-500' }}">Nueve verticales, tres países.</p>
            </div>
            <a class="inline-block bg-primary-1 hover:bg-primary-2 text-black font-medium px-5 py-3.5 transition shrink-0"
               href="{{ route('second', ['first' => 'inversiones', 'second' => 'index']) }}">
                Ver todas las inversiones
            </a>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach (config('contenido.verticales') as $slug => $vertical)
                <a href="{{ route('second', ['first' => 'inversiones', 'second' => $slug]) }}"
                   class="area-card p-3 flex flex-col group transition-all {{ $dark ? 'bg-default-900 hover:bg-default-800' : 'bg-default-50 hover:bg-default-100 border border-default-200 hover:border-primary-1' }}">
                    @if (!empty($vertical['imagen']))
                        <div class="relative overflow-hidden aspect-square [clip-path:polygon(0_0,calc(100%-24px)_0,100%_24px,100%_100%,0_100%)]">
                            <img src="/images/{{ $vertical['imagen'] }}" alt="{{ $vertical['nombre'] }}"
                                 class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
                            <i class="iconify {{ $vertical['icon'] }} absolute top-3 left-3 text-primary-1 size-8"></i>
                        </div>
                    @else
                        <div class="overflow-hidden aspect-square bg-{{ $vertical['color'] }} flex items-center justify-center {{ $vertical['color'] === 'white' ? 'text-default-900' : 'text-black' }} [clip-path:polygon(0_0,calc(100%-24px)_0,100%_24px,100%_100%,0_100%)]">
                            <i class="iconify {{ $vertical['icon'] }} size-14 transition-transform group-hover:scale-110"></i>
                        </div>
                    @endif
                    <h3 class="text-xl font-bold mt-4 px-1 pb-1 {{ $dark ? 'text-white' : 'text-default-900' }}">{{ $vertical['nombre'] }}</h3>
                </a>
            @endforeach
        </div>
    </div>
</section>
