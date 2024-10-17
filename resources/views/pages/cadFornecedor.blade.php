@extends('layouts.masterpage2')
@php
    $carousel = 0;
@endphp

@section('conteudo')
<div class="lalala container mt-4">
    <div class="headAdm">
        <h2>Cadastrar Fornecedor</h2>
        <button type="submit" class="botaoVoltar">
            <a href="{{route('homeAdministrador')}}">Voltar</a>
        </button>
    </div>
    <form action="fornecedor/create" method="POST">
    @csrf
        <div class="mb-3">
            <label class="form-label">Fornecedor:</label>
            <input name="nomeFornecedor" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Descrição:</label>
            <input name="descricaoFornecedor" type="text" class="form-control">
        </div>
        <button type="submit" class="botaoCadastrar mt-2">
            {{ isset($fornecedor) ? 'Cadastrar': 'Alterar' }}
        </button>
    </form>

    <div class="headAdm mt-4">
        <h2>Todos os Fornecedores:</h2>
    </div>
    <table class="container table table-striped mt-2">
        <thead>
            <tr>
                <th>Id</th>
                <th>Fornecedor</th>
                <th>Descrição</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fornecedor as $item)
                <tr>
                    <td>{{ $item->idFornecedor }}</td>
                    <td>{{ $item->nomeFornecedor }}</td>
                    <td>{{ $item->descricaoFornecedor }}</td>
                    <td>
                        <a href="alterar/{{ $item->idFornecedor}}" class="btn btn-warning">Alterar</a>
                        <a href="deletar/{{ $item->idFornecedor}}" class="btn btn-danger">Deletar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</div>

@endsection