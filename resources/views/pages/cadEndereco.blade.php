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
            <form class="formEndereco">
                <input type="text" class="campo-texto" placeholder="Dê um nome a este endereço">
                <select class="campo-select">
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
                <input type="text" class="campo-texto" placeholder="Cidade">
                <input type="text" class="campo-texto" placeholder="CEP">
                <input type="text" class="campo-texto" placeholder="Bairro ou logradouro">
                <input type="text" class="campo-texto" placeholder="Complemento e referência">
                <button type="submit" class="botao">Cadastrar</button>
            </form>
        </div>
    </div>
@endsection
