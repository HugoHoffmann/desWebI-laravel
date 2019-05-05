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
        <div class="form-group">
            <label for="category-id">Categoria:</label>
            <select class="form-control" name="category_id" id="category-id">
                @foreach ($categorias as $categoria) 
                    <option {{ $produto->category_id == $categoria->category_id ? 'selected' : '' }} value="{{ $categoria->category_id }}">{{ $categoria->category_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="quantity-per-unit">Quantidade por unidade:</label>
            <input class="form-control" type="text" name="quantity_per_unit" id="quantity-per-unit" value="{{ $produto->quantity_per_unit ?? '' }}">
        </div>
        <div class="form-group">
            <label for="unit-price">Preço unitário:</label>
            <input class="form-control" type="text" name="unit_price" id="unit-price" value="{{ $produto->unit_price ?? '' }}">
        </div>
        <div class="form-group">
            <label for="units-in-stock">Unidades em estoque:</label>
            <input class="form-control" type="text" name="units_in_stock" id="units-in-stock" value="{{ $produto->units_in_stock ?? '' }}">
        </div>
        <div class="form-group">
            <label for="units-on-order">Unidades em pedidos:</label>
            <input class="form-control" type="text" name="units_on_order" id="units-on-order" value="{{ $produto->units_on_order ?? '' }}">
        </div>
        <div class="form-group">
            <label for="reorder-level">Nível de reabastecimento:</label>
            <input class="form-control" type="text" name="reorder_level" id="reorder-level" value="{{ $produto->reorder_level ?? '' }}">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="discontinued" {{ $produto->discontinued ? 'checked' : '' }} >
            <label for="discontinued" class="form-check-label">Descontinuado?</label>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection