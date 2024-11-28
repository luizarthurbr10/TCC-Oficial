@extends('layouts.masterpage2')
@php
    $carousel = 0;
@endphp
@section('conteudo')
    <div class="containerTabela container mt-4">
        <div class="headAdm">
            <h2>Consultar Produtos</h2>
            <button type="submit" class="botaoVoltar">
                <a href="{{ route('homeAdministrador') }}">Voltar</a>
            </button>
        </div>
        <table class="tabela container table table-striped mt-2">
            <thead>
                <tr class="tituloTabela">
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Valor</th>
                    <th>Descrição</th>
                    <th>Cor</th>
                    <th>Quantidade</th>
                    <th>Fornecedor</th>
                    <th>Categoria</th>
                    <th>Imagem</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produto as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nome }}</td>
                        <td>
                            R$ {{$item->valor}}
                        </td>
                        <td>{{ $item->descricao }}</td>
                        <td>{{ $item->cor }}</td>
                        <td>{{ $item->quantidade }}</td>
                        <td>{{ $item->fornecedor }}</td>
                        <td>{{ $item->categoria }}</td>
                        <td>
                            <img src="/storage/images/{{ $item->imagem }}" width="100" />
                        </td>
                        <td>
                            <a href="alterarproduto/{{ $item->id }}" class="btn btn-warning">Alterar</a>
                            <a href="deletarProduto/{{ $item->id }}" class="btn btn-danger">Deletar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
