@extends('layouts.masterpage2')
@php
    $carousel = 0;
@endphp

@section('conteudo')
    <div class="lalala container">
        <div class="headAdm">
            <h2>Cadastrar Fornecedor</h2>
            <button type="submit" class="botaoVoltar">
                <a href="{{ route('homeAdministrador') }}">Voltar</a>
            </button>
        </div>
        <form class="mt-2" 
        action= "{{ isset($fornecedoralterar) ? '\update/' .$fornecedoralterar->idFornecedor : 'fornecedor/create' }}"
            method="POST">

            @csrf

            @if (isset($fornecedoralterar))
                @method('PUT')
            @endif

            <div class="mb-3">
                <input 
                placeholder="Nome do Fornecedor"
                name="nomeFornecedor"
                type="text"
                class="form-control"
                value="{{ old('nomeFornecedor', isset($fornecedoralterar->nomeFornecedor) ? $fornecedoralterar->nomeFornecedor : '') }}"
                >
            </div>
            <div class="mb-3">
                <input 
                placeholder="Descrição do Fornecedor"
                name="descricaoFornecedor"
                type="text"
                class="form-control"
                value="{{ old('descricaoFornecedor', isset($fornecedoralterar->descricaoFornecedor) ? $fornecedoralterar->descricaoFornecedor : '') }}"
                >
            </div>
            <button type="submit" class="botaoCadastrar mt-2">
                {{ isset($fornecedoralterar) ?  'Alterar' : 'Cadastrar'}}
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
                            <a href="\alterarfornecedor/{{ $item->idFornecedor }}" class="btn btn-warning">Alterar</a>
                            <a href="\deletarFornecedor/{{ $item->idFornecedor }}" class="btn btn-danger">Deletar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
