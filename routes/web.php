<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produtoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\FornecedorController;

// ROTAS DAS PÁGINAS
Route::get('/homeAdministrador', function () {
    return view('pages.homeAdm');
})->name('homeAdministrador');

Route::get('/catalogo', function () {
    return view('pages.catalogo');
})->name('catalogo');

Route::get('/produto', function () {
    return view('pages.produto');
})->name('produto');

Route::get('/cadprodutos', [produtoController::class, 'cadprodutos'])->name('cadprodutos');

Route::get('/fornecedores', function () {
    return view('pages.cadFornecedor');
})->name('fornecedores');

Route::get('/categorias', function () {
    return view('pages.cadCategoria');
})->name('categorias');

Route::get('/carrinho', function () {
    return view('pages.carrinho');
})->name('carrinho');

Route::get('/cadEndereco', function () {
    return view('pages.cadEndereco');
})->name('cadEndereco');

// ROTAS PRODUTO
Route::post('produtos/create', [produtoController::class, 'create'])->name('createproduto');

Route::get('conproduto', [produtoController::class, 'consultar'])->name('consultar');

Route::get('catalogo', [produtoController::class, 'catalogo'])->name('catalogo');

Route::get('deletar/{id}', [produtoController::class, 'deletar'])->name('deletar');

Route::get('alterarproduto/{id}', [produtoController::class, 'alterarproduto'])->name('alterarproduto');

Route::get('/', [produtoController::class, 'home'])->name('home');

// ROTAS CATEGORIA  
Route::post('categoria/create', [CategoriaController::class, 'create'])->name('createcategoria');

Route::get('categorias', [CategoriaController::class, 'consultar'])->name('categorias');

Route::get('deletar/{id}', [CategoriaController::class, 'deletar'])->name('deletar');

Route::get('alterar/{id}', [CategoriaController::class, 'alterar'])->name('alterar');

// ROTAS FORNECEDOR
Route::post('fornecedor/create', [FornecedorController::class, 'create'])->name('createfornecedor');

Route::get('fornecedores', [FornecedorController::class, 'consultar'])->name('fornecedores');

Route::get('deletar/{id}', [FornecedorController::class, 'deletar'])->name('deletar');

Route::get('alterar/{id}', [FornecedorController::class, 'alterar'])->name('alterar');



Route::get('cart/{id}', [produtoController::class, 'cart'])->name('cart');

Route::get('cartDestroy/{id}', [produtoController::class, 'cartDestroy'])->name('cartDestroy');

Route::get('cartAdd/{id}', [produtoController::class, 'cartAdd'])->name('cartAdd');

Route::get('cartRemove/{id}', [produtoController::class, 'cartRemove'])->name('cartRemove');

Route::get('detalhe/{id}', [produtoController::class, 'detalhe']) ->name('detalhe');

Route::put('update/{id}', [produtoController::class, 'update'])->name('update');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', function () {
        if (session('nivel') === 'admin') {
            return view('pages.homeAdm');
        }
        if (session('nivel') === 'user') {
            return view('home');
        }
    })->name('dashboard');
});
