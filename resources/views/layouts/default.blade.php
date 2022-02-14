<!DOCTYPE html>
<html lang ="pt-br">

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <meta charset="utf-8">
    </head>

    <body>

        @yield('conteudo')
        <div align="right">
        <a href="{{ route("login.logout") }}" class="btn btn-secondary" role="button">Sair</a>
        </div>
    </body>

</html>