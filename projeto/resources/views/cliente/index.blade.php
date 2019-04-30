@extends('layout.index')

@section('conteudo')

    <table class="table table-hover ">
        <tr>
            <th>ID Clientes</th>
            <th>Nome Companhia</th>
            <th>Nome Contato</th>
            <th>Titulo Contato</th>
            <th>Endereco</th>
            <th>Cidade</th>
            <th>Região</th>
            <th>CEP</th>
            <th>Pais</th>
            <th>Telefone</th>
            <th>Fax</th>
            <th>Ações</th>
        </tr>
        @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $cliente->IDCliente }}</td>
                <td>{{ $cliente->NomeCompanhia }}</td>
                <td>{{ $cliente->NomeContato }}</td>
                <td>{{ $cliente->TituloContato }}</td>
                <td>{{ $cliente->Endereco }}</td>
                <td>{{ $cliente->Cidade }}</td>
                <td>{{ $cliente->Regiao }}</td>
                <td>{{ $cliente->CEP }}</td>
                <td>{{ $cliente->Pais }}</td>
                <td>{{ $cliente->Telefone }}</td>
                <td>{{ $cliente->Fax }}</td>
            <td>
                <a href="{{ route('cliente.altera', $cliente->IDCliente) }}">Altera</a>
                <form action="{{route('cliente.exclui', $cliente->IDCliente)}}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" type="submit">Exluir</button>
                </form>
            </td>
                
        
            </tr>
        @endforeach
    </table>

    
@endsection