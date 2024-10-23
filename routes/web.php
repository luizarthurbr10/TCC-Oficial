<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController; 
use App\Http\Controllers\CategoriaController; 
use App\Http\Controllers\FornecedorController; 

// ROTAS DAS PÁGINAS
// Route::get('/', function () { return view('home'); });
Route::get('/homeAdministrador', function () { return view('pages.homeAdm'); })->name('homeAdministrador');

Route::get('/catalogo', function () { return view('pages.catalogo'); })->name('catalogo');

// Route::get('/cadprodutos', function () { return view('pages.cadProduto'); })->name('cadproduto');
Route::get('/cadprodutos',[ProdutoController::class,'cadprodutos']) ->name('cadprodutos');

Route::get('/fornecedores', function () { return view('pages.cadFornecedor'); })->name('fornecedores');

Route::get('/categorias', function () { return view('pages.cadCategoria'); })->name('categorias');

Route::get('/carrinho', function () { return view('pages.carrinho'); })->name('carrinho');

// ROTAS PRODUTO
Route::post('produtos/create',[ProdutoController::class,'create']) ->name('createproduto');

Route::get('conproduto',[ProdutoController::class,'consultar']) ->name('consultar');

Route::get('catalogo',[ProdutoController::class,'catalogo']) ->name('catalogo');

Route::get('deletar/{id}',[ProdutoController::class,'deletar']) ->name('deletar');

Route::get('alterarproduto/{id}',[ProdutoController::class,'alterarproduto'])->name('alterarproduto');

Route::get('/',[ProdutoController::class,'home'])->name('home');

// ROTAS CATEGORIA  
Route::post('categoria/create',[CategoriaController::class,'create']) ->name('createcategoria');

Route::get('categorias',[CategoriaController::class,'consultar']) ->name('categorias');

Route::get('deletar/{id}',[CategoriaController::class,'deletar']) ->name('deletar');

Route::get('alterar/{id}',[CategoriaController::class,'alterar']) ->name('alterar');

// ROTAS FORNECEDOR
Route::post('fornecedor/create',[FornecedorController::class,'create']) ->name('createfornecedor');

Route::get('fornecedores',[FornecedorController::class,'consultar']) ->name('fornecedores');

Route::get('deletar/{id}',[FornecedorController::class,'deletar']) ->name('deletar');

Route::get('alterar/{id}',[FornecedorController::class,'alterar']) ->name('alterar');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified', ])->group(function () { Route::get('/dashboard', function () 
    {
        if(session('nivel')==='admin'){
            return view('pages.homeAdm');
        }
        if(session('nivel')==='user'){
            return view('home');
        }    

    })->name('dashboard');});
