<?php

namespace projeto\Http\Controllers;

use Illuminate\Http\Request;
use projeto\{Produto};

class ProdutoController extends Controller
{
    public function listar(){
        $produtos = Produto::all();
        dd($produtos);
    }
}
