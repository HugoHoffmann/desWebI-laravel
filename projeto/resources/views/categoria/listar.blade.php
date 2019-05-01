@extends('layout.index')

@section('conteudo')

    <div class="row">
        <div class="col-12 mb-3 mt-3">
            <a href="{{ route('categoria.incluir') }}" class="btn btn-primary">Incluir Categoria</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-hover ">
                <tr>
                    <th>Nome Categoria</th>
                    <th>Descricao</th>
                    <th>Figura</th>
                    
                </tr>
                @foreach ($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->category_name }}</td>
                        <td>{{ $categoria->description }}</td>
                        <td>imagem</td>
                        
                        <td>
                            <a class="btn btn-primary mb-2" href="{{ route('categoria.alterar', $categoria->category_id) }}">Alterar</a>
                            <form action="{{ route('categoria.excluir', $categoria->category_id) }}" method="post">
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