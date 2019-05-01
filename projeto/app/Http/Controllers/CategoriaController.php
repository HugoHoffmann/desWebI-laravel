<?php

namespace projeto\Http\Controllers;

use Illuminate\Http\Request;
use projeto\{Categoria, Produto};

class CategoriaController extends Controller
{

    public function listar(){
        $categorias = Categoria::all();

        return view('categoria.listar', compact('categorias'));        
    }

    public function incluir(){
        return view('categoria.incluir');
    }

    public function salvar(Request $request){
        if(Categoria::find($request->get('category_id'))){
            return redirect()->route('categoria.listar')->with('message', 'Já existe uma categoria com esse ID!');
        }

        $categoria = new Categoria($request->all());
        $categoria->save();

        return redirect()->route('categoria.listar')->with('message', 'Categoria inserida com sucesso!');
    }

    public function alterar($id){
        $categoria = Categoria::find($id);

        return view('categoria.alterar', compact('categoria'));
    }

    public function atualizar(Request $request, $id) {
        $categoria = Categoria::find($id);

        $categoria->category_name = $request->get('category_name');
        $categoria->save();

        return redirect()->route('categoria.listar')->with('message', 'Categoria atualizada com sucesso!');
    }

    public function excluir($id){
        if (Produto::where('category_id', '=', $id)->count()) {
            return redirect()->route('categoria.listar')->with('message', 'É necessário excluir os produtos dessa categoria antes de excluí-la!');
        }

        $categoria = Categoria::find($id);
        $categoria->delete();

        return redirect()->route('categoria.listar')->with('message', 'Categoria excluída com sucesso!');
    }
    
}
