{{-- $items: [['label' => 'Inicio', 'url' => url('/')], ['label' => 'Empresas']] (último sin url = actual) --}}
<div class="container-full lg:pt-40 md:pt-32 pt-24 pb-2">
    <nav class="flex flex-wrap items-center gap-2 text-sm text-default-500">
        @foreach ($items as $i => $item)
            @if (!$loop->last)
                <a href="{{ $item['url'] }}" class="hover:text-primary-2 transition-colors">{{ $item['label'] }}</a>
                <span class="text-default-300">/</span>
            @else
                <span class="text-default-800 font-medium">{{ $item['label'] }}</span>
            @endif
        @endforeach
    </nav>
</div>
