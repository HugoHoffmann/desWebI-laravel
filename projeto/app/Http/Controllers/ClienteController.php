<?php

namespace projeto\Http\Controllers;

use Illuminate\Http\Request;
use projeto\{Cliente, Ordem};

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
        $validate = $request->validate([
            'customer_id' => 'required',
            'company_name' => 'required'
        ]);

        if (Cliente::find($request->get('customer_id'))) {
            return redirect()->route('cliente.listar')->with('message', 'Já existe um cliente com esse ID!');
        }

        $cliente = new Cliente($request->all());
        $cliente->save();

        return redirect()->route('cliente.listar')->with('message', 'Cliente inserido com sucesso!');
    }

    public function alterar($id){
        $cliente = Cliente::findOrFail($id);

        return view('cliente.alterar', compact('cliente'));
    }

    public function atualizar(Request $request, $id) {
        $validate = $request->validate([
            'company_name' => 'required'
        ]);

        $cliente = Cliente::findOrFail($id);

        // $cliente->customer_id = $request->get('customer_id');
        $cliente->company_name = $request->get('company_name');
        $cliente->save();

        return redirect()->route('cliente.listar')->with('message', 'Cliente atualizado com sucesso!');
    }

    public function excluir($id){
        if (Ordem::where('customer_id', '=', $id)->count()) {
            return redirect()->route('cliente.listar')->with('message', 'É necessário excluir os pedidos desse cliente antes de excluí-lo!');
        }

        $cliente = Cliente::find($id);
        $cliente->delete();

        return redirect()->route('cliente.listar')->with('message', 'Cliente excluído com sucesso!');
    }

}
