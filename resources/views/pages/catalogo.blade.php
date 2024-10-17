@extends('layouts.masterpage')
@php
    $carousel = 0;
@endphp

@section('conteudo')
    <section>
        <h1>Catálogo de Produtos</h1>
        <div class="row g-4 alinhamentoDiv">
            @foreach ($produto as $item)
            <div class="col-md-3">
                    <div class="cardCatalogo card card">
                        <div class="gambiarraImg">
                            <img src="/storage/images/{{ $item->imagem }}" class="card__imagem card-img-top form-control" alt="Imagem 1">
                        </div>
                        <div class="card__body card-body">
                            <h5 class="card__nome">{{ $item->nome }}</h5>
                            <div class="divCard__item">
                                <p class="card__item">R$ {{$item->valor}}</p>
                                <p class="card__item--menor"><b>Descrição: </b>{{$item->descricao}}</p>
                            </div>   
                        </div>
                    </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection
