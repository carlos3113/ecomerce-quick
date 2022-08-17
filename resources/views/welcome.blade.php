@extends('layouts.app')

@section('content')

{{-- <div
    id="carouselDarkVariant"
    class="carousel slide carousel-fade carousel-dark relative"
    data-bs-ride="carousel"
>
<!-- Indicators -->
<div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
  <button
    data-bs-target="#carouselDarkVariant"
    data-bs-slide-to="0"
    class="active"
    aria-current="true"
    aria-label="Slide 1"
  ></button>
  <button
    data-bs-target="#carouselDarkVariant"
    data-bs-slide-to="1"
    aria-label="Slide 1"
  ></button>
  <button
    data-bs-target="#carouselDarkVariant"
    data-bs-slide-to="2"
    aria-label="Slide 1"
  ></button>
</div>

<!-- Inner -->
<div class="carousel-inner relative w-full overflow-hidden">
  <!-- Single item -->
  <div class="carousel-item active relative float-left w-full">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(19).webp"
      class="block w-full"
      alt="Motorbike Smoke"
    />
    <div class="carousel-caption hidden md:block absolute text-center">
      <h5 class="text-xl">First slide label</h5>
      <p>Some representative placeholder content for the first slide.</p>
    </div>
  </div>

  <!-- Single item -->
  <div class="carousel-item relative float-left w-full">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(35).webp"
      class="block w-full"
      alt="Mountaintop"
    />
    <div class="carousel-caption hidden md:block absolute text-center">
      <h5 class="text-xl">Second slide label</h5>
      <p>Some representative placeholder content for the second slide.</p>
    </div>
  </div>

  <!-- Single item -->
  <div class="carousel-item relative float-left w-full">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(40).webp"
      class="block w-full"
      alt="Woman Reading a Book"
    />
    <div class="carousel-caption hidden md:block absolute text-center">
      <h5 class="text-xl">Third slide label</h5>
      <p>Some representative placeholder content for the third slide.</p>
    </div>
  </div>
</div>
<!-- Inner -->

<!-- Controls -->
<button
  class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
  type="button"
  data-bs-target="#carouselDarkVariant"
  data-bs-slide="prev"
>
  <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
  <span class="visually-hidden">Previous</span>
</button>
<button
  class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
  type="button"
  data-bs-target="#carouselDarkVariant"
  data-bs-slide="next"
>
  <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
  <span class="visually-hidden">Next</span>
</button>
</div> --}}

<style>
    body {
        background-color: #FAFAFA;
    }
</style>
  {{-- SLIDER --}}
  <div id="carouselExampleFade" class="carousel slide carousel-fade mb-5" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('img/welcome/slide-1.jpg') }}" class="d-block w-100" alt="slide-1">
        <div class="carousel-caption d-none d-md-block mb-5">
            <h2 class="shadow-text">CREA UN NEGOCIO ONLINE</h2>
            <p class="fs-4 shadow-text">
                Crea un negocio online, tanto si tienes una idea original como si estás buscando una nueva forma de ganar dinero.
            </p>
        </div>
        <div class="carousel-caption d-sm-block d-md-none">
            <h2 class="fs-5 shadow-text">CREA UN NEGOCIO ONLINE</h2>
            <p class="fs-6 shadow-text">
                Crea un negocio online, tanto si tienes una idea original como si estás buscando una nueva forma de ganar dinero.
            </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/welcome/slide-2.jpg') }}" class="d-block w-100" alt="slide-2">
        <div class="carousel-caption d-none d-md-block mb-5">
            <h2 class="shadow-text">TRASLADA TU NEGOCIO FÍSICO</h2>
            <p class="fs-4 shadow-text">
                Convierte tu tienda física en una tienda online y sigue atendiendo a los clientes sin interrupciones.
            </p>
        </div>
        <div class="carousel-caption d-sm-block d-md-none">
            <h2 class="fs-5 shadow-text">TRASLADA TU NEGOCIO FÍSICO</h2>
            <p class="fs-6 shadow-text">
                Convierte tu tienda física en una tienda online y sigue atendiendo a los clientes sin interrupciones.
            </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/welcome/slide-3.jpg') }}" class="d-block w-100" alt="slide-3">
        <div class="carousel-caption d-none d-md-block mb-5">
            <h2 class="shadow-text">VENDE EN TODAS PARTES</h2>
            <p class="fs-4 shadow-text">
                Usa la misma plataforma para vender productos a todo el mundo desde cualquier lugar, en persona con el punto de venta y online desde tu sitio web
            </p>
        </div>
        <div class="carousel-caption d-sm-block d-md-none">
            <h2 class="fs-5 shadow-text">VENDE EN TODAS PARTES</h2>
            <p class="fs-6 shadow-text">
                Usa la misma plataforma para vender productos a todo el mundo desde cualquier lugar, en persona con el punto de venta y online desde tu sitio web
            </p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  {{-- SOBRE NOSOTROS --}}
  <div class="container my-5 bg-hr" id="nosotros"></div>
  <div class="container">
      <div class="d-flex justify-content-between flex-wrap-reverse my-5 px-0">
          <div class="col-lg-5 mt-5">
            <h2 class="h2-title fs-1 mt-4 mt-md-0 mb-4">SOBRE NOSOTROS</h2>
            <p class="fs-5">
                En Abril de 2018 comenzamos nuestras operaciones, desde entonces somos más que sólo una simple tienda en línea, somos tu socio y asesor personalizado en compras por Internet. Nos enorgullece crear soluciones y experiencias que hagan la vida más fácil a nuestros clientes porque creemos que su comodidad es nuestro éxito.
            </p>
        </div>

        <div class="col-lg-6">
            <img src="{{ asset('img/welcome/nosotros.jpg') }}" class="w-100" alt="" >
        </div>
      </div>
  </div>


  {{-- CASOS DE ÉXITO --}}
  <div class="container my-5 bg-hr" id="testimonios"></div>
  <section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-3 h2-title fs-1">CASOS DE ÉXITO</h2>
            </div>
            {{-- <div class="col-6 text-right">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div> --}}
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="{{ asset('img/welcome/casos-exito.jpg') }}">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="{{ asset('img/welcome/casos-exito.jpg') }}">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="{{ asset('img/welcome/casos-exito.jpg') }}">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532715088550-62f09305f765?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ebadb044b374504ef8e81bdec4d0e840">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=0754ab085804ae8a3b562548e6b4aa2e">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ee8417f0ea2a50d53a12665820b54e23">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532777946373-b6783242f211?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=8ac55cf3a68785643998730839663129">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532763303805-529d595877c5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=5ee4fd5d19b40f93eadb21871757eda6">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>


  {{-- CONTÁCTANOS --}}
  <div class="container my-5 bg-hr" id="contactanos"></div>
  <div class="container py-5 px-5 fondo-contactanos">
    {{-- @if(Session::has('success'))
        <div class="col-lg-12 form-group">
            <div class="alert alert-success alert-dismissible fade show mb-4 mt-4" role="alert">
            {{ Session::get('success') }}
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden=true>&times;</span>
            </button>
            </div>
        </div>
    @endif --}}
    <h2 class="mb-3 h2-title fs-1">CONTÁCTANOS</h2>
    <div class="d-flex flex-wrap rounded-2 shadow-lg bg-white">
      <div class="col-lg-6 px-5 py-4">
        <form class="" action="{{ route('/') }}" method="POST">
            @csrf
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
          </div>
          <div class="mb-3">
            <label for="correo" class="form-label">Correo Electrónico</label>
            <input type="email" name="correo" class="form-control" id="correo" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="mensaje" class="form-label">Mensaje</label>
            <textarea class="form-control" name="mensaje" id="mensaje" cols="30" rows="3"></textarea>
          </div>
          <button type="submit" class="border-0 rounded-3 py-2 btn-contact w-100 text-white" type="button">Enviar</button>
        </form>
      </div>

      <div class="col-lg-6">
        <img class="w-100 h-100 rounded-end" src="{{ asset('img/welcome/contacto.jpg') }}" alt="">
      </div>
    </div>
  </div>

  @if (session('info'))
      <script>
        alert("{{session('info')}}");
      </script>
  @endif

  <footer class="footer mt-5 py-3">
    <div class="container d-flex flex-wrap justify-content-around">
      <div class="col-lg-6 icons">
        <a class="text-white" href="https://www.facebook.com/quickexperience/" target="_blank">
            <i class="fa-brands fa-square-facebook"></i>
        </a>
        <a class="text-white" href="https://www.instagram.com/quickexperience/?hl=es" target="_blank">
            <i class="fa-brands fa-instagram"></i>
        </a>
        <a class="text-white" href="https://www.youtube.com/channel/UCceYVENhYttdEmXxkkH4dPA" target="_blank">
            <i class="fa-brands fa-youtube"></i>
        </a>
        {{-- <a>
            <i class="fa-brands fa-twitter"></i>
        </a>
        <a>
            <i class="fa-brands fa-linkedin"></i>
        </a> --}}
        <a class="text-white" href="https://wa.me/59174573000" target="_blank">
            <i class="fa-brands fa-whatsapp"></i>
        </a>
        <a class="text-white" href="https://www.tiktok.com/@quickexperience?lang=en" target="_blank">
            <i class="fa-brands fa-tiktok"></i>
        </a>
        <a class="text-white" href="https://open.spotify.com/user/12128033390" target="_blank">
            <i class="fa-brands fa-spotify"></i>
        </a>
      </div>
      <div class="col-lg-6 text-end">
          <span>&copy; <?php $now = new DateTime(); echo $now->format('Y'); ?> Qucik Ecommerce. Todos los derechos reservados</span>
      </div>
    </div>
  </footer>

@endsection
