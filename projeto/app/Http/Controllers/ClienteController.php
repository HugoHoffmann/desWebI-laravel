<?php

namespace projeto\Http\Controllers;

use Illuminate\Http\Request;
use projeto\{Cliente};

class ClienteController extends Controller
{
    public function listar() {
        $clientes = Cliente::all();

        return view('cliente.listar', compact('clientes'));
    }

    public function incluir() {
        return view('cliente.incluir');
    }

    public function salvar(Request $request) {
        $cliente = new Cliente($request->all());
        $cliente->save();

        return redirect()->route('cliente.listar');
    }

    public function alterar($id){
        $cliente = Cliente::find($id);

        return view('cliente.alterar', compact('cliente'));
    }

    public function atualizar(Request $request, $id) {
        $cliente = Cliente::find($id);

        $cliente->customer_id = $request->get('customer_id');
        $cliente->company_name = $request->get('company_name');
        $cliente->save();

        return redirect()->route('cliente.listar');
    }

    public function excluir($id){
        $cliente = Cliente::find($id);
        $cliente->delete();

        return redirect()->route('cliente.listar');
    }

}
