<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use App\Models\Fornecedor;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class produtoController extends Controller
{
    // função para cadastrar produto
    public function create(Request $request)
    {
        $produto = new Produto();

        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->cor = $request->cor;
        $produto->valor = $request->valor;
        $produto->quantidade = $request->quantidade;
        $produto->fornecedor = $request->fornecedor;
        $produto->categoria = $request->categoria;

        $nomeimg = $produto->imagem = time() . "." . $request->imagem->extension();
        $request->file('imagem')->storeAs('public/images', $nomeimg);

        $produto->save();
        return redirect()->route('consultar')->with('success', 'Produto Cadastrado!');
    }

    public function updateProduto(Request $request, $id)
    {
        $produto = Produto::find($id);

        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->cor = $request->cor;
        $produto->valor = $request->valor;
        $produto->quantidade = $request->quantidade;
        $produto->fornecedor = $request->fornecedor;
        $produto->categoria = $request->categoria;

        $nomeimg = $produto->imagem = time() . "." . $request->imagem->extension();
        $request->file('imagem')->storeAs('public/images', $nomeimg);

        $produto->save();
        // return back();
        return redirect()->route('con')->with('success', 'Produto Cadastrado!');

    }

    // Função para Consultar Produto
    public function consultar()
    {
        // $produto = Produto::all();
        $produto = Produto::select('produtos.*', 'categorias.nomeCategoria as categoria', 'fornecedores.nomeFornecedor as fornecedor')
            ->join('categorias', 'produtos.categoria', '=', 'categorias.idCategoria')
            ->join('fornecedores', 'produtos.fornecedor', '=', 'fornecedores.idFornecedor')
            ->get();
        return view('pages.conProduto', ['produto' => $produto]);
    }

    public function catalogo()
    {
        $produto = Produto::all();
        $categoria = Categoria::all();
        return view('pages.catalogo', ['produto' => $produto, 'categoria' => $categoria]);
    }

    // Função para Deletar Produto
    public function deletarProduto($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
        return back();
    }

    // Função para Alterar Produto
    public function alterarproduto($id)
    {
        $categoria = Categoria::all();
        $fornecedor = Fornecedor::all();
        //$produto = Produto::find($id);

        $produto = Produto::select('produtos.id', 'produtos.nome','produtos.fornecedor', 'produtos.categoria',  'produtos.valor', 'produtos.descricao', 'produtos.cor', 'produtos.quantidade', 'categorias.idCategoria as categoria', 'fornecedores.idFornecedor as fornecedor')
            ->join('categorias', 'produtos.categoria', '=', 'categorias.idCategoria')
            ->join('fornecedores', 'produtos.fornecedor', '=', 'fornecedores.idFornecedor')
            ->where('produtos.id', $id)
            ->first(); // Para obter um único registro

        return view('pages.cadProduto', ['produto' => $produto, 'categoria'=>$categoria, 'fornecedor'=>$fornecedor]);
    }

    public function home()
    {
        $produto = Produto::all(); //SELECT * FROM produdto;
        $categoria = Categoria::all();
        return view('home', ['produto' => $produto, 'categoria' => $categoria]);
    }

    // visualizar categorias no select
    public function cadprodutos()
    {
        $categoria = Categoria::all();
        $fornecedor = Fornecedor::all();
        return view('pages.cadProduto', ['categoria' => $categoria, 'fornecedor' => $fornecedor]);
    }

    // mostrar detalhes do produto
    public function detalhe($id)
    {
        $produto = Produto::find($id);
        return view('pages.detalheProduto', ['produto' => $produto]);
    }

    // FUNÇÕES DO CARRINHO
    public function cart($id)
    {
        $produto = Produto::find($id);
        $carrinho = Session::get('carrinho', []);

        if (isset($carrinho[$id])) {
            $carrinho[$id]['qtd']++;
        } else {
            $carrinho[$id] = [
                'id' => $produto->id,
                'nome' => $produto->nome,
                'valor' => $produto->valor,
                'descricao' => $produto->descricao,
                'imagem' => $produto->imagem,
                'qtd' => 1
            ];
        }

        $sum_qtd = 0;
        $sum_valor = 0;

        foreach ($carrinho as $item) {
            $sum_qtd += $item['qtd'];
            $sum_valor += $item['valor'] * $item['qtd'];
        }

        Session::put('carrinho', $carrinho);
        Session::put('sum_qtd', $sum_qtd);
        Session::put('sum_valor', $sum_valor);

        return back();
    }

    // Adiciona produto ao carrinho
    public function cartAdd($id)
    {
        // Obtém os dados do carrinho da sessão
        $carrinho = session()->get('carrinho', []);
        $sum_qtd = session()->get('sum_qtd');
        $sum_valor = session()->get('sum_valor');

        if (isset($carrinho[$id])) {
            // Aumenta a quantidade do item em 1
            $carrinho[$id]['qtd'] += 1;

            // Atualiza a quantidade total e o valor total na sessão
            session()->put('sum_qtd', $sum_qtd + 1);
            session()->put('sum_valor', $sum_valor + $carrinho[$id]['valor']);

            // Salva as alterações no carrinho na sessão
            session()->put('carrinho', $carrinho);
        }
        return back();
    }

    // Remove uma unidade do produto inserido no carrinho
    public function cartRemove($id)
    {
        // Obtém os dados do carrinho da sessão
        $carrinho = session()->get('carrinho', []);
        $sum_qtd = session()->get('sum_qtd');
        $sum_valor = session()->get('sum_valor');

        if (isset($carrinho[$id]) && $carrinho[$id]['qtd'] > 1) {
            // Reduz a quantidade do item em 1, mas garante que não seja menor que 1
            $carrinho[$id]['qtd'] -= 1;

            // Atualiza a quantidade total e o valor total na sessão
            session()->put('sum_qtd', $sum_qtd - 1);
            session()->put('sum_valor', $sum_valor - $carrinho[$id]['valor']);

            // Salva as alterações no carrinho na sessão
            session()->put('carrinho', $carrinho);
        } 

        return back();
    }

    // Remove todas as unidades de um produto inserido no carrinho
    public function cartDestroy($id)
    {
        $carrinho = session()->get('carrinho', []);
        $sum_qtd = session()->get('sum_qtd');
        $sum_valor = session()->get('sum_valor');

        if (isset($carrinho[$id])) {
            // Remove o item do carrinho
            unset($carrinho[$id]);

            // Verifica se o carrinho está vazio
            if (empty($carrinho)) {
                // Se o carrinho estiver vazio, limpa todas as variáveis de sessão relacionadas
                session()->forget('carrinho');
                session()->forget('sum_qtd');
                session()->forget('sum_valor');
            } else {
                // Recalcula a quantidade total e o valor total do carrinho
                $sum_qtd = 0;
                $sum_valor = 0;

                foreach ($carrinho as $item) {
                    $sum_qtd += $item['qtd'];
                    $sum_valor += $item['valor'] * $item['qtd'];
                }

                // Atualiza o carrinho e as variáveis na sessão
                session()->put('carrinho', $carrinho);
                session()->put('sum_qtd', $sum_qtd);
                session()->put('sum_valor', $sum_valor);
            }
        }

        return back();
    }

}
