@include('layouts.head')
@include('layouts.header')

@if (!isset($navBar))
    @include('layouts.navBar')
@endif

@if (!isset($carousel))
    @include('layouts.carousel')
@endif

@yield('conteudo')

@if (!isset($footer))
    @include('layouts.footer')
@endif

@include('layouts.script')
