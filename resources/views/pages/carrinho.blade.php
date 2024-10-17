@extends('layouts.masterpage')
@php
    $carousel = 0;
@endphp


@section('conteudo')
    <section>
        <div>
            <h1>Meu Carrinho</h1>
        </div>
        <div class="product-container">
            <div class="product-info">
                <img src="https://via.placeholder.com/100" alt="Produto" class="product-image">
                <div class="product-details">
                    <p class="product-name">Assento Almofadado <br><span>Prime Branco</span></p>
                    <p class="product-price">R$ 56,25</p>
                    <p class="installments">Ou em 5x sem juros de R$ 11,25</p>
                </div>
            </div>
    
            <div class="order-info">
                <p><strong>Quantidade:</strong> 1</p>
                <p><strong>Frete:</strong> GRÁTIS</p>
                <p><strong>Forma de pagamento:</strong> Pix</p>
                <p><strong>Subtotal:</strong> R$ 56,25</p>
            </div>
    
            <div class="pickup-info">
                <p><strong>Retirada na loja:</strong> <span class="status">OFF</span></p>
                <p><strong>Cidade/Estado:</strong> Cuiabá MT</p>
                <p><strong>CEP:</strong> 12345-678</p>
                <p><strong>Bairro e Logradouro:</strong> Jardim Bela Vista, Q 45 C 12</p>
                <p><strong>Complemento e Referência:</strong> Rua das Flores, próximo ao posto Jumbo</p>
            </div>
    
            <div class="action-buttons">
                <button class="buy-button">Comprar Produto</button>
                <button class="access-button">Acessar Página do Produto</button>
                <button class="delete-button">Excluir Produto</button>
            </div>
        </div>
    </section>
@endsection
