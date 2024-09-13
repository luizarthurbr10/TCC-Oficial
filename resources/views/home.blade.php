@extends('layouts.masterpage')
@section('conteudo')
    {{-- BOX BENEFÍCIOS --}}
    <div id="boxBeneficios" class="row p-5">

        <div class="col coluna">
            <div class="item card rounded-0">
                <div class="row conteudo card-body p-2 align-self-center">
                    <div class="col-4">
                        <img class="icone" src="assets/img/icons/cartaoCredito.png" height="50px" alt="">
                    </div>
                    <div class="col texto">
                        <p class="card-text">Parcele Sem Juros no <b>Cartão</b></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col coluna">
            <div class="item card rounded-0">
                <div class="row conteudo card-body p-2 align-self-center">
                    <div class="col-4">
                        <img class="icone" src="assets/img/icons/caminhao.png" height="50px" alt="">
                    </div>
                    <div class="col">
                        <p class="card-text">Entrega de produtos <b>Garantida</b></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col coluna">
            <div class="item card rounded-0">
                <div class="row conteudo card-body p-2 align-self-center">
                    <div class="col-4">
                        <img class="icone" src="assets/img/icons/loja.png" height="50px" alt="">
                    </div>
                    <div class="col">
                        <p class="card-text">Compre no site e <b>Retire na Loja</b></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col coluna">
            <div class="item card rounded-0">
                <div class="row conteudo card-body p-2 align-self-center">
                    <div class="col-4">
                        <img class="icone" src="assets/img/icons/serrote.png" height="50px" alt="">
                    </div>
                    <div class="col">
                        <p class="card-text">Tudo para <b>Construir, Reformar e Decorar</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- CARDS PROMOÇÃO --}}
    <section>
        <div id="titulo">
            <h1>Ofertas do Mês</h1>
        </div>

        <div class="card-container">
            <div class="card">
                <img src="assets/img/cards/1.jpg" alt="Imagem do Card 1">
                <div class="card-content">
                    <h3>Título do Card 1</h3>
                    <p>Descrição curta do card 1. Este texto pode ser sobre qualquer conteúdo interessante.</p>
                    <a href="#" class="button">Saiba mais</a>
                </div>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/300x200" alt="Imagem do Card 2">
                <div class="card-content">
                    <h3>Título do Card 2</h3>
                    <p>Descrição curta do card 2. Algum conteúdo adicional interessante pode ser colocado aqui.</p>
                    <a href="#" class="button">Saiba mais</a>
                </div>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/300x200" alt="Imagem do Card 3">
                <div class="card-content">
                    <h3>Título do Card 3</h3>
                    <p>Descrição curta do card 3. Algo mais que você gostaria de adicionar sobre este card.</p>
                    <a href="#" class="button">Saiba mais</a>
                </div>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/300x200" alt="Imagem do Card 3">
                <div class="card-content">
                    <h3>Título do Card 3</h3>
                    <p>Descrição curta do card 3. Algo mais que você gostaria de adicionar sobre este card.</p>
                    <a href="#" class="button">Saiba mais</a>
                </div>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/300x200" alt="Imagem do Card 3">
                <div class="card-content">
                    <h3>Título do Card 3</h3>
                    <p>Descrição curta do card 3. Algo mais que você gostaria de adicionar sobre este card.</p>
                    <a href="#" class="button">Saiba mais</a>
                </div>
            </div>
        </div>
    
    </section>
@endsection
