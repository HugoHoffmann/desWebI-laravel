@extends('layout.index')

@section('conteudo')
<form action="{{ route('cliente.atualizar', $cliente->customer_id) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="customer-id">ID da companhia:</label>
            <input class="form-control" type="text" name="customer_id" id="customer-id" disabled="disabled" value="{{ $cliente->customer_id ?? '' }}">
        </div>
        <div class="form-group">
            <label for="company-name">Nome da companhia:</label>
            <input class="form-control" type="text" name="company_name" id="company-name" value="{{ $cliente->company_name ?? '' }}">
        </div>
        <div class="form-group">
            <label for="contact-name">Nome de contato:</label>
            <input class="form-control" type="text" name="contact_name" id="contact-name" value="{{ $cliente->contact_name ?? '' }}">
        </div>
        <div class="form-group">
            <label for="contact-title">Título de contato:</label>
            <input class="form-control" type="text" name="contact_title" id="contact-title" value="{{ $cliente->contact_title ?? '' }}">
        </div>
        <div class="form-group">
            <label for="address">Endereço:</label>
            <input class="form-control" type="text" name="address" id="address" value="{{ $cliente->address ?? '' }}">
        </div>
        <div class="form-group">
            <label for="city">Cidade:</label>
            <input class="form-control" type="text" name="city" id="city" value="{{ $cliente->city ?? '' }}">
        </div>
        <div class="form-group">
            <label for="region">Região:</label>
            <input class="form-control" type="text" name="region" id="region" value="{{ $cliente->region ?? '' }}">
        </div>
        <div class="form-group">
            <label for="postal-code">Código postal:</label>
            <input class="form-control" type="text" name="postal_code" id="postal-code" value="{{ $cliente->postal_code ?? '' }}">
        </div>
        <div class="form-group">
            <label for="country">País:</label>
            <input class="form-control" type="text" name="country" id="country" value="{{ $cliente->country ?? '' }}">
        </div>
        <div class="form-group">
            <label for="phone">Telefone:</label>
            <input class="form-control" type="text" name="phone" id="phone" value="{{ $cliente->phone ?? '' }}">
        </div>
        <div class="form-group">
            <label for="fax">Fax:</label>
            <input class="form-control" type="text" name="fax" id="fax" value="{{ $cliente->fax ?? '' }}">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection