@extends('layouts.masterpage')
@section('conteudo')
    {{-- BOX BENEFÍCIOS --}}
    <div class="features-container">
        <div class="feature-box">
            <img src="assets/img/icons/cartaoCredito.png" alt="">
            <div>
                <p>Parcele <strong>Sem Juros</strong> nos cartões</p>
            </div>
        </div>
        <div class="feature-box">
            <img src="assets/img/icons/caminhao.png" alt="">
            <div>
                <p>Entrega de produtos <strong>Garantida</strong></p>
            </div>
        </div>
        <div class="feature-box">
            <img src="assets/img/icons/loja.png" alt="">
            <div>
                <p>Compre no site e <strong>Retire na Loja</strong></p>
            </div>
        </div>
        <div class="feature-box">
            <img src="assets/img/icons/serrote.png" alt="">
            <div>
                <p>Tudo para <strong>Construir, Reformar e Decorar</strong></p>
            </div>
        </div>
    </div>


    {{-- CARDS PROMOÇÃO --}}
    <section>
        <h1>Ofertas do Mês</h1>
        <div class="container p-3 alinhamentoDiv">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                {{-- @foreach ($produto as $item) --}}
                    <div class="col">
                        <div class="card h-100">
                            <img src={{--"/storage/images/{{ $item->imagem }}" --}} height="360" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title card__nome">{{--{{ $item->nome }} --}}</h5>
                                <p class="card-text">Descrição: {{--{{ $item->descricao }} --}}</p>
                            </div>
                            <div class="card-body">
                                <p class="card-text card__preco">R$ {{--{{ $item->valor }} --}}</p>
                                <a href="" class="botaoVoltar mt-1 p-2">Adicionar ao Carrinho</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src={{--"/storage/images/{{ $item->imagem }}" --}} height="360" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title card__nome">{{--{{ $item->nome }} --}}</h5>
                                <p class="card-text">Descrição: {{--{{ $item->descricao }} --}}</p>
                            </div>
                            <div class="card-body">
                                <p class="card-text card__preco">R$ {{--{{ $item->valor }} --}}</p>
                                <a href="" class="botaoVoltar mt-1 p-2">Adicionar ao Carrinho</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src={{--"/storage/images/{{ $item->imagem }}" --}} height="360" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title card__nome">{{--{{ $item->nome }} --}}</h5>
                                <p class="card-text">Descrição: {{--{{ $item->descricao }} --}}</p>
                            </div>
                            <div class="card-body">
                                <p class="card-text card__preco">R$ {{--{{ $item->valor }} --}}</p>
                                <a href="" class="botaoVoltar mt-1 p-2">Adicionar ao Carrinho</a>
                            </div>
                        </div>
                    </div>
                    
                    
                {{-- @endforeach --}}

            </div>
        </div>
    </section>

    {{-- CARROSSEL MARCAS --}}
    <h1>Navegue por Marcas</h1>
    <section class="alinhamentoDiv carrosselMarcas">
        <div class="carrosselMarcas__carrossel glider-contain">
            <div class="carrossel glider">
                <div class="c_slide">
                    <img src="assets/img/carousel/m1.svg" alt="">
                </div>
                <div class="c_slide">
                    <img src="assets/img/carousel/m2.svg" alt="">
                </div>
                <div class="c_slide">
                    <img src="assets/img/carousel/m3.svg" alt="">
                </div>
                <div class="c_slide">
                    <img src="assets/img/carousel/m4.svg" alt="">
                </div>
                <div class="c_slide">
                    <img src="assets/img/carousel/m5.svg" alt="">
                </div>
                <div class="c_slide">
                    <img src="assets/img/carousel/m6.svg" alt="">
                </div>
                <div class="c_slide">
                    <img src="assets/img/carousel/m7.svg" alt="">
                </div>
                <div class="c_slide">
                    <img src="assets/img/carousel/m1.svg" alt="">
                </div>
                <div class="c_slide">
                    <img src="assets/img/carousel/m1.svg" alt="">
                </div>
                <div class="c_slide">
                    <img src="assets/img/carousel/m1.svg" alt="">
                </div>
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

    {{-- CARDS MAIS PROCURADOS --}}
    <section>
        <h1>Os Mais Procurados</h1>
        <div class="container p-3 alinhamentoDiv">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                {{-- @foreach ($produto as $item) --}}
                    <div class="col">
                        <div class="card h-100">
                            <img src={{--"/storage/images/{{ $item->imagem }}" --}} height="360" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title card__nome">{{--{{ $item->nome }} --}}</h5>
                                <p class="card-text">Descrição: {{--{{ $item->descricao }} --}}</p>
                            </div>
                            <div class="card-body">
                                <p class="card-text card__preco">R$ {{--{{ $item->valor }} --}}</p>
                                <a href="" class="botaoVoltar mt-1 p-2">Adicionar ao Carrinho</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src={{--"/storage/images/{{ $item->imagem }}" --}} height="360" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title card__nome">{{--{{ $item->nome }} --}}</h5>
                                <p class="card-text">Descrição: {{--{{ $item->descricao }} --}}</p>
                            </div>
                            <div class="card-body">
                                <p class="card-text card__preco">R$ {{--{{ $item->valor }} --}}</p>
                                <a href="" class="botaoVoltar mt-1 p-2">Adicionar ao Carrinho</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src={{--"/storage/images/{{ $item->imagem }}" --}} height="360" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title card__nome">{{--{{ $item->nome }} --}}</h5>
                                <p class="card-text">Descrição: {{--{{ $item->descricao }} --}}</p>
                            </div>
                            <div class="card-body">
                                <p class="card-text card__preco">R$ {{--{{ $item->valor }} --}}</p>
                                <a href="" class="botaoVoltar mt-1 p-2">Adicionar ao Carrinho</a>
                            </div>
                        </div>
                    </div>
                    
                    
                {{-- @endforeach --}}

            </div>
        </div>


    </section>

    {{-- CONHEÇA NOSSA HISTÓRIA --}}
    <div class="alinhamentoDiv">
        <section class="boxHistoria">
            <div class="boxHistoria__textArea">
                <h2>Conheça nossa história!</h2>
                <p>Maior distribuidora de tintas Ciacollor da região Centro-oeste, desde 2022 atendendo Cuiabá, Várzea Grande e região, agora On-line.</p>
            </div>
            <div class="boxHistoria__imageArea">
                <img src="assets/img/carousel/img1.jpg" alt="Imagem 1" class="boxHistoria__imageBox">
                <img src="assets/img/carousel/img2.jpg" alt="Imagem 2" class="boxHistoria__imageBox">
            </div>
        </section>
    </div>
    
@endsection