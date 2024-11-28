@extends('layouts.masterpage')
@php
    $carousel = 0;
@endphp

@section('conteudo')
    <section>

        <div class="containerProduto">
            <div class="image-section">
                <img src="/storage/images/{{ $produto->imagem }}" alt="Escova Roma Amarela">
            </div>

            <div class="info-section">
                <h2>{{ $produto->nome }}</h2>
                <p class="price">R$ {{ $produto->valor }}</p>

                <label for="">Quantidade</label>
                <div class="row g-3">
                    <div class="col quantity">
                        <input class="p-2" type="number" id="quantity" value="1" min="1"
                            onchange="valortotal()">
                    </div>
                </div>

                <div class="pickup-info">
                    <p>Retirada na loja</p>
                    <p>Informações para o CEP <span class="highlight">12345-678</span></p>
                    <p>Entrega em até 15 dias úteis</p>
                    <p class="destaque">O Valor do frete pode variar de acordo com a região</p>
                </div>
                <div class="descricao accordion accordion-flush" id="accordionExample">
                    <div class="accordion-item ">
                        <h2 class="accordion-header ">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Descrição do Produto
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {{ $produto->descricao }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 buy-button">
                    <a href="/cart/{{ $produto->id }}">Comprar</a>
                </div>
            </div>

        </div>




    </section>
@endsection
