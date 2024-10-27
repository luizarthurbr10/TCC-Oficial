@extends('layouts.masterpage')
@php
    $carousel = 0;
@endphp


@section('conteudo')
    <section>
        <h1>Meu Carrinho</h1>
        @foreach (session('carrinho', []) as $item)
            <div class="container containerCarrinho">
                <div class="product-info">
                    <img src="product-image.png" alt="Imagem do Produto">
                    <div>
                        <h3>{{ $item['nome'] }}</h3>
                        <p>R$ {{ $item['valor'] }}</p>
                        <p class="textoCinza">Ou em 5x sem juros de R$ 11,25</p>
                    </div>
                </div>

                <div class="order-info">
                    <p>Quantidade: <span class="textoCinza">{{ $item['qtd'] }}</span></p>
                    <p>Frete: <span style="color: orange;">GRÁTIS</span></p>
                    <p>Forma de pagamento: <span class="textoCinza">Pix</span></p>

                    {{-- FAZER FUNÇÃO PARA CALCULAR --}}
                    <p>Subtotal: <span class="textoCinza">R$ 00,00</span></p>
                </div>

                {{-- <div class="store-info">
                <p>Retirada na loja: <span style="color: orange;">OFF</span></p>
                <p>Cidade/Estado: <span class="textoCinza">Cuiabá-MT</span></p>
                <p>CEP: <span class="textoCinza">00000-000</span></p>
                <p>Bairro: <span class="textoCinza">Jardim Bela Vista, Q 45 C 12</span></p>
                <p>Complemento: <span class="textoCinza">Rua das Flores, próximo ao posto Jumbo</span></p>
            </div> --}}

                <div class="actions">
                    {{-- <button class="button-with-icon">
                    <img src="assets/img/icons/carrinho.svg" alt="">
                    <a href="" class="textoBotao">Comprar Produto</a>
                </button> --}}

                    {{-- VERIFICAR ONDE ADICIONAR E O DESIGN --}}
                    <a href="cartRemove/{{ $item['id'] }}" class="text-decoration-none text-dark">
                        <img src="" alt=""> <label for="">-</label>
                    </a>

                    <a href="cartAdd/{{ $item['id'] }}" class="text-decoration-none text-dark">
                        <img src="" alt=""> <label for="">+</label>
                    </a>
                    {{-- FIM --}}

                    {{-- ARRUMAR ESSE BOTÃO AQUI!!!!!! --}}
                    <button class="button-with-icon botaoVerProduto">
                        {{-- <a href="detalhe/{{ $item->id }}"> --}}
                            <img src="assets/img/icons/caixa.svg" alt="">
                            <label href="" class="textoBotao">Ver Produto</label>
                        {{-- </a> --}}
                    </button>
                    <button class="button-with-icon botaoExcluir">
                        <a href="cartDestroy/{{ $item['id'] }}">
                            <img src="assets/img/icons/lixo.svg" alt="">
                            <label class="textoBotaoBranco" for="">Excluir Produto</label>
                        </a>
                    </button>
                </div>
            </div>
        @endforeach

        <div class="containerDetalhes container">
            <div class="info">
                <p class="valorTotal" >Valor Total:<label class="numero" for="">{{ number_format(session('sum_valor'), 2, ',', '.') }}</label></p>
                <p><strong>Cidade/Estado:</strong> <label for="" class="textoCinza">Cuiabá-MT</label></p>
                <p><strong>CEP:</strong> <label for="" class="textoCinza">00000-000</label></p>
                <p><strong>Bairro e Logradouro:</strong><label for="" class="textoCinza"> Parque Cuiabá</label></p>
                <p><strong>Complemento e Referência:</strong> <label for="" class="textoCinza">Próximo ao Bom
                        Jesus</label></p>
            </div>
            <div class="actionsDetalhes">
                <button class="btnCarrinho finalizar">Finalizar Pedido</button>
                <button class="btnCarrinho orcamento">Emitir Orçamento</button>
                <button class="btnCarrinho cancelar">Cancelar Pedido</button>
            </div>
        </div>
    </section>
@endsection
