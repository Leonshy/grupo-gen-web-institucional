{{--
    Banner de página interna, uniforme para Quiénes somos / Empresas / Inversiones.
    Props: $image (ruta bajo /images/...), $title, $subtitle (opcional), $items (breadcrumb)
--}}
@php($items = $items ?? [])
<section class="relative overflow-hidden bg-default-950 border-b-4 border-primary-1">
    <img src="/images/{{ $image }}" alt="" class="absolute inset-0 w-full h-full object-cover object-center">
    <div class="absolute inset-0 bg-gradient-to-t from-black/92 via-black/45 to-black/25"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-black/75 via-black/25 to-transparent"></div>

    <div class="container-full relative z-10 flex flex-col justify-end min-h-[300px] md:min-h-[380px] lg:min-h-[440px] lg:pt-40 md:pt-32 pt-24 pb-10 lg:pb-14">
        @if (count($items))
            <nav class="flex flex-wrap items-center gap-2 text-sm text-white/60 mb-5">
                @foreach ($items as $item)
                    @if (!$loop->last)
                        <a href="{{ $item['url'] }}" class="hover:text-primary-1 transition-colors">{{ $item['label'] }}</a>
                        <span class="text-white/30">/</span>
                    @else
                        <span class="text-white font-medium">{{ $item['label'] }}</span>
                    @endif
                @endforeach
            </nav>
        @endif

        <h1 class="text-4xl md:text-6xl font-semibold text-white leading-tight max-w-2xl">
            {{ $title }}
        </h1>

        @if (!empty($subtitle))
            <p class="text-lg text-white/70 mt-4 max-w-2xl">{{ $subtitle }}</p>
        @endif
    </div>
</section>
