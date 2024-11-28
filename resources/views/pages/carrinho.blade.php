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
                    <img src="/storage/images/{{ $item['imagem'] }}" />
                    <div>
                        <h3>{{ $item['nome'] }}</h3>
                        <p>R$ {{ $item['valor'] }}</p>
                        <p>Frete: <span style="color: orange;">GRÁTIS</span></p>
                        {{-- FAZER FUNÇÃO PARA CALCULAR --}}
                        <p>Subtotal: <span class="textoCinza">R$ 00,00</span></p>
                    </div>
                </div>

                <div class="order-info">
                    <p class="tituloDescricao">Descrição do Produto</p>
                    <p class="descricao">{{ $item['descricao'] }}</p>
                    
                </div>

                <div class="actionsCarrinho">
                    <div class="actions01">
                        <a href="cartRemove/{{ $item['id'] }}" class="botaoQuantidade text-decoration-none text-dark">
                            <label for="">-</label>
                        </a>
                        <p class="numero">{{ $item['qtd'] }}</p>
                        <a href="cartAdd/{{ $item['id'] }}" class="botaoQuantidade text-decoration-none text-dark">
                            <label for="">+</label>
                        </a>
                    </div>
                    <div class="actions02">
                        <button class="button-with-icon botaoVerProduto">
                            <a href="detalhe/{{ $item['id'] }}">
                            <img src="assets/img/icons/caixa.svg" alt="">
                            <label href="" class="textoBotao">Ver Produto</label>
                            </a>
                        </button>
                        <button class="button-with-icon botaoExcluir">
                            <a href="cartDestroy/{{ $item['id'] }}">
                                <img src="assets/img/icons/lixo.svg" alt="">
                                <label class="textoBotaoBranco" for="">Excluir Produto</label>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="containerDetalhes container">
            <div class="info">
                <p class="valorTotal">Valor Total:<label class="numero"
                        for="">{{ number_format(session('sum_valor'), 2, ',', '.') }}</label></p>
                <p><strong>Cidade/Estado:</strong> <label for="" class="textoCinza">Cuiabá-MT</label></p>
                <p><strong>CEP:</strong> <label for="" class="textoCinza">00000-000</label></p>
                <p><strong>Bairro e Logradouro:</strong><label for="" class="textoCinza"> Parque Cuiabá</label></p>
                <p><strong>Complemento e Referência:</strong> <label for="" class="textoCinza">Próximo ao Bom Jesus</label></p>
            </div>
            <div class="actionsDetalhes">
                <button class="btnCarrinho finalizar">Finalizar Pedido</button>
                <button class="btnCarrinho orcamento">Emitir Orçamento</button>
                <button class="btnCarrinho cancelar">Cancelar Pedido</button>
            </div>
        </div>
    </section>
@endsection
