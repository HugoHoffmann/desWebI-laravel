@extends('layout.index')

@section('conteudo')
<form action="{{ route('ordem.atualizar', $ordem->order_id) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="product-id">ID da ordem:</label>
            <input class="form-control" type="text" name="order_id" id="order-id" disabled="disabled" value="{{ $ordem->order_id ?? '' }}">
        </div>
        <div class="form-group">
            <label for="ship-name">Nome de destino:</label>
            <input class="form-control" type="text" name="ship_name" id="ship-name" value="{{ $ordem->ship_name ?? '' }}">
        </div>
        <!-- DEMAIS CAMPOS -->
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection