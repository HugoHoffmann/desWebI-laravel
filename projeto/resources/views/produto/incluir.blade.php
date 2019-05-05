@extends('layout.index')

@section('conteudo')
    <form action="{{ route('produto.salvar') }}" method="post">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="product-name">Nome do produto:</label>
            <input class="form-control" type="text" name="product_name" id="product-name">
        </div>
        <div class="form-group">
            <label for="category-id">Categoria:</label>
            <select class="form-control" name="category_id" id="category-id">
                @foreach ($categorias as $categoria) 
                    <option value="{{ $categoria->category_id }}">{{ $categoria->category_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="quantity-per-unit">Quantidade por unidade:</label>
            <input class="form-control" type="text" name="quantity_per_unit" id="quantity-per-unit">
        </div>
        <div class="form-group">
            <label for="unit-price">Preço unitário:</label>
            <input class="form-control" type="text" name="unit_price" id="unit-price">
        </div>
        <div class="form-group">
            <label for="units-in-stock">Unidades em estoque:</label>
            <input class="form-control" type="text" name="units_in_stock" id="units-in-stock">
        </div>
        <div class="form-group">
            <label for="units-on-order">Unidades em pedidos:</label>
            <input class="form-control" type="text" name="units_on_order" id="units-on-order">
        </div>
        <div class="form-group">
            <label for="reorder-level">Nível de reabastecimento:</label>
            <input class="form-control" type="text" name="reorder_level" id="reorder-level">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="discontinued">
            <label for="discontinued" class="form-check-label">Descontinuado?</label>
        </div>
        <button type="submit" class="btn btn-primary">Incluir</button>
    </form>
@endsection