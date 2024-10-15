@extends('layouts.masterpage2')
@php
    $carousel = 0;
@endphp

@section('conteudo')
    <div class="lalala container mt-4">
        <div class="headAdm">
            <h2>Cadastrar Produto</h2>
            <button type="submit" class="botaoVoltar">
                <a href="{{ route('homeAdministrador') }}">Voltar</a>
            </button>
        </div>
        <form action="produtos/create" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nome:</label>
                <input name="nome" type="text" class="form-control"
                    value="{{ old('nome', isset($produto->nome) ? $produto->nome : '') }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Valor:</label>
                <input name="valor" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Descrição:</label>
                <input name="descricao" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Cor:</label>
                <input name="cor" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Quantidade:</label>
                <input name="quantidade" type="number" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Categoria:</label>
                <select name="categoria" class="form-select" aria-label="Default select example">
                    <option selected>Escolher Categoria</option>
                    @foreach ($categoria as $item)
                        <option value="{{$item->idCategoria}}">{{$item->nomeCategoria}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Fornecedor:</label>
                <select name="forneceodr" class="form-select" aria-label="Default select example">
                    <option selected>Escolher Fornecedor</option>
                    {{-- @foreach ($categoria as $cat)
                        <option value="{{$cat->idCategoria}}">{{$cat->nomeCategoria}}</option>
                    @endforeach --}}
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Imagem:</label>
                <input type="file" name="imagem" class="form-control" placeholder="Imagem do produto">
            </div>

            <button type="submit" class="botaoCadastrar mt-3">
                {{ isset($produto) ? 'Alterar' : 'Cadastrar' }}
            </button>
        </form>

    </div>
@endsection
