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
                    <div class="card card">
                        <img src="/storage/images/{{ $item->imagem }}" class="card__imagem card-img-top" alt="Imagem 1">
                        <div class="card__body card-body">
                            <h5 class="card__nome">{{ $item->nome }}</h5>
                            <div>
                                <p class="card__item">R$ {{number_format($item->valor,2,",",".")}}</p>
                                <p class="card__item--menor">{{ $item->descricao }}</p>
                                <p class="card__item--menor">{{ $item->cor }}</p>
                            </div>  
                        </div>
                    </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection
