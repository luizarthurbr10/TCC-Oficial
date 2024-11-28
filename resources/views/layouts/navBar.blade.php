<body class="body">
    <div id="faixa"></div>
    <nav>
        <div class="navPrincipal alinhamentoDiv row text-center">
            <div class="col-12 col-md-2 text-center text-md-left">
                <a href="">
                    <img src="assets/img/logo/logo.png" class="logo" alt="">
                </a>
            </div>
            <div class="col-12 col-md-5 mt-2 mt-md-0">
                <form class="navPrincipal__barraPesquisa d-flex" role="search">
                    <input class="navPrincipal__barraPesquisa form-control me-2" type="search"
                        placeholder="O que você está procurando?" aria-label="Search">
                    <button class="btn btn-outline " type="submit">
                        <img src="assets/img/icons/lupa.png" width="20px" alt="">
                    </button>
                </form>
            </div>

            <div class="col-12 col-md-4 p-3 d-flex justify-content-around">
                <a href="/" class="nav__link bordas link-light p-3">Home</a>
                <a href="{{ route('catalogo') }}" class="bordas nav__link link-light p-3">Catálogo</a>
                @guest
                    <a href="login" class="nav__link bordas link-light p-3">Entre ou Cadastre-se</a>
                @endguest
                @auth
                    @if (session('nivel') === 'admin')
                        <a class="linkAdm bordas link-light p-3" title="Ir à Página Inicial do Administrador"
                            href="{{ route('homeAdministrador') }}">
                            <span class="">Bem-Vindo(a) - {{ Auth::user()->name }}!</span>
                        </a>
                    @endif
                    @if (session('nivel') === 'user')
                        <a href="" class="nav__link bordas link-light p-3">
                            <span class="">Bem-Vindo(a) - {{ Auth::user()->name }}!</span>
                        </a>
                    @endif
                @endauth
            </div>

            <div class="col-12 col-md-1 text-center text-md-right">
                <a href="{{ session('sum_qtd') ? '\carrinho' : '#' }}" class="nav-link">
                    @if (!isset($cart))
                        <div class="row">
                            <div class="d-flex align-items-center">
                                <img src="/assets/img/icons/carrinho-de-compras.png" height="50" alt="">
                                <span class="numeroCarrinho">
                                    {{ session('sum_qtd') == 0 ? '' : session('sum_qtd') }}
                                </span>
                            </div>
                        </div>
                    @endif
                </a>
            </div>

        </div>

        <div class="navSecundario alinhamentoDiv">
            <div class="navSecundario__Itens row justify-content-center">
                <div class="col-12 col-md-2 dropdown">
                    <a class="nav__link--SemBorda link-light" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="assets/img/icons/mais.png" width="50px" alt="">
                        Mais Categorias
                    </a>

                    <ul class="dropdown-menu">
                        {{-- @foreach ($categoria as $item)
                        <li><a class="dropdown-item" href="#">{{$item->nomeCategoria}}</a></li>
                        @endforeach --}}
                    </ul>
                </div>
                <div class="col-12 col-md d-flex justify-content-around">
                    <a href="" class="nav__link--SemBorda link-light">Elétrica</a>
                    <a href="" class="nav__link--SemBorda link-light">Ferragens</a>
                    <a href="" class="nav__link--SemBorda link-light">Tintas</a>
                    <a href="" class="nav__link--SemBorda link-light">Iluminação</a>
                    @auth
                        <form class="mt-1" action="logout" method="post">
                            @csrf
                            <a href="#" class="nav__link--SemBorda link-light"
                                onclick="event.preventDefault();this.closest('form').submit();">Sair</a>
                        </form>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
</body>
