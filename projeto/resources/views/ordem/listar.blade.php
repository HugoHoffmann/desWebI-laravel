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
            </tr>
            @foreach ($ordens as $ordem)
                <tr>
                    <td>{{ $ordem->order_id }}</td>
                    <td>{{ $ordem->ship_name }}</td>
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