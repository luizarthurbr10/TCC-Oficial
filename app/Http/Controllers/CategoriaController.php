<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Validacao;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    // função para cadastrar categoria
    public function create(Request $request){
        $categoria = new Categoria();

        $categoria->nomeCategoria = $request->nomeCategoria;
        $categoria->descricaoCategoria = $request->descricaoCategoria;

        $categoria->save();

        return back();
    }   

    public function update(Request $request,$idCategoria){
        $categoria = Categoria::find($idCategoria);

        $categoria->nomeCategoria = $request->nomeCategoria;
        $categoria->descricaoCategoria = $request->descricaoCategoria;

        $categoria->save();

        return back();
    }   

    // Função para Consultar Categoria
    public function consultar(){
        $categoria = Categoria::all();
        return view('pages.cadCategoria', ['categoria' => $categoria]);
    }

    public function selecionar(){
        $categoria = Categoria::all();
        return view('pages.cadProduto', ['categoria' => $categoria]);
    }

    // Função para Deletar Categoria
    public function deletarCategoria($idCategoria){
        $categoria = Categoria::find($idCategoria);
        $categoria->delete();
        return back();
    }

    // Função para Alterar Categoria
    public function alterar($idCategoria){

        $categoria = Categoria::all();
        $categoriaalterar  = Categoria::find($idCategoria);

        return view('pages.cadCategoria', ['categoria' => $categoria, 'categoriaalterar'=>$categoriaalterar]);
    }
}
