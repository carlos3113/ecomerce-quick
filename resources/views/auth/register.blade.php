@extends('layouts.app')

@section('content')
 {{-- Bootstrap --}}
<div class="container contenedor-login rounded-3 bg-white
rounded-lg shadow-form mx-auto col-lg-4 pt-4 pb-5 px-4">

  <h1 class="text-center fw-bold fs-2 pb-2">Registro</h1>

  <form class="mt-4" method="POST" action="">
    @csrf

    <div class="form-group mb-4">
        <input type="text" class="form-control inputs" placeholder="Nombre"
        id="name" name="name">
    </div>

    @error('name')
      <p class="border border-red-500 rounded-md bg-red-100 w-full
      text-red-600 p-2 my-2">* {{ $message }}</p>
    @enderror

    <div class="form-group mb-4">
        <input type="email" class="form-control inputs" placeholder="Email"
        id="email" name="email">
    </div>

    @error('email')
      <p class="border border-red-500 rounded-md bg-red-100 w-full
      text-red-600 p-2 my-2">* {{ $message }}</p>
    @enderror

    <div class="form-group mb-4">
        <input type="password" class="form-control inputs" placeholder="Contraseña"
        id="password" name="password">
    </div>

    @error('password')
      <p class="border border-red-500 rounded-md bg-red-100 w-full
      text-red-600 p-2 my-2">* {{ $message }}</p>
    @enderror

    <div class="form-group mb-4">
        <input type="password" class="form-control inputs"
        placeholder="Confirme la contraseña" id="password_confirmation"
        name="password_confirmation">
    </div>

    <button type="submit" class="btn-login w-100 text-white fw-bolder rounded-3 py-2">
        Registrarse
    </button>


  </form>


</div>

@endsection
