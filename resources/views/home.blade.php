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
        <div class="containerCards">
            <div class="cardProduto">
                <div class="cardImg">
                    <img src="assets/img/cards/3.jpg" alt="Nome do Produto">
                </div>
                <div class="cardInfo">
                    <h2 class="nomeProduto">KIT FLEX</h2>
                    <p class="textoCinza--tachado">R$ 22.90</p>
                    <p class="precoProduto">R$ 18.90</p>
                    <p class="textoCinza">Ou em 2x sem juros de R$ 11.45</p>
                    <div class="cardBotoes">
                        <button class="botaoCard btn-VerMais">
                            <a href="">Ver Mais</a>
                        </button>
                        <button class="botaoCard btn-AdicionarCarrinho">
                            <a href="">Adicionar ao Carrinho</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="cardProduto">
                <div class="cardImg">
                    <img src="assets/img/cards/6.png" alt="Nome do Produto">
                </div>
                <div class="cardInfo">
                    <h2 class="nomeProduto">TINTA SUBLIME - Sob Encomenda</h2>
                    <p class="textoCinza--tachado">R$ 399.99</p>
                    <p class="precoProduto">R$ 369.99</p>
                    <p class="textoCinza">Ou em 10x sem juros de R$ 38.20</p>
                    <div class="cardBotoes">
                        <button class="botaoCard btn-VerMais">
                            <a href="">Ver Mais</a>
                        </button>
                        <button class="botaoCard btn-AdicionarCarrinho">
                            <a href="">Adicionar ao Carrinho</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="cardProduto">
                <div class="cardImg">
                    <img src="assets/img/cards/4.jpg" alt="Nome do Produto">
                </div>
                <div class="cardInfo">
                    <h2 class="nomeProduto">ROLO DE LÃ</h2>
                    <p class="textoCinza--tachado">R$ 13.50</p>
                    <p class="precoProduto">R$ 9.99</p>
                    <p class="textoCinza">Ou em 2x sem juros de 4.99 </p>
                    <div class="cardBotoes">
                        <button class="botaoCard btn-VerMais">
                            <a href="">Ver Mais</a>
                        </button>
                        <button class="botaoCard btn-AdicionarCarrinho">
                            <a href="">Adicionar ao Carrinho</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="cardProduto">
                <div class="cardImg">
                    <img src="assets/img/cards/5.png" alt="Nome do Produto">
                </div>
                <div class="cardInfo">
                    <h2 class="nomeProduto">TINTA PERFORMANCE</h2>
                    <p class="textoCinza--tachado">R$ 355.99</p>
                    <p class="precoProduto">R$ 385.9</p>
                    <p class="textoCinza">Ou em 6x sem juros de R$ 64.99</p>
                    <div class="cardBotoes">
                        <button class="botaoCard btn-VerMais">
                            <a href="">Ver Mais</a>
                        </button>
                        <button class="botaoCard btn-AdicionarCarrinho">
                            <a href="">Adicionar ao Carrinho</a>
                        </button>
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
        <div class="containerCards">
            <div class="cardProduto">
                <div class="cardImg">
                    <img src="assets/img/cards/8.png" alt="Nome do Produto">
                </div>
                <div class="cardInfo">
                    <h2 class="nomeProduto">SUPORTE PARA GARRAFÃO</h2>
                    <p class="precoProduto">R$ 60.90</p>
                    <p class="textoCinza">Ou em 3x sem juros de R$ 20.30</p>
                    <div class="cardBotoes">
                        <button class="botaoCard btn-VerMais">
                            <a href="">Ver Mais</a>
                        </button>
                        <button class="botaoCard btn-AdicionarCarrinho">
                            <a href="">Adicionar ao Carrinho</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="cardProduto">
                <div class="cardImg">
                    <img src="assets/img/cards/3.jpg" alt="Nome do Produto">
                </div>
                <div class="cardInfo">
                    <h2 class="nomeProduto">KIT FLEX</h2>
                    <p class="precoProduto">R$ 22.90</p>
                    <p class="textoCinza">Ou em 2x sem juros de R$ 11.45</p>
                    <div class="cardBotoes">
                        <button class="botaoCard btn-VerMais">
                            <a href="">Ver Mais</a>
                        </button>
                        <button class="botaoCard btn-AdicionarCarrinho">
                            <a href="">Adicionar ao Carrinho</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="cardProduto">
                <div class="cardImg">
                    <img src="assets/img/cards/9.png" alt="Nome do Produto">
                </div>
                <div class="cardInfo">
                    <h2 class="nomeProduto">KIT LAVELLO PRETO</h2>
                    <p class="precoProduto">R$ 42.50</p>
                    <p class="textoCinza">Ou em 2x sem juros de 21.25 </p>
                    <div class="cardBotoes">
                        <button class="botaoCard btn-VerMais">
                            <a href="">Ver Mais</a>
                        </button>
                        <button class="botaoCard btn-AdicionarCarrinho">
                            <a href="">Adicionar ao Carrinho</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="cardProduto">
                <div class="cardImg">
                    <img src="assets/img/cards/5.png" alt="Nome do Produto">
                </div>
                <div class="cardInfo">
                    <h2 class="nomeProduto">TINTA PERFORMANCE</h2>
                    <p class="precoProduto">R$ 385.9</p>
                    <p class="textoCinza">Ou em 6x sem juros de R$ 64.32</p>
                    <div class="cardBotoes">
                        <button class="botaoCard btn-VerMais">
                            <a href="">Ver Mais</a>
                        </button>
                        <button class="botaoCard btn-AdicionarCarrinho">
                            <a href="">Adicionar ao Carrinho</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CONHEÇA NOSSA HISTÓRIA --}}
    <div class="alinhamentoDiv">
        <section class="boxHistoria">
            <div class="boxHistoria__textArea">
                <h2>Conheça Nossa História!</h2>
                <p>Maior distribuidora de tintas Ciacollor da região Centro-oeste, desde 2022 atendendo Cuiabá, Várzea
                    Grande e região, agora On-line.</p>
            </div>
            <div class="boxHistoria__imageArea">
                <img src="assets/img/vitoria.jfif" alt="Imagem 1" class="boxHistoria__imageBox">
                {{-- <img src="assets/img/carousel/img2.jpg" alt="Imagem 2" class="boxHistoria__imageBox"> --}}
            </div>
        </section>
    </div>
@endsection
