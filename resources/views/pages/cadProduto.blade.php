@extends('layouts.masterpage2')
@php
    $carousel = 0;
@endphp

@section('conteudo')

    <div class="container mt-4">
        <h2>Cadastrar Produto</h2>
        <form action="produtos/create" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="mb-3">
                <label class="form-label">Nome:</label>
                <input name="nome" type="text" class="form-control" value="{{old('nome', isset($produto->nome) ? $produto->nome : '')}}" >
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
                <input name="quantidade" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Imagem:</label>
                <input type="file" name="imagem" class="form-control" placeholder="Imagem do produto">
            </div>

            <button type="submit" class="btn btn-success mt-3">
                {{ isset($produto) ? 'Alterar': 'Cadastrar' }}
            </button>
        </form>
    </div>
@endsection
