<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produtoController; 

// ROTAS DAS PÁGINAS
// Route::get('/', function () { return view('home'); });
Route::get('/homeAdm', function () { return view('pages.homeAdm'); })->name('homeAdm');

Route::get('/catalogo', function () { return view('pages.catalogo'); })->name('catalogo');

Route::get('/',[ProdutoController::class,'home'])->name('home');

Route::get('/cadProduto', function () { return view('pages.cadProduto'); })->name('cadproduto');

Route::post('produtos/create',[produtoController::class,'create']) ->name('createproduto');

Route::get('conproduto',[produtoController::class,'consultar']) ->name('consultar');

Route::get('catalogo',[produtoController::class,'catalogo']) ->name('catalogo');

Route::get('deletar/{id}',[produtoController::class,'deletar']) ->name('deletar');

Route::get('alterar/{id}',[produtoController::class,'alterar']) ->name('alterarproduto');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified', ])->group(function () { Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');});
