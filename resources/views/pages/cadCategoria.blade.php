@extends('layouts.masterpage2')
@php
    $carousel = 0;
@endphp

@section('conteudo')
<div class="lalala container">
    <div class="headAdm">
        <h2>Cadastrar Categoria</h2>
        <button type="submit" class="botaoVoltar">
            <a href="{{route('homeAdministrador')}}">Voltar</a>
        </button>
    </div>
    <form class="mt-2" method="POST" action= "{{ isset($categoriaalterar) ? '\update/' .$categoriaalterar->idCategoria : 'categoria/create' }}">
    @csrf
    @if (isset($categoriaalterar))
                @method('PUT')
            @endif
        <div class="mb-3">
            <input placeholder="Nome da Categoria" name="nomeCategoria" type="text" class="form-control" value="{{ old('nomeCategoria', isset($categoriaalterar->nomeCategoria) ? $categoriaalterar->nomeCategoria : '') }}">
        </div>
        <div class="mb-3">
            <input placeholder="Descrição da Categoria" name="descricaoCategoria" type="text" class="form-control" value="{{ old('descricaoCategoria', isset($categoriaalterar->descricaoCategoria) ? $categoriaalterar->descricaoCategoria : '') }}">
        </div>
        <button type="submit" class="botaoCadastrar mt-2">
            {{ isset($categoriaalterar) ? 'Alterar' : 'Cadastrar'}}
        </button>
    </form>

    <div class="headAdm mt-4">
        <h2>Todas as Categorias</h2>
    </div>
    <table class="container table table-striped mt-2">
        <thead>
            <tr>
                <th>Id</th>
                <th>Categoria</th>
                <th>Descrição</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categoria as $item)
                <tr>
                    <td>{{ $item->idCategoria }}</td>
                    <td>{{ $item->nomeCategoria }}</td>
                    <td>{{ $item->descricaoCategoria }}</td>
                    <td>
                        <a href="\alterar/{{ $item->idCategoria}}" class="btn btn-warning">Alterar</a>
                        <a href="\deletarCategoria/{{ $item->idCategoria}}" class="btn btn-danger">Deletar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</div>

@endsection