@extends('layout.index')

@section('conteudo')
<form action="{{ route('produto.atualizar', $produto->product_id) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="product-id">ID do produto:</label>
            <input class="form-control" type="text" name="product_id" id="product-id" disabled="disabled" value="{{ $produto->product_id ?? '' }}">
        </div>
        <div class="form-group">
            <label for="product-name">Nome do produto:</label>
            <input class="form-control" type="text" name="product_name" id="product-name" value="{{ $produto->product_name ?? '' }}">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="discontinued" {{ $produto->discontinued ? 'checked' : '' }} >
            <label for="discontinued" class="form-check-label">Descontinuado?</label>
        </div>
        <!-- DEMAIS CAMPOS -->
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection