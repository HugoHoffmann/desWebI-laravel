<?php

namespace projeto\Http\Controllers;

use Illuminate\Http\Request;
use projeto\{Ordem, OrdemDetalhe, Cliente};

class OrdemController extends Controller
{
    public function listar(){
        $ordens = Ordem::all();
        
        return view('ordem.listar', compact('ordens'));
    }

    public function incluir(){
        $clientes = Cliente::orderBy('customer_id')->get();

        return view('ordem.incluir', compact('clientes'));
    }

    public function salvar(Request $request){
        $id = Ordem::max('order_id');
        $id++;

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
        $ordem = Ordem::findOrFail($id);
        $clientes = Cliente::orderBy('customer_id')->get();

        return view('ordem.alterar', compact('ordem', 'clientes'));
    }

    public function atualizar(Request $request, $id){
        $validate = $request->validate([
            'ship_name' => 'required'
        ]);

        $ordem = Ordem::findOrFail($id);
        $ordem->ship_name = $request->get('ship_name');

        $ordem->save();

        return redirect()->route('ordem.listar')->with('messagem', 'Ordem atualizada com sucesso!');

    }

    public function excluir($id){
        $ordem = Ordem::findOrFail($id);

        if (OrdemDetalhe::where('order_id', '=', $id)->count()){
            return redirect()->route('ordem.listar')->with('message', 'É necessário excluir os produtos desse pedido antes de excluí-lo!');
        }

        $ordem->delete();

        return redirect()->route('ordem.listar')->with('message', 'Ordem excluída com sucesso!');

    }
}
