@extends('layout.index')

@section('conteudo')
<form action="{{ route('cliente.atualizar', $cliente->customer_id) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="customer-id">ID da companhia:</label>
            <input class="form-control" type="text" name="customer_id" id="customer-id" value="{{ $cliente->customer_id ?? '' }}">
        </div>
        <div class="form-group">
            <label for="company-name">Nome da companhia:</label>
            <input class="form-control" type="text" name="company_name" id="company-name" value="{{ $cliente->company_name ?? '' }}">
        </div>
        <!-- DEMAIS CAMPOS -->
        <button type="submit" class="btn btn-primary">Incluir</button>
    </form>
@endsection