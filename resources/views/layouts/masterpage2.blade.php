@include('layouts.headAdm')
@include('layouts.header')
@include('layouts.navBarAdm')

@if (!isset($carousel))
    @include('layouts.carousel')
@endif

@yield('conteudo')

@include('layouts.script')

