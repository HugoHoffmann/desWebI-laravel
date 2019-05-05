<?php

namespace projeto\Http\Controllers;

use Illuminate\Http\Request;
use projeto\{Ordem, Produto};

class OrdemDetalheController extends Controller
{
    public function listar(){
        $ordensDetalhe = OrdemDetalhe::all();
        dd($ordensDetalhe);

        return view('ordemDetalhe.listar', compact('ordensDetalhe'));
    }

    public function incluir(){
        return view('ordemDetalhe.incluir');
    }

    public function salvar(Request $request){
        $id = OrdemDetalhe::max('order_id');
        $id++;
// verificar como fazer
        $validate = $request->validate([
            'ship_name' => 'required'
        ]);

        $ordem = new Ordem([
            'order_id' => $id,
            'ship_name' => $request->get('ship_name'),
        ]);

        $ordem->save();

        return redirect()->route('ordem.listar')->with('message', 'Ordem inserida com sucesso!');

    }

    public function alterar($id){
        $ordemDetalhe = OrdemDetalhe::findOrFail($id);

        return view('ordemDetalhe.alterar', compact('ordemDetalhe'));
    }

    public function atualizar(Request $request, $id){
        $validate = $request->validate([
            'unit_price' => 'required'
        ]);

        $ordemDetalhe = OrdemDetalhe::findOrFail($id);
        $ordemDetalhe->unit_price = $request->get('unit_price');
        $ordemDetalhe->unit_price = $request->get('quantity');
        $ordemDetalhe->unit_price = $request->get('discount');

        $ordem->save();

        return redirect()->route('ordemDetalhe.listar')->with('messagem', 'Ordem Detalhe atualizada com sucesso!');

    }

    public function excluir($id){
        $ordem = OrdemDetalhe::findOrFail($id);

        if (OrdemDetalhe::where('order_id', '=', $id)->count()){
            return redirect()->route('ordem.listar')->with('message', 'É necessário excluir os produtos desse pedido antes de excluí-lo!');
        }

        $ordem->delete();

        return redirect()->route('ordem.listar')->with('message', 'Ordem excluída com sucesso!');

    }
}
