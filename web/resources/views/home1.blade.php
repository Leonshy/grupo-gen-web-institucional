@extends('shared.base', ['title' => 'Home'])

@section('content')
    @include('shared.partials.navbar')
    @include('shared.partials.hero-fullphoto')
    @include('shared.partials.areas-inversion', ['dark' => false])
    @include('shared.partials.empresas', ['dark' => true])
    @include('shared.partials.cta-final')
    @include('shared.partials.footer')
@endsection

@section('scripts')
    @vite(['resources/js/components/swiper.js'])
@endsection
