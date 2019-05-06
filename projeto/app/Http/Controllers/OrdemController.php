<?php

namespace projeto\Http\Controllers;

use Illuminate\Http\Request;
use projeto\{Ordem, OrdemDetalhe, Cliente};

class OrdemController extends Controller
{
    public function listar(){
        $ordens = Ordem::orderBy('order_id')->get();
        
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
            'ship_name' => 'required',
            'customer_id' => 'required'
        ]);

        $ordem = new Ordem([
            'order_id' => $id,
            'ship_name' => $request->get('ship_name'),
            'order_date' => $request->get('order_date'),
            'required_date' => $request->get('required_date'),
            'shipped_date' => $request->get('shipped_date'),
            'ship_via' => $request->get('ship_via'),
            'freight' => $request->get('freight'),
            'ship_address' => $request->get('ship_address'),
            'ship_city' => $request->get('ship_city'),
            'ship_region' => $request->get('ship_region'),
            'ship_postal_code' => $request->get('ship_postal_code'),
            'ship_country' => $request->get('ship_country'),
        ]);

        $cliente = Cliente::findOrFail($request->get('customer_id'));
        $ordem->cliente()->associate($cliente);    

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
            'ship_name' => 'required',
            'customer_id' => 'required'
        ]);
        $cliente = Cliente::findOrFail($request->get('customer_id'));

        $ordem = Ordem::findOrFail($id);
        $ordem->ship_name = $request->get('ship_name');
        $ordem->order_date = $request->get('order_date');
        $ordem->required_date = $request->get('required_date');
        $ordem->shipped_date = $request->get('shipped_date');
        $ordem->ship_via = $request->get('ship_via');
        $ordem->freight = $request->get('freight');
        $ordem->ship_address = $request->get('ship_address');
        $ordem->ship_city = $request->get('ship_city');
        $ordem->ship_region = $request->get('ship_region');
        $ordem->ship_postal_code = $request->get('ship_postal_code');
        $ordem->ship_country = $request->get('ship_country');

        $ordem->cliente()->associate($cliente);
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
