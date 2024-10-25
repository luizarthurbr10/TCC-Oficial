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
                    <p>R$ {{ $item['valor']}}</p>
                    <p class="textoCinza">Ou em 5x sem juros de R$ 11,25</p>
                </div>
            </div>

            <div class="order-info">
                <p>Quantidade: <span class="textoCinza">01</span></p>
                <p>Frete: <span style="color: orange;">GRÁTIS</span></p>
                <p>Forma de pagamento: <span class="textoCinza">Pix</span></p>
                <p>Subtotal: <span class="textoCinza">R$ 00,00</span></p>
            </div>

            <div class="store-info">
                <p>Retirada na loja: <span style="color: orange;">OFF</span></p>
                <p>Cidade/Estado: <span class="textoCinza">Cuiabá-MT</span></p>
                <p>CEP: <span class="textoCinza">00000-000</span></p>
                <p>Bairro: <span class="textoCinza">Jardim Bela Vista, Q 45 C 12</span></p>
                <p>Complemento: <span class="textoCinza">Rua das Flores, próximo ao posto Jumbo</span></p>
            </div>

            <div class="actions">
                {{-- <button class="button-with-icon">
                    <img src="assets/img/icons/carrinho.svg" alt="">
                    <a href="" class="textoBotao">Comprar Produto</a>
                </button> --}}
                <button class="button-with-icon">
                    <img src="assets/img/icons/caixa.svg" alt="">
                    <a href="" class="textoBotao">Ver Produto</a>
                </button>
                <button class="button-with-icon">
                    <img src="assets/img/icons/lixo.svg" alt="">
                    <label class="textoBotao" for="">Excluir Produto</label>
                </button>
            </div>
        </div>
        @endforeach

        
    </section>
@endsection
