@extends('layouts.masterpage')
@section('conteudo')

    {{-- BOX BENEFÍCIOS --}}
    <div id="boxBeneficios" class="row p-5">
        <div class="col">
            <div class="item card h-100">
                <div class="textoItem card-body">
                    <img src="assets/img/icons/cartaoCredito.png" alt="">
                    <p class="card-text p-2">Parcele Sem Juros no <b>Cartão</b></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="item card h-100">
                <div class="textoItem card-body">
                    <p class="card-text p-2">Entrega de produtos <b>Garantida</b></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="item card h-100">
                <div class="textoItem card-body">
                    <p class="card-text p-2">Compre no site e <b>Retire na Loja</b></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="item card h-100">
                <div class="textoItem card-body">
                    <p class="card-text p-2">Tudo para <b>Construir, Reformar e Decorar</b></p>
                </div>
            </div>
        </div>
    </div>

    <section>
        {{-- TITULO DA SESSÃO --}}
        <div>
            <h1>Ofertas do Mês</h1>
        </div>

        {{-- CARDS DE PROMOÇÃO --}}
        <div id="cards" class="alinhamentoDiv">
            <div class="card" style="width: 18rem;">
                <img src="assets/img/cards/1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="assets/img/cards/2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="assets/img/cards/3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </section>
@endsection
