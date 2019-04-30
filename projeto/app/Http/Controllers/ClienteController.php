<?php

namespace projeto\Http\Controllers;

use Illuminate\Http\Request;
use projeto\{Cliente};

class ClienteController extends Controller
{
    

    public function index() {
        $clientes = Cliente::all();
        //dd($clientes);
        return view('cliente.index', compact('clientes'));
    }

    public function altera($id){
        return view('cliente.altera');
    }

    public function exclui($id){
        
    }

}
