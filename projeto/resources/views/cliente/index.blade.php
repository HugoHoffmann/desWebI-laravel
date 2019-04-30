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
                <td>{{ $cliente->customer_id }}</td>
                <td>{{ $cliente->company_name }}</td>
                <td>{{ $cliente->contact_name }}</td>
                <td>{{ $cliente->contact_title }}</td>
                <td>{{ $cliente->address }}</td>
                <td>{{ $cliente->city }}</td>
                <td>{{ $cliente->region }}</td>
                <td>{{ $cliente->postal_code }}</td>
                <td>{{ $cliente->country }}</td>
                <td>{{ $cliente->phone }}</td>
                <td>{{ $cliente->fax }}</td>
            <td>
                <a href="{{ route('cliente.altera', $cliente->customer_id ) }}">Altera</a>
                <form action="{{route('cliente.exclui', $cliente->customer_id )}}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" type="submit">Exluir</button>
                </form>
            </td>
                
        
            </tr>
        @endforeach
    </table>

    
@endsection