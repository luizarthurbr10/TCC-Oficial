@extends('layouts.masterpage')
@php
    $carousel = 0;
@endphp

@section('conteudo')
    <section>
        <h1>Catálogo de Produtos</h1>
        <div class="container p-3 alinhamentoDiv">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($produto as $item)
                    <div class="col">
                        <div class="card h-100">
                            <img src="/storage/images/{{ $item->imagem }}" height="360" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title card__nome">{{ $item->nome }}</h5>
                                <p class="card-text">Descrição: {{ $item->descricao }}</p>
                            </div>
                            <div class="card-body">
                                <p class="card-text card__precoPromocao">R$ {{ $item->valor }}</p>
                                <a href="" class="botaoVoltar mt-1 p-2">Adicionar ao Carrinho</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
