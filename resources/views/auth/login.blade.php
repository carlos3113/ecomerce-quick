@extends('layouts.app')

@section('content')
 {{-- Bootstrap --}}
<div class="container contenedor-login rounded-3 bg-white
rounded-lg shadow-form mx-auto col-lg-4 pb-5 pt-4 px-4">

<h1 class="text-center fw-bold fs-2 pb-2">Iniciar Sesión</h1>

<form class="mt-4" method="POST" action="{{-- {{ route('login') }} --}}">
@csrf

<div class="form-group mb-4">
    <input type="email" class="form-control inputs" placeholder="Correo Electrónico"
    id="email" name="email">
</div>

<div class="form-group mb-4">
    <input type="password" class="form-control inputs" placeholder="Contraseña"
    id="password" name="password">
</div>

@error('message')
  <p class="border border-red-500 rounded-md bg-red-100 w-full
  text-red-600 p-2 my-2">* {{ $message }}</p>
@enderror

<div class="form-group">
    <button type="submit"
            class="btn-login w-100 text-white fw-bolder rounded-3 py-2"
    >
        Ingresar
    </button>
</div>


</form>


</div>

@endsection
