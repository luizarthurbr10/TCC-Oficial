<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use App\Models\Fornecedor;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    // função para cadastrar produto
    public function create(Request $request){
        $produto = new Produto();

        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->cor = $request->cor;
        $produto->valor = $request->valor;
        $produto->quantidade = $request->quantidade;
        $produto->fornecedor = $request->fornecedor;
        $produto->categoria = $request->categoria;

        $nomeimg = $produto->imagem = time().".".$request->imagem->extension();
        $request->file('imagem')->storeAs('public/images', $nomeimg);

        $produto->save();

        return back();
    }
    
    // Função para Consultar Produto
    public function consultar(){
        $produto = Produto::all();
        return view('pages.conproduto', ['produto' => $produto]);
    }

    public function catalogo(){
        $produto = Produto::all();
        return view('pages.catalogo', ['produto' => $produto]);
    }

    // Função para Deletar Produto
    public function deletar($id){

        $produto = Produto::find($id);

        $produto->delete();
        return back();
    }

    // Função para Alterar Produto
    public function alterar($id){

        $produto = Produto::find($id);
        return view('pages.cadproduto', ['produto' => $produto]);

    }

    public function home(){
        $produto = Produto::all();//SELECT * FROM produdto;
        return view('home', ['produto'=> $produto]);
    }

    // visualizar categorias no select
    public function cadprodutos(){
        $categoria = Categoria::all();
        $fornecedor = Fornecedor::all();
        return view('pages.cadProduto', ['categoria' => $categoria, 'fornecedor'=>$fornecedor]);
    }
}
