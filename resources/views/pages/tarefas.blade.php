<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @yield('styles') {{-- yield: fazer importação dos css --}}
    <link href="{{ asset('css/input.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

        <!-- Compiled and minified icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Lista De Tarefas</title>
</head>

<body style="background-color: #333333">
    <div class="container">

      <div class="top-bar" align="center">
       <h3 style="color: #5E60CE;"><b>Lista De Tarefas</b></h3>
      </div>

      @include('componentes.pesquisarTarefa')
     
        <div>
            <p class="flow-text sub-title" style="font-size: 14px;"><strong>Tarefas Criadas: </strong>
                   {{ $totalTarefa }}</p>
        </div>

        @include('componentes.tarefasTabela')


    </div>

    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>
