<?php

namespace projeto\Http\Controllers;

use Illuminate\Http\Request;
use projeto\{Produto, OrdemDetalhe};

class ProdutoController extends Controller
{
    public function listar() {
        $produtos = Produto::all();

        return view('produto.listar', compact('produtos'));
    }

    public function incluir() {
        return view('produto.incluir');
    }

    public function salvar(Request $request) {
        $id = Produto::max('product_id');
        $id++;
        
        $validate = $request->validate([
            'product_name' => 'required'
        ]);

        $produto = new Produto([
            'product_id' => $id,
            'product_name' => $request->get('product_name'),
            'discontinued' => $request->get('discontinued') ? 1 : 0,
        ]);

        $produto->save();

        return redirect()->route('produto.listar')->with('message', 'Produto inserido com sucesso!');
    }

    public function alterar($id){
        $produto = Produto::findOrFail($id);

        return view('produto.alterar', compact('produto'));
    }

    public function atualizar(Request $request, $id) {
        $validate = $request->validate([
            'product_name' => 'required'
        ]);

        $produto = Produto::findOrFail($id);
        $produto->product_name = $request->get('product_name');
        $produto->discontinued = $request->get('discontinued') ? 1 : 0;

        $produto->save();

        return redirect()->route('produto.listar')->with('message', 'Produto atualizado com sucesso!');
    }

    public function excluir($id){
        $produto = Produto::findOrFail($id);
        
        if (OrdemDetalhe::where('product_id', '=', $id)->count()) {
            return redirect()->route('produto.listar')->with('message', 'É necessário excluir os pedidos desse produto antes de excluí-lo!');
        }

        $produto->delete();

        return redirect()->route('produto.listar')->with('message', 'Produto excluído com sucesso!');
    }
}
