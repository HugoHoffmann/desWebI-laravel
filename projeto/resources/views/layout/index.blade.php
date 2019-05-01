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
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="col-md-1">

            <header>
                <section>
                    <ul>
                        <li>Clientes</li>
                        <li>Ordem</li>
                        <li>Produto</li>
                        <li>Categorias</li>
                        <li>Ordem Detalhe</li>
                    </ul>
                </section>
            </header>
        </div>
    </div>
    

    <section class="container">
        <div class="row">
            @yield('conteudo')  
        </div>
    </section>
    
    
    
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>