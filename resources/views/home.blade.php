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
        <div class="container mt-3">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card card">
                        <img src="https://via.placeholder.com/300x200" class="card__imagem card-img-top" alt="Imagem 1">
                        <div class="card__body card-body">
                            <h5 class="card__nome">Nome do Produto</h5>
                            <div>
                                <p class="card__precoOriginal">R$ 00,00</p>
                                <p class="card__precoPromocao">R$ 00,00</p>
                                <p class="card__parcelas">Parcelas</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card">
                        <img src="https://via.placeholder.com/300x200" class="card__imagem card-img-top" alt="Imagem 1">
                        <div class="card__body card-body">
                            <h5 class="card__nome">Nome do Produto</h5>
                            <div>
                                <p class="card__precoOriginal">R$ 00,00</p>
                                <p class="card__precoPromocao">R$ 00,00</p>
                                <p class="card__parcelas">Parcelas</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card">
                        <img src="https://via.placeholder.com/300x200" class="card__imagem card-img-top" alt="Imagem 1">
                        <div class="card__body card-body">
                            <h5 class="card__nome">Nome do Produto</h5>
                            <div>
                                <p class="card__precoOriginal">R$ 00,00</p>
                                <p class="card__precoPromocao">R$ 00,00</p>
                                <p class="card__parcelas">Parcelas</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card">
                        <img src="https://via.placeholder.com/300x200" class="card__imagem card-img-top" alt="Imagem 1">
                        <div class="card__body card-body">
                            <h5 class="card__nome">Nome do Produto</h5>
                            <div>
                                <p class="card__precoOriginal">R$ 00,00</p>
                                <p class="card__precoPromocao">R$ 00,00</p>
                                <p class="card__parcelas">Parcelas</p>
                            </div>
                        </div>
                    </div>
                </div>
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
        <div class="container mt-3">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card card">
                        <img src="https://via.placeholder.com/300x200" class="card__imagem card-img-top" alt="Imagem 1">
                        <div class="card__body card-body">
                            <h5 class="card__nome">Nome do Produto</h5>
                            <div>
                                <p class="card__precoOriginal">R$ 00,00</p>
                                <p class="card__precoPromocao">R$ 00,00</p>
                                <p class="card__parcelas">Parcelas</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card">
                        <img src="https://via.placeholder.com/300x200" class="card__imagem card-img-top" alt="Imagem 1">
                        <div class="card__body card-body">
                            <h5 class="card__nome">Nome do Produto</h5>
                            <div>
                                <p class="card__precoOriginal">R$ 00,00</p>
                                <p class="card__precoPromocao">R$ 00,00</p>
                                <p class="card__parcelas">Parcelas</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card">
                        <img src="https://via.placeholder.com/300x200" class="card__imagem card-img-top" alt="Imagem 1">
                        <div class="card__body card-body">
                            <h5 class="card__nome">Nome do Produto</h5>
                            <div>
                                <p class="card__precoOriginal">R$ 00,00</p>
                                <p class="card__precoPromocao">R$ 00,00</p>
                                <p class="card__parcelas">Parcelas</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card">
                        <img src="https://via.placeholder.com/300x200" class="card__imagem card-img-top" alt="Imagem 1">
                        <div class="card__body card-body">
                            <h5 class="card__nome">Nome do Produto</h5>
                            <div>
                                <p class="card__precoOriginal">R$ 00,00</p>
                                <p class="card__precoPromocao">R$ 00,00</p>
                                <p class="card__parcelas">Parcelas</p>
                            </div>
                        </div>
                    </div>
                </div>
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
                <img src="imagem1.png" alt="Imagem 1" class="boxHistoria__imageBox">
                <img src="imagem2.png" alt="Imagem 2" class="boxHistoria__imageBox">
            </div>
        </section>
    </div>
    
@endsection
