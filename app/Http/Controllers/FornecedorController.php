<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    // função para cadastrar 
    public function create(Request $request){
        $fornecedor = new Fornecedor();

        $fornecedor->nomeFornecedor = $request->nomeFornecedor;
        $fornecedor->descricaoFornecedor = $request->descricaoFornecedor;

        $fornecedor->save();

        return back();
    }

    public function updateFornecedor(Request $request, $idFornecedor){

        $fornecedor = Fornecedor::find($idFornecedor);

        $fornecedor->nomeFornecedor = $request->nomeFornecedor;
        $fornecedor->descricaoFornecedor = $request->descricaoFornecedor;

        $fornecedor->save();

        return back();
    }
    
    // Função para Consultar 
    public function consultar(){
        $fornecedor = Fornecedor::all();
        return view('pages.cadFornecedor', ['fornecedor' => $fornecedor]);
    }

    // Função para Deletar 
    public function deletarFornecedor($idFornecedor){
        $fornecedor = Fornecedor::find($idFornecedor);
        $fornecedor->delete();
        return back();
    }

    // Função para Alterar 
    public function alterarfornecedor($idFornecedor){

        $fornecedoralterar  = Fornecedor::find($idFornecedor);

        $fornecedor = Fornecedor::all();

        return view('pages.cadFornecedor', ['fornecedor' => $fornecedor,'fornecedoralterar'=>$fornecedoralterar]);
    }
}
