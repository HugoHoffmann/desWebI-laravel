@extends('layout.index')

@section('conteudo')
    <form action="{{ route('ordem.salvar') }}" method="post">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="product-name">Nome de destino:</label>
            <input class="form-control" type="text" name="ship_name" id="ship-name">
        </div>
        <div class="form-group">
            <label for="customer-id">Cliente:</label>
            <select class="form-control" name="customer_id" id="customer-id">
                @foreach ($clientes as $cliente) 
                 <option value="{{ $cliente->customer_id }}">{{ $cliente->company_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="order-date">Data Ordem:</label>
            <input class="form-control" type="text" name="order_date" id="order-date" value="{{ $ordem->order_date ?? '' }}">
        </div>
        <div class="form-group">
            <label for="required-date">Data Requisição:</label>
            <input class="form-control" type="text" name="required_date" id="required-date" value="{{ $ordem->required_date ?? '' }}">
        </div>
        <div class="form-group">
            <label for="shipped-date">Data Entrega:</label>
            <input class="form-control" type="text" name="shipped_date" id="shipped-date" value="{{ $ordem->shipped_date ?? '' }}">
        </div>
        <div class="form-group">
            <label for="ship-via">Enviado por:</label>
            <input class="form-control" type="text" name="ship_via" id="ship-via" value="{{ $ordem->ship_via ?? '' }}">
        </div>
        <div class="form-group">
            <label for="freight">Frete:</label>
            <input class="form-control" type="text" name="freight" id="freight" value="{{ $ordem->freight ?? '' }}">
        </div>
        <div class="form-group">
            <label for="ship-address">Endereço de destino:</label>
            <input class="form-control" type="text" name="ship_address" id="ship-address" value="{{ $ordem->ship_address ?? '' }}">
        </div>
        <div class="form-group">
            <label for="ship-city">Cidade de destino:</label>
            <input class="form-control" type="text" name="ship_city" id="ship-city" value="{{ $ordem->ship_city ?? '' }}">
        </div>
        <div class="form-group">
            <label for="ship-region">Região de destino:</label>
            <input class="form-control" type="text" name="ship_region" id="ship-region" value="{{ $ordem->ship_region ?? '' }}">
        </div>
        <div class="form-group">
            <label for="ship-postal-code">CEP de destino:</label>
            <input class="form-control" type="text" name="ship_postal_code" id="ship-postal-code" value="{{ $ordem->ship_postal_code ?? '' }}">
        </div>
        <div class="form-group">
            <label for="ship-country">Pais de destino:</label>
            <input class="form-control" type="text" name="ship_country" id="ship-country" value="{{ $ordem->ship_country ?? '' }}">
        </div>
        <button type="submit" class="btn btn-primary">Incluir</button>
    </form>
@endsection