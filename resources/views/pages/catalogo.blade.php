@extends('layouts.masterpage')
@php
    $carousel = 0;
@endphp

@section('conteudo')
    <section>
        <h1>Catálogo de Compras</h1>
        <div class="row g-4">
            @foreach($produto as $item)
            <div class="col-md-3">
                <div class="card card">
                    <img src="https://via.placeholder.com/300x200" class="card__imagem card-img-top" alt="Imagem 1">
                    <div class="card__body card-body">
                        <h5 class="card__nome">{{$item->nome}}</h5>
                        <div>
                            <p class="card__precoOriginal">{{$item->valor}}</p>
                            <p class="card__precoOriginal">{{$item->valor}}</p>
                            <p class="card__precoOriginal">{{$item->valor}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection
