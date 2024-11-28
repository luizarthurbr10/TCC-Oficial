<body class="body">
    <div id="faixa"></div>
    <nav>
        <div class="navPrincipal row text-center">
            <div class="col-12 col-md-2 text-center text-md-left">
                <a href="">
                    <img src="assets/img/logo/logo.png" class="logo" alt="">
                </a>
            </div>
            <div class="gambiarra01 col-12 col-md-1 text-center text-md-right p-3">
                <a href="">
                    <label for="">Bem Vindo(a) - <strong>{{ Auth::user()->name }}</strong>!</label>
                </a>
            </div>
        </div>

        <div class="navSecundario alinhamentoDiv">
            <div class="navSecundario__Itens row justify-content-center">
                <div class="col-12 col-md d-flex justify-content-around">
                    <a href="/" class="nav__link--SemBorda link-light">Acessar Site</a>
                    <a href="{{ route('cadprodutos') }}" class="nav__link--SemBorda link-light">Cadastrar Produto</a>
                    <a href="{{ route('categorias') }}" class="nav__link--SemBorda link-light">Gerenciar Categorias</a>
                    <a href="{{ route('fornecedores') }}" class="nav__link--SemBorda link-light">Gerenciar
                        Fornecedores</a>
                    <a href="{{ route('consultar') }}" class="nav__link--SemBorda link-light">Consultar Produtos</a>
                    <form class="mt-1" action="logout" method="post">
                        @csrf
                        <a href="#" class="nav__link--SemBorda link-light"
                            onclick="event.preventDefault();this.closest('form').submit();">Sair</a>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</body>
