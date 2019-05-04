@extends('layout.index')

@section('conteudo')
    <form action="{{ route('ordem.salvar') }}" method="post">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="product-name">Nome de destino:</label>
            <input class="form-control" type="text" name="ship_name" id="ship-name">
        </div>
        <!-- DEMAIS CAMPOS -->
        <button type="submit" class="btn btn-primary">Incluir</button>
    </form>
@endsection