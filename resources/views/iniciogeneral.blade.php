<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio General</title>
	<!--CDN DE BOOTSTRAP 4-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style type="text/css">
        body {
             background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(231,208,165,1) 0%, rgba(212,175,73,1) 100%); 
        }
    </style>
 
</head>
<body class="antialiased">
	<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
		<!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Laravel8App</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

              {{-- <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li> --}}

              <li class="nav-item">
                {{-- <a class="nav-link" href="#">Link</a> --}}
                <a href="{{ route('login') }}" class="text-sm text-gray-700 nav-link">Login</a>
              </li>
              
              <li class="nav-item">
                {{-- <a class="nav-link" href="#">Link</a> --}}
                <a href="{{ route('register-user') }}" class="ml-4 text-sm text-gray-700 nav-link">Register</a>
              </li>
            </ul>
           
          </div>
        </nav>


		{{-- @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endif
            </div>
        @endif --}}
        <!-- Fin Navbar -->


        <div class="contenido centrado">
            <h2>Contenido público</h2>
            <div class="imagen">
                <!--la carpeta images debe estar en el directorio public de laravel-->
                <img src="{{ asset('images/trabajo.webp') }}">
            </div>
        </div>

	</div>
	
</body>
</html>
<!--JQUERY CDN Y BOOTSTRAP 4 JS-->
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>