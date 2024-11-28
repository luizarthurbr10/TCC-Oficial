@extends('layouts.masterpage')
@php
    $navBar = 0;
    $carousel = 0;
    $footer = 0;
@endphp

@section('conteudo')
    <style>
        body {
            background: #003366;
        }
    </style>
    <div class="container containerCadEndereco">
        <div class="formulario">
            <h2 class="titulo">Endereços Cadastrados</h2>
            <p class="mensagem">Nenhum endereço cadastrado...</p>
            <h3 class="subtitulo">Cadastre um Novo Endereço</h3>
            <form class="formEndereco" method="POST"
                action="{{ isset($endereco) ? '\update/' . $endereco->idEndereco : 'endereco/create' }}">
                @csrf
                @if (isset($endereco))
                    @method('PUT')
                @endif
                <input name="nomeEndereco" type="text" class="campo-texto" placeholder="Dê um nome a este endereço"
                    value="{{ old('nomeEndereco', isset($endereco->nomeEndereco) ? $endereco->nomeEndereco : '') }}">
                <select name="estado" class="campo-select"
                    value="{{ old('estado', isset($endereco->estado) ? $endereco->estado : '') }}">
                    <option value="">Estado</option>
                    <option value="AC">Acre (AC)</option>
                    <option value="AL">Alagoas (AL)</option>
                    <option value="AP">Amapá (AP)</option>
                    <option value="AM">Amazonas (AM)</option>
                    <option value="BA">Bahia (BA)</option>
                    <option value="CE">Ceará (CE)</option>
                    <option value="DF">Distrito Federal (DF)</option>
                    <option value="ES">Espírito Santo (ES)</option>
                    <option value="GO">Goiás (GO)</option>
                    <option value="MA">Maranhão (MA)</option>
                    <option value="MT">Mato Grosso (MT)</option>
                    <option value="MS">Mato Grosso do Sul (MS)</option>
                    <option value="MG">Minas Gerais (MG)</option>
                    <option value="PA">Pará (PA)</option>
                    <option value="PB">Paraíba (PB)</option>
                    <option value="PR">Paraná (PR)</option>
                    <option value="PE">Pernambuco (PE)</option>
                    <option value="PI">Piauí (PI)</option>
                    <option value="RJ">Rio de Janeiro (RJ)</option>
                    <option value="RN">Rio Grande do Norte (RN)</option>
                    <option value="RS">Rio Grande do Sul (RS)</option>
                    <option value="RO">Rondônia (RO)</option>
                    <option value="RR">Roraima (RR)</option>
                    <option value="SC">Santa Catarina (SC)</option>
                    <option value="SP">São Paulo (SP)</option>
                    <option value="SE">Sergipe (SE)</option>
                    <option value="TO">Tocantins (TO)</option>
                </select>
                <input type="text" class="campo-texto" placeholder="Cidade" name="cidade"
                    value="{{ old('cidade', isset($endereco->cidade) ? $endereco->cidade : '') }}">
                <input type="text" class="campo-texto" placeholder="CEP" name="cep"
                    value="{{ old('cep', isset($endereco->cep) ? $endereco->cep : '') }}">
                <input type="text" class="campo-texto" placeholder="Bairro ou logradouro" name="bairro"
                    value="{{ old('bairro', isset($endereco->bairro) ? $endereco->bairro : '') }}">
                <input type="text" class="campo-texto" placeholder="Rua" name="rua"
                    value="{{ old('rua', isset($endereco->rua) ? $endereco->rua : '') }}">
                <input type="text" class="campo-texto" placeholder="Complemento e referência" name="complemento"
                    value="{{ old('complemento', isset($endereco->complemento) ? $endereco->complemento : '') }}">
                <button type="submit" class="botao"
                    {{ old('Cadastrar', isset($endereco->idEndereco) ? 'Alterar' : 'Cadastrar') }}>Cadastrar</button>
            </form>
        </div>
    </div>
@endsection
