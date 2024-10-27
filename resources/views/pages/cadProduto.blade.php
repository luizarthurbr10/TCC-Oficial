@extends('layouts.masterpage2')
@php
    $carousel = 0;
@endphp

@section('conteudo')

    <div class="lalala container">
        <div class="headAdm">
            <h2>Cadastrar Produto</h2>
            <button type="submit" class="botaoVoltar">
                <a href="{{ route('homeAdministrador') }}">Voltar</a>
            </button>
        </div>
        <form class="mt-2" action="produtos/create" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <input placeholder="Nome do Produto" name="nome" type="text" class="form-control"
                    value="{{ old('nome', isset($produto->nome) ? $produto->nome : '') }}">
            </div>
            <div class="mb-3">
                <input placeholder="Valor de Venda" name="valor" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <input placeholder="Descrição do Produto" name="descricao" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <input placeholder="Cor" name="cor" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <input placeholder="Quantidade em Estoque" name="quantidade" type="number" class="form-control">
            </div>

            <div class="row">
                <div class="col mb-3">
                    <select name="categoria" class="form-select" aria-label="Default select example">
                        <option selected>Escolher Categoria</option>
                        @foreach ($categoria as $item)
                            <option value="{{ $item->idCategoria }}">{{ $item->nomeCategoria }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col mb-3">
                    <select name="fornecedor" class="form-select" aria-label="Default select example">
                        <option selected>Escolher Fornecedor</option>
                        @foreach ($fornecedor as $item)
                            <option value="{{ $item->idFornecedor }}">{{ $item->nomeFornecedor }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col mb-3">
                    <input type="file" name="imagem" class="form-control" placeholder="Imagem do produto">
                </div>
            </div>

            <button type="submit" class="botaoCadastrar mt-1">
                {{ isset($produto) ? 'Alterar' : 'Cadastrar' }}
            </button>

        </form>

    </div>
@endsection
