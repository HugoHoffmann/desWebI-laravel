<?php

namespace projeto\Http\Controllers;

use Illuminate\Http\Request;
use projeto\{Produto, OrdemDetalhe, Categoria};

class ProdutoController extends Controller
{
    public function listar() {
        $produtos = Produto::orderBy('product_id')->get();

        return view('produto.listar', compact('produtos'));
    }

    public function incluir() {
        $categorias = Categoria::orderBy('category_id')->get();

        return view('produto.incluir', compact('categorias'));
    }

    public function salvar(Request $request) {
        $id = Produto::max('product_id');
        $id++;
        
        $validate = $request->validate([
            'product_name' => 'required',
            'category_id' => 'required',
        ]);

        $produto = new Produto([
            'product_id' => $id,
            'product_name' => $request->get('product_name'),
            'quantity_per_unit' => $request->get('quantity_per_unit'),
            'unit_price' => $request->get('unit_price'),
            'units_in_stock' => $request->get('units_in_stock'),
            'units_on_order' => $request->get('units_on_order'),
            'reorder_level' => $request->get('reorder_level'),
            'discontinued' => $request->get('discontinued') ? 1 : 0,
        ]);

        $categoria = Categoria::findOrFail($request->get('category_id'));
        $produto->categoria()->associate($categoria);

        $produto->save();

        return redirect()->route('produto.listar')->with('message', 'Produto inserido com sucesso!');
    }

    public function alterar($id){
        $produto = Produto::findOrFail($id);
        $categorias = Categoria::orderBy('category_id')->get();

        return view('produto.alterar', compact('produto', 'categorias'));
    }

    public function atualizar(Request $request, $id) {
        $validate = $request->validate([
            'product_name' => 'required',
            'category_id' => 'required',
        ]);

        $categoria = Categoria::findOrFail($request->get('category_id'));

        $produto = Produto::findOrFail($id);
        $produto->product_name = $request->get('product_name');
        $produto->discontinued = $request->get('discontinued') ? 1 : 0;
        $produto->quantity_per_unit = $request->get('quantity_per_unit');
        $produto->unit_price = $request->get('unit_price');
        $produto->units_in_stock = $request->get('units_in_stock');
        $produto->units_on_order = $request->get('units_on_order');
        $produto->reorder_level = $request->get('reorder_level');

        $produto->categoria()->associate($categoria);
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
