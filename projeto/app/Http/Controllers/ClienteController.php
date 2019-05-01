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
        if (Cliente::find($request->get('customer_id'))) {
            return redirect()->route('cliente.listar')->with('message', 'Já existe um cliente com esse ID!');
        }

        $cliente = new Cliente($request->all());
        $cliente->save();

        return redirect()->route('cliente.listar')->with('message', 'Cliente inserido com sucesso!');
    }

    public function alterar($id){
        $cliente = Cliente::find($id);

        return view('cliente.alterar', compact('cliente'));
    }

    public function atualizar(Request $request, $id) {
        $cliente = Cliente::find($id);

        // $cliente->customer_id = $request->get('customer_id');
        $cliente->company_name = $request->get('company_name');
        $cliente->save();

        return redirect()->route('cliente.listar')->with('message', 'Cliente atualizado com sucesso!');
    }

    public function excluir($id){
        //@TODO implementar verificar de se existe alguma ORDER desse cliente, previnir exclusão semelhante a como foi feito na inclusão
        // if (Pedido::where('customer_id', '=', $id)->count()) {
        //     return redirect()->route('cliente.listar')->with('message', 'É necessário excluir os pedidos desse cliente antes de excluí-lo!');
        // }

        $cliente = Cliente::find($id);
        $cliente->delete();

        return redirect()->route('cliente.listar')->with('message', 'Cliente excluído com sucesso!');
    }

}
