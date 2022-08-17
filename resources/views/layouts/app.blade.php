<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Quick</title>
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/registro.css') }}">

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/71c9559db8.js" crossorigin="anonymous"></script>

    {{-- Bootstrap --}}
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </head>
  <body class="bg-gray-100 text-gray-800">

    {{-- Bootstrap --}}
    <nav class="navbar navbar-expand-lg py-3 fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand text-white fw-bold" href="{{ route('/') }}"><img class="logo" src="{{ asset('img/logo.png') }}" alt="logo"></a>
          <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            {{-- <span class="navbar-toggler-icon"></span> --}}
            <i class="fa-solid fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">

                @if (Request::is('/'))
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll w-100 d-block d-md-flex justify-content-center" style="--bs-scroll-height: 100px;">

                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="{{ route('/') }}">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#nosotros">SOBRE NOSOTROS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#testimonios">TESTIMONIOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#contactanos">CONTÁCTANOS</a>
                        </li>

                    </ul>
                    <div class="d-flex">
                        @if(auth()->check())
                            <p class="fs-6">Bienvenido <b>{{ auth()->user()->name }}</b></p>
                            <a href="{{ route('login.destroy') }}" class="btn btn-danger fw-bold">
                                Cerrar Sesion
                            </a>
                        @else
                            <a href="{{ url('login') }}" class="btn btn-outline-light mx-2 fw-bold">Ingresar</a>
                            <a href="{{ url('register') }}" class="btn btn-outline-light mx-2 fw-bold">Registrarse</a>
                        @endif
                    </div>

                @else
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll w-100 d-block d-md-flex justify-content-center" style="--bs-scroll-height: 100px;">
                        <div class="d-flex justify-content-end w-100">
                            @if(auth()->check())
                                <p class="fs-6 text-center my-auto text-white mx-3 align-middle"><b>{{ auth()->user()->name }}</b></p>
                                <a href="{{ route('login.destroy') }}" class="btn btn-danger fw-bold">
                                    Cerrar Sesion
                                </a>
                            @else
                                <a href="{{ url('login') }}" class="btn btn-outline-light mx-2 fw-bold">Ingresar</a>
                                <a href="{{ url('register') }}" class="btn btn-outline-light mx-2 fw-bold">Registrarse</a>
                            @endif
                        </div>
                    </ul>
                @endif
          </div>
        </div>
      </nav>


    @yield('content')

  </body>
</html>
