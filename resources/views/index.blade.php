<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @yield('styles') {{-- yield: fazer importação dos css --}}
    <link href="{{ asset('css/input.css') }}" rel="stylesheet">
    <link href="{{ asset('./output.css') }}" rel="stylesheet">

        
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
    <title>toDo - List</title>
</head>

<body>
  <div class="container">

   

 
 @include('componentes.pesquisarTarefa')

 @include('componentes.tarefasTabela')


  </div>
   
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
