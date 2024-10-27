@extends('layouts.masterpage')
@php
    $carousel = 0;
@endphp

@section('conteudo')
    <section>
        <h1>Catálogo de Produtos</h1>
        <div class="containerCards">
            @foreach ($produto as $item)
                <div class="cardProduto">
                    <div class="cardImg">
                        <img src="/storage/images/{{ $item->imagem }}" alt="Nome do Produto">
                    </div>
                    <div class="cardInfo">
                        <h2 class="nomeProduto">{{ $item->nome }}</h2>
                        <p class="precoProduto">R$ {{ $item->valor }}</p>
                        <p class="descricaoProduto">Descrição: {{ $item->descricao }}</p>
                        <div class="cardBotoes">
                            <button class="botaoCard btn-VerMais">
                                <a href="detalhe/{{ $item->id }}">Ver Mais</a>
                            </button>
                            <button class="botaoCard btn-AdicionarCarrinho">
                                <a href="cart/{{$item->id}}">Adicionar ao Carrinho</a>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
