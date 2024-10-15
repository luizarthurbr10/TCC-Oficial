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
                <a href="{{route('catalogo')}}" class="nav__link bordas link-light p-3">Catálogo</a>
                @guest
                    <a href="login" class="nav__link bordas link-light p-3">Entre ou Cadastre-se</a>
                @endguest
                @auth
                    <form class="p-3" action="logout" method="post">
                        @csrf
                        <li class="nav-item">
                            <a href="#" class="nav__link bordas link-light p-3" onclick="event.preventDefault();this.closest('form').submit();">Sair</a>
                        </li>
                    </form>
                @endauth
            </div>
            <div class="col-12 col-md-1 text-center text-md-right p-3">
                <a href="{{route('carrinho')}}">
                    <img src="assets/img/icons/carrinho-de-compras.png" class="carrinho" alt="">
                </a>
            </div>
        </div>

        <div class="navSecundario alinhamentoDiv">
            <div class="navSecundario__Itens row justify-content-center">
                <div class="col-12 col-md-2 dropdown">
                    <a class="nav__link--SemBorda link-light" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="assets/img/icons/mais.png" width="50px" alt="">
                        Mais Categorias
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md d-flex justify-content-around">
                    <a href="" class="nav__link--SemBorda link-light">Elétrica</a>
                    <a href="" class="nav__link--SemBorda link-light">Ferragens</a>
                    <a href="" class="nav__link--SemBorda link-light">Tintas</a>
                    <a href="" class="nav__link--SemBorda link-light">Iluminação</a>
                </div>
            </div>
        </div>
    </nav>
</body>
