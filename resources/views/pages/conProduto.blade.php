@extends('layouts.masterpage2')
@php
    $carousel = 0;
@endphp

@section('conteudo')

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Valor</th>
            <th>Descrição</th>
            <th>Quantidade</th>
            <th>Imagem</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produto as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->nome}}</td>
            <td>{{$item->descricao}}</td>
            <td>{{$item->valor}}</td>
            <td>
                R$ {{number_format($item->valor,2,",",".")}}
            </td>
            <td>
                <img src="/storage/images/{{$item->imagem}}" width="40" />
            </td>
            <td>
                <a href="alterar/{{$item->id}}" class="btn btn-warning">Alterar</a>
                <a href="deletar/{{$item->id}}" class="btn btn-danger">Deletar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
