@extends('layout.index')

@section('conteudo')
<form action="{{ route('categoria.atualizar', $categoria->category_id) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="category-name">Nome da categoria:</label>
            <input class="form-control" type="text" name="category_name" id="category-name" value="{{ $categoria->category_name ?? '' }}">
        </div>
        <div class="form-group">
                <label for="description">Descrição da categoria:</label>
                <input class="form-control" type="text" name="description" id="description" value="{{ $categoria->description ?? '' }}">
            </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection