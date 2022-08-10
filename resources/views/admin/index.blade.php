<h1>esto lo ven solo los admins</h1>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Quick</title>

    <!-- Tailwind CSS Link -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
  </head>
  <body class="bg-gray-100 text-gray-800">

    <nav class="flex py-5 bg-gray-500 text-white">
      <div class="w-1/2 px-12 mr-auto">
        <p class="text-2xl font-bold">Quick E-Commerce</p>
      </div>

      <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
        <li>
          <a href="{{ route('register.index') }}" class="font-semibold
          border-2 border-white py-2 px-4 rounded-md hover:bg-white
          hover:text-indigo-700">Registrarse</a>
        </li>
        <li>
            <a href="{{ route('login.destroy') }}" class="font-bold
            py-3 px-4 rounded-md bg-red-500 hover:bg-red-600">Cerrar Sesion</a>
          </li>
      </ul>

    </nav>



    @yield('content')


  </body>
</html>
