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
    <title>Trabalho De Des.Web </title>
</head>
<body>
                
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading"><h2>Trabalho</h2></div>
            <div class="list-group list-group-flush">
            <a href="/clientes" class="list-group-item list-group-item-action bg-light">Clientes</a>
            <a href="/categorias" class="list-group-item list-group-item-action bg-light">Categorias</a>
                <a href="/ordem" class="list-group-item list-group-item-action bg-light">Ordem</a>
                <a href="/produto" class="list-group-item list-group-item-action bg-light">Produto</a>
                <a href="/ordemdetalhe" class="list-group-item list-group-item-action bg-light">Ordem Detalhe</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->
    
            
        <section class="container-fluid">
            <div class="row">
                @if (session('message'))
                    <div class="col-12 alert alert-info">
                        {{ session('message') }}
                    </div>
                @endif
            </div>

            @yield('conteudo')  
        </section>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>