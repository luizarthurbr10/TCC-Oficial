<body>
    <div id="faixa"></div>
    <nav>
        <div class="navPrincipal alinhamentoDiv row text-center">
            <div class="col-2">
                <a href="">
                    <img src="assets/img/logo.png" width="200px" alt="">
                </a>
            </div>
            <div class="col-5">
                <form class="navPrincipal__barraPesquisa d-flex" role="search">
                    <input class="navPrincipal__barraPesquisa form-control me-2" type="search"
                        placeholder="O que você está procurando?" aria-label="Search">
                    <button class="btn btn-outline " type="submit">
                        <img src="assets/img/icons/lupa.png" width="20px" alt="">
                    </button>
                </form>
            </div>
            <div class="col-4 p-3 d-flex justify-content-around">
                <a href="" class="nav__link bordas link-light p-3">Home</a>
                <a href="" class="nav__link bordas link-light p-3">Catálogo</a>
                <a href="login" class="nav__link bordas link-light p-3">Entre ou Cadastre-se</a>
            </div>
            <div class="col-1 p-3">
                <a href="">
                    <img src="assets/img/icons/carrinho-de-compras.png" width="80px" alt="">
                </a>
            </div>
        </div>

        <div class="navSecundario alinhamentoDiv">
            <div class="navSecundario__Itens row">
                <div class="col-2">
                    <div class="alinhamentoDiv bordas dropdown">
                        <a class="nav__link--SemBorda link-light" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="assets/img/icons/mais.png" width="50px" alt="">
                            Mais Categorias
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>  
                </div>
                <div class="col d-flex justify-content-around">
                    <a href="" class="nav__link--SemBorda link-light">Elétrica</a>
                    <a href="" class="nav__link--SemBorda link-light">Ferragens</a>
                    <a href="" class="nav__link--SemBorda link-light">Tintas</a>
                    <a href="" class="nav__link--SemBorda link-light">Iluminação</a>
                </div>
            </div>
        </div>  
    </nav>
