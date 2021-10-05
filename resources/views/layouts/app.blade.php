<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Name - @yield('title')</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha512-tDXPcamuZsWWd6OsKFyH6nAqh/MjZ/5Yk88T5o+aMfygqNFPan1pLyPFAndRzmOWHKT+jSDzWpJv8krj6x1LMA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

    <style>
        body {
            background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(231,208,165,1) 0%, rgba(212,175,73,1) 100%); 
        }

        .ajustar-boton-crear {
            margin-bottom: 20px;
            display: flex;
            justify-content: end;
        }

        .ajustar-paginacion {
            display: flex;
            justify-content: end;
        }

        .ajustar-boton_retroceder{
           display: flex;
           justify-content: end; 
        }

        .mensaje {
            /*color: red;*/
            text-align: center;
        }

        .tam-letra-show {
            font-size: 25px;
            color: blue;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #9C27B0;
            color: white;
            text-align: center;
        }

        .separador {
            height: 100px;
        }
    </style>
</head>

<body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Laravel 8 CRUD</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

          <li class="nav-item active">
            <a class="nav-link" href="#">Listar <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Almacén</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Facturación</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Logística</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('signout') }}">logout</a>
          </li>

        </ul>
      </div>
    </nav>
    <!--FIN NAVBAR-->


    @section('sidebar')

    @show

    <div class="separador"></div>

    <div class="container">
        @yield('content')
    </div>
</body>

</html>
