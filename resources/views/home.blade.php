@extends('layouts.masterpage')
@section('conteudo')
    {{-- BOX BENEFÍCIOS --}}
    <div id="boxBeneficios" class="alinhamentoDiv row">

        <div class="col coluna">
            <div class="item rounded-0">
                <div class="row conteudo card-body p-2 align-self-center">
                    <div class="col-4">
                        <img class="icone" src="assets/img/icons/cartaoCredito.png" height="50px" alt="">
                    </div>
                    <div class="col texto">
                        <p class="card-text">Parcele Sem Juros no <b>Cartão</b></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col coluna">
            <div class="item rounded-0">
                <div class="row conteudo card-body p-2 align-self-center">
                    <div class="col-4">
                        <img class="icone" src="assets/img/icons/caminhao.png" height="50px" alt="">
                    </div>
                    <div class="col">
                        <p class="card-text">Entrega de produtos <b>Garantida</b></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col coluna">
            <div class="item rounded-0">
                <div class="row conteudo card-body p-2 align-self-center">
                    <div class="col-4">
                        <img class="icone" src="assets/img/icons/loja.png" height="50px" alt="">
                    </div>
                    <div class="col">
                        <p class="card-text">Compre no site e <b>Retire na Loja</b></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col coluna">
            <div class="item rounded-0">
                <div class="row conteudo card-body p-2 align-self-center">
                    <div class="col-4">
                        <img class="icone" src="assets/img/icons/serrote.png" height="50px" alt="">
                    </div>
                    <div class="col">
                        <p class="card-text">Tudo para <b>Construir, Reformar e Decorar</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- CARDS PROMOÇÃO --}}
    <section>
        <div class="titulo">
            <h1>Ofertas do Mês</h1>
        </div>

        <div class="container mt-3">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Imagem 1">
                        <div class="card-body">
                            <h5 class="nome">Nome do Produto</h5>
                            <div>
                                <p class="precoOriginal">R$ 00,00</p>
                                <p class="precoPromocao">R$ 00,00</p>
                                <p class="parcelas">Parcelas</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Imagem 2">
                        <div class="card-body">
                            <h5 class="nome">Nome do Produto</h5>
                            <div>
                                <p class="precoOriginal">R$ 00,00</p>
                                <p class="precoPromocao">R$ 00,00</p>
                                <p class="parcelas">Parcelas</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Imagem 3">
                        <div class="card-body">
                            <h5 class="nome">Nome do Produto</h5>
                            <div>
                                <p class="precoOriginal">R$ 00,00</p>
                                <p class="precoPromocao">R$ 00,00</p>
                                <p class="parcelas">Parcelas</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Imagem 3">
                        <div class="card-body">
                            <h5 class="nome">Nome do Produto</h5>
                            <div>
                                <p class="precoOriginal">R$ 00,00</p>
                                <p class="precoPromocao">R$ 00,00</p>
                                <p class="parcelas">Parcelas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    {{-- CARROSSEL MARCAS --}}
    <div class="titulo">
        <h1>Navegue por Marcas</h1>
    </div>
    <section class="sessao">
        <div class="caixaCarrossel glider-contain">
            <div class="carrossel glider">
                <div class="c_slide">1</div>
                <div class="c_slide">2</div>
                <div class="c_slide">3</div>
                <div class="c_slide">4</div>
                <div class="c_slide">5</div>
                <div class="c_slide">6</div>
                <div class="c_slide">3</div>
                <div class="c_slide">4</div>
                <div class="c_slide">5</div>
                <div class="c_slide">6</div>
            </div>

            <button class="glider-prev" aria-label="Previous">
                <img src="assets/img/icons/setaEsq.svg" alt="">
            </button>
            <button class="glider-next" aria-label="Next">
                <img src="assets/img/icons/setaDir.svg" alt="">
            </button>
            {{-- <div class="dots" role="tablist"></div> --}}
        </div>
    </section>
@endsection
