@extends('layout.index')

@section('conteudo')
<div class="row">
    <div class="col-12 mb-3 mt-3">
        <a href="{{ route('produto.incluir') }}" class="btn btn-primary">Incluir Produto</a>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <table class="table table-hover ">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Qtd por Unidade</th>
                <th>Preço</th>
                <th>Estoque</th>
                <th>Unidades em pedido</th>
                <th>Nível reabastecimento</th>
                <th>Descontinuado?</th>
                <th>Ações</th>
            </tr>
            @foreach ($produtos as $produto)
                <tr>
                    <td>{{ $produto->product_id }}</td>
                    <td>{{ $produto->product_name }}</td>
                    <td>{{ $produto->categoria->category_name }}</td>
                    <td>{{ $produto->quantity_per_unit }}</td>
                    <td>{{ $produto->unit_price }}</td>
                    <td>{{ $produto->units_in_stock }}</td>
                    <td>{{ $produto->units_on_order }}</td>
                    <td>{{ $produto->reorder_level }}</td>
                    <td>{{ $produto->discontinued ? 'Sim' : 'Não'}}</td>
                    <td>
                        <a class="btn btn-primary mb-2" href="{{ route('produto.alterar', $produto->product_id) }}">Alterar</a>
                        <form action="{{ route('produto.excluir', $produto->product_id) }}" method="post">
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