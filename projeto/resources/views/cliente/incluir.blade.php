@extends('layout.index')

@section('conteudo')
    <form action="{{ route('cliente.salvar') }}" method="post">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="customer-id">ID da companhia:</label>
            <input class="form-control" type="text" name="customer_id" id="customer-id">
        </div>
        <div class="form-group">
            <label for="company-name">Nome da companhia:</label>
            <input class="form-control" type="text" name="company_name" id="company-name">
        </div>
        <!-- DEMAIS CAMPOS -->
        <button type="submit" class="btn btn-primary">Incluir</button>
    </form>
@endsection