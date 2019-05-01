@extends('layout.index')

@section('conteudo')
    <form action="{{ route('categoria.salvar') }}" method="post">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="category_name">Nome da Categoria:</label>
            <input class="form-control" type="text" name="category_name" id="category_name">
        </div>
        <div class="form-group">
            <label for="description">Descrição da Categoria:</label>
            <input class="form-control" type="text" name="description" id="description">
        </div>
        <button type="submit" class="btn btn-primary">Incluir</button>
    </form>
@endsection