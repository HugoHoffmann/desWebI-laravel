@extends('layout.index')

@section('conteudo')
    <form action="{{ route('produto.salvar') }}" method="post">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="product-name">Nome do produto:</label>
            <input class="form-control" type="text" name="product_name" id="product-name">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="discontinued">
            <label for="discontinued" class="form-check-label">Descontinuado?</label>
        </div>
        <!-- DEMAIS CAMPOS -->
        <button type="submit" class="btn btn-primary">Incluir</button>
    </form>
@endsection