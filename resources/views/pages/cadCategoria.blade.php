@extends('layouts.masterpage2')

@section('conteudo')
<div class="lalala container mt-4">
    <div class="headAdm">
        <h2>Cadastrar Categoria</h2>
        <button type="submit" class="botaoVoltar">
            <a href="{{route('homeAdministrador')}}">Voltar</a>
        </button>
    </div>
    <form action="categoria/create" method="POST">
    @csrf
        <div class="mb-3">
            <label class="form-label">Categoria:</label>
            <input name="nomeCategoria" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Descrição:</label>
            <input name="descricaoCategoria" type="text" class="form-control">
        </div>
        <button type="submit" class="botaoCadastrar mt-2">
            {{ isset($categoria) ? 'Cadastrar': 'Alterar' }}
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
                        <a href="alterar/{{ $item->idCategoria}}" class="btn btn-warning">Alterar</a>
                        <a href="deletar/{{ $item->idCategoria}}" class="btn btn-danger">Deletar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</div>

@endsection