<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produtoController; 

// ROTAS DAS PÁGINAS
Route::get('/', function () { return view('home'); });

Route::get('/cadProduto', function () { return view('pages.cadProduto'); })->name('cadproduto');

Route::get('/conProduto', function () { return view('pages.conProduto'); })->name('conproduto');

Route::get('/homeAdm', function () { return view('pages.homeAdm'); })->name('homeAdm');


// ROTAS CRUD
Route::post('produtos/create',[produtoController::class,'create']) ->name('createproduto');
Route::get('conproduto',[produtoController::class,'consultar']) ->name('consultar');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified', ])->group(function () { Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');});
