<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
     <link rel="stylesheet" href="{{ asset('css/app.css') }}">
     <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <title>Des.Web </title>
</head>
<body>
    
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right pl-2 pt-2" id="sidebar-wrapper">
            <div class="sidebar-heading">
                <h2>Trabalho</h2>
            </div>
            <div class="list-group list-group-flush">
                <a href="{{ route('cliente.listar') }}" class="list-group-item list-group-item-action bg-light">Clientes</a>
                <a href="{{ route('categoria.listar') }}" class="list-group-item list-group-item-action bg-light">Categorias</a>
                <a href="{{ route('ordem.listar') }}" class="list-group-item list-group-item-action bg-light">Ordem</a>
                <a href="{{ route('produto.listar') }}" class="list-group-item list-group-item-action bg-light">Produto</a>
                <a href="{{ route('ordem-detalhe.listar') }}" class="list-group-item list-group-item-action bg-light">Ordem Detalhe</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->
            
        <section class="container-fluid pt-2">
            <div class="row">
                @if (session('message'))
                    <div class="col-12 alert alert-info">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @yield('conteudo')  
        </section>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>