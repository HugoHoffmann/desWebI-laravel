@extends('layout.index')

@section('conteudo')
<div class="row">
    <div class="col-12 mb-3 mt-3">
        <a href="{{ route('ordem.incluir') }}" class="btn btn-primary">Incluir Ordem</a>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <table class="table table-hover ">
            <tr>
                <th>ID Ordem</th>
                <th>Nome de destino</th>
                <th>Data Ordem</th>
                <th>Data Requisição</th>
                <th>Data entrega</th>
                <th>Enviado por</th>
                <th>Frete</th>
                <th>Endereço de destino</th>
                <th>Cidade de destino</th>
                <th>Região de destino</th>
                <th>CEP de destino</th>
                <th>Pais de destino</th>
                <th>Ações</th>
            </tr>
            @foreach ($ordens as $ordem)
                <tr>
                    <td>{{ $ordem->order_id }}</td>
                    <td>{{ $ordem->ship_name }}</td>
                    <td>{{ $ordem->order_date }}</td>
                    <td>{{ $ordem->required_date }}</td>
                    <td>{{ $ordem->shipped_date }}</td>
                    <td>{{ $ordem->ship_via }}</td>
                    <td>{{ $ordem->freight }}</td>
                    <td>{{ $ordem->ship_address }}</td>
                    <td>{{ $ordem->ship_city }}</td>
                    <td>{{ $ordem->ship_region }}</td>
                    <td>{{ $ordem->ship_postal_code }}</td>
                    <td>{{ $ordem->ship_country }}</td>
                    <td>
                        <a class="btn btn-primary mb-2" href="{{ route('ordem.alterar', $ordem->order_id) }}">Alterar</a>
                        <form action="{{ route('ordem.excluir', $ordem->order_id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection