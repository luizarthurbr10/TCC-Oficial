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
                    <img src="" alt="Nome do Produto">
                </div>
                <div class="cardInfo">
                    <h2 class="nomeProduto">Assento Almofadado Prime Branco</h2>
                    <p class="textoCinza--tachado">R$ 80,35</p>
                    <p class="precoProduto">R$ 56,25</p>
                    <p class="textoCinza">Ou em 5x sem juros de 11,25</p>
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
                    <img src="" alt="Nome do Produto">
                </div>
                <div class="cardInfo">
                    <h2 class="nomeProduto">Emborrachado fundo e acabamento 20kg</h2>
                    <p class="textoCinza--tachado">R$ 268,90</p>
                    <p class="precoProduto">R$ 242,01</p>
                    <p class="textoCinza">Ou em 10x sem juros de 24,20</p>
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
                    <img src="" alt="Nome do Produto">
                </div>
                <div class="cardInfo">
                    <h2 class="nomeProduto">Engate Passe Livre</h2>
                    <p class="textoCinza--tachado">R$ 12,90</p>
                    <p class="precoProduto">R$ 9,99</p>
                    <p class="textoCinza">Ou em 2x sem juros de 4,99 </p>
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
                    <img src="" alt="Nome do Produto">
                </div>
                <div class="cardInfo">
                    <h2 class="nomeProduto">Tinta piso Ciapiso 16L</h2>
                    <p class="textoCinza--tachado">R$ 355,99</p>
                    <p class="precoProduto">R$ 304,99</p>
                    <p class="textoCinza">Ou em 6x sem juros de R$ 50,84</p>
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
                    <img src="" alt="Nome do Produto">
                </div>
                <div class="cardInfo">
                    <h2 class="nomeProduto">Assento Almofadado Prime Branco</h2>
                    <p class="textoCinza--tachado">R$ 80,35</p>
                    <p class="precoProduto">R$ 56,25</p>
                    <p class="textoCinza">Ou em 5x sem juros de 11,25</p>
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
                    <img src="" alt="Nome do Produto">
                </div>
                <div class="cardInfo">
                    <h2 class="nomeProduto">Emborrachado fundo e acabamento 20kg</h2>
                    <p class="textoCinza--tachado">R$ 268,90</p>
                    <p class="precoProduto">R$ 242,01</p>
                    <p class="textoCinza">Ou em 10x sem juros de 24,20</p>
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
                    <img src="" alt="Nome do Produto">
                </div>
                <div class="cardInfo">
                    <h2 class="nomeProduto">Engate Passe Livre</h2>
                    <p class="textoCinza--tachado">R$ 12,90</p>
                    <p class="precoProduto">R$ 9,99</p>
                    <p class="textoCinza">Ou em 2x sem juros de 4,99 </p>
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
                    <img src="" alt="Nome do Produto">
                </div>
                <div class="cardInfo">
                    <h2 class="nomeProduto">Tinta piso Ciapiso 16L</h2>
                    <p class="textoCinza--tachado">R$ 355,99</p>
                    <p class="precoProduto">R$ 304,99</p>
                    <p class="textoCinza">Ou em 6x sem juros de R$ 50,84</p>
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
                <h2>Conheça nossa história!</h2>
                <p>Maior distribuidora de tintas Ciacollor da região Centro-oeste, desde 2022 atendendo Cuiabá, Várzea
                    Grande e região, agora On-line.</p>
            </div>
            <div class="boxHistoria__imageArea">
                <img src="assets/img/carousel/img1.jpg" alt="Imagem 1" class="boxHistoria__imageBox">
                <img src="assets/img/carousel/img2.jpg" alt="Imagem 2" class="boxHistoria__imageBox">
            </div>
        </section>
    </div>
@endsection
