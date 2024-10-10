<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class produtoController extends Controller
{
    // função para cadastrar produto
    public function create(Request $request){
        $produto = new Produto();

        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->valor = $request->valor;
        $produto->quantidade = $request->quantidade;

        $nomeimg = $produto->imagem = time().".".$request->imagem->extension();
        $request->file('imagem')->storeAs('public/images', $nomeimg);

        $produto->save();

        return back();
    }
    
    // Função para consultar produto
    public function consultar(){
        $produto = Produto::all();
        return view('pages.conProduto', ['produto' => $produto]);
    }
}
