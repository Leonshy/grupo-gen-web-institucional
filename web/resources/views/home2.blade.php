@extends('shared.base', ['title' => 'Home'])

@section('content')
    @include('shared.partials.navbar')
    @include('shared.partials.hero-mosaico')
    @include('shared.partials.empresas')
    @include('shared.partials.cta-final')
    @include('shared.partials.footer')
@endsection

@section('scripts')
    @vite(['resources/js/components/swiper.js'])
@endsection
