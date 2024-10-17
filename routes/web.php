<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController; 
use App\Http\Controllers\CategoriaController; 
use App\Http\Controllers\FornecedorController; 
use App\Http\Controllers\AdmController; 

// ROTAS DAS PÁGINAS
// Route::get('/', function () { return view('home'); });
// Route::get('/homeAdministrador', function () { return view('pages.homeAdm'); })->name('homeAdministrador');

Route::get('/homeAdministrador',[AdmController::class,'homeAdministrador']) ->name('homeAdministrador');

Route::get('/catalogo', function () { return view('pages.catalogo'); })->name('catalogo');

Route::get('/cadproduto', function () { return view('pages.cadProduto'); })->name('cadproduto');

Route::get('/fornecedores', function () { return view('pages.cadFornecedor'); })->name('fornecedores');

Route::get('/categorias', function () { return view('pages.cadCategoria'); })->name('categorias');

Route::get('/carrinho', function () { return view('pages.carrinho'); })->name('carrinho');

// ROTAS PRODUTO
Route::post('produtos/create',[ProdutoController::class,'create']) ->name('createproduto');

Route::get('conproduto',[ProdutoController::class,'consultar']) ->name('consultar');

Route::get('catalogo',[ProdutoController::class,'catalogo']) ->name('catalogo');

Route::get('deletar/{id}',[ProdutoController::class,'deletar']) ->name('deletar');

Route::get('alterar/{id}',[ProdutoController::class,'alterar']) ->name('alterarproduto');

Route::get('/',[ProdutoController::class,'home'])->name('home');

// ROTAS CATEGORIA  
Route::post('categoria/create',[CategoriaController::class,'create']) ->name('createcategoria');

// Route::get('/cadproduto',[CategoriaController::class,'categorias']) ->name('categorias');

Route::get('deletar/{id}',[CategoriaController::class,'deletar']) ->name('deletar');

Route::get('alterar/{id}',[CategoriaController::class,'alterar']) ->name('alterar');


// ROTAS FORNECEDOR
Route::post('fornecedor/create',[FornecedorController::class,'create']) ->name('createfornecedor');

Route::get('fornecedores',[FornecedorController::class,'consultar']) ->name('fornecedores');

Route::get('deletar/{id}',[FornecedorController::class,'deletar']) ->name('deletar');

Route::get('alterar/{id}',[FornecedorController::class,'alterar']) ->name('alterar');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified', ])->group(function () { Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');});
