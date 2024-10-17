@extends('layouts.masterpage2')

@section('conteudo')
    <section class="homeAdm alinhamentoDiv">
        <div class="container homeAdm__links alinhamentoDiv">
            <div class="homeAdm__link">
                <a class="link" href="{{route('cadproduto')}}">
                    <img src="assets/img/icons/mais2.png" alt="">
                    Cadastrar Produto
                </a>
            </div>
            <div class="homeAdm__link mt-5">
                <a class="link" href="{{ route('categorias') }}">
                    <img src="assets/img/icons/etiqueta.png" alt="">
                    Gerenciar Categorias
                </a>
            </div>
            <div class="homeAdm__link mt-5">
                <a class="link" href="{{ route('fornecedores') }}">
                    <img src="assets/img/icons/corporacao.png" alt="">
                    Gerenciar Fornecedores
                </a>
            </div>
            <div class="homeAdm__link mt-5">
                <a class="link" href="{{ route('consultar') }}">
                    <img src="assets/img/icons/lupa.png" alt="">
                    Consultar Produtos
                </a>
            </div>
            <div class="homeAdm__link--sair mt-5">
                <form class="" action="logout" method="post">
                    @csrf
                    <a href="#" class="link"
                        onclick="event.preventDefault();this.closest('form').submit();">Sair</a>
                </form>
            </div>
        </div>
    </section>
@endsection
