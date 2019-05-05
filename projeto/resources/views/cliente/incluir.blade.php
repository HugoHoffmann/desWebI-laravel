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
        <div class="form-group">
            <label for="contact-name">Nome de contato:</label>
            <input class="form-control" type="text" name="contact_name" id="contact-name">
        </div>
        <div class="form-group">
            <label for="contact-title">Título de contato:</label>
            <input class="form-control" type="text" name="contact_title" id="contact-title">
        </div>
        <div class="form-group">
            <label for="address">Endereço:</label>
            <input class="form-control" type="text" name="address" id="address">
        </div>
        <div class="form-group">
            <label for="city">Cidade:</label>
            <input class="form-control" type="text" name="city" id="city">
        </div>
        <div class="form-group">
            <label for="region">Região:</label>
            <input class="form-control" type="text" name="region" id="region">
        </div>
        <div class="form-group">
            <label for="postal-code">Código postal:</label>
            <input class="form-control" type="text" name="postal_code" id="postal-code">
        </div>
        <div class="form-group">
            <label for="country">País:</label>
            <input class="form-control" type="text" name="country" id="country">
        </div>
        <div class="form-group">
            <label for="phone">Telefone:</label>
            <input class="form-control" type="text" name="phone" id="phone">
        </div>
        <div class="form-group">
            <label for="fax">Fax:</label>
            <input class="form-control" type="text" name="fax" id="fax">
        </div>
        <button type="submit" class="btn btn-primary">Incluir</button>
    </form>
@endsection