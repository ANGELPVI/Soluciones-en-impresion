<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Soluciones En Impresión</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Calistoga&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" href="{{asset('css/index.css')}}">

  <script src="https://kit.fontawesome.com/315f51bd5c.js" crossorigin="anonymous"></script>
  <!-- Styles -->
  <style>
    /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
  </style>
</head>

<body>
  {{-- NavBar de la pagina --}}
  <nav class="nav-bar">

    <div class="nav-imagen">
      <img class="img-logo" src="{{asset('img/logo-bien.png')}}">
      <span class="letras-logo letras"> Soluciones En Impresión</span>
    </div>

    <button class="boto-responsi lg:hidden nav-toggler" data-targets="#navegation" id="navegation"><i class="fas fa-align-justify"></i></button>

    <div id="menu" class="hidden top-nav w-full lg:inline-flex lg:flex-grow lg:w-auto">

      <div class="lg:inline-flex lg:flex-row lg:ml-auto flex flex-col">
        <a href="{{route('inicio')}}" class="nav-items"><i class="fas fa-home text-xl mr-2"></i>Inicio</a>
        <a href="{{route('impresoras')}}" class="nav-items"><i class="fas fa-print text-xl mr-2"></i>Impresoras</a>
        <a href="{{route('consumibles')}}" class="nav-items"><i class="fas fa-store text-xl mr-2"></i>Consumibles</a>
        <a href="{{route('soporte')}}" class="nav-items"><i class="fas fa-wrench text-xl mr-2"></i>Soporte</a>

        @if (auth()->check())
            <p class=" text-5xl text-white">Welcome <b>{{ auth()->user()->nombre }}</b></p>
            <a href="{{route('destroy')}}">Salir</a>
            
        @else
        <a href="{{route('login')}}" class="nav-items"><i class="fas fa-user text-xl mr-2"></i>Login</a>
        {{-- <a href="{{route('registro')}}" class="nav-items"><i class="fas fa-wrench text-xl mr-2"></i>Registro</a> --}}
        @endif
        

      </div>

    </div>
  </nav>
      
  
    @yield('sesion')
  


  {{-- footer de la pagina --}}
  <footer class="w-full h-auto bg-gray-800 mt-20">
    <div class="grid grid-cols-12 w-full">
      {{-- Logotipo y leyenda --}}
      <div class="grid lg:col-span-5 w-full xs:col-span-12 sm:col-span-12">
        <div class="grid grid-cols-4 w-full content-evenly xs:justify-items-center xs:content-center sm:justify-items-center sm:content-center">
          <img class="lg:col-span-1 xs:col-span-4 sm:col-span-4 lg:w-full xs:w-1/2 h-28 xs:h-20 p-2" src="{{asset('img/logo-bien.png')}}" alt="">
          <span class="lg:col-span-2 xs:col-span-4 sm:col-span-4 sm:text-center xs:text-center w-full h-auto pt-10 xs:-mt-10 text-2xl text-white font-titulo xs:text-2xl">Soluciones en impresión</span>
          <p class="lg:col-span-2 xs:col-span-4 sm:col-span-4 sm:text-center xs:p-2 p-5 font-descrip text-white text-sm xs:text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. In, necessitatibus!
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, ab.
          </p>
        </div>
      </div>
      {{-- Contactos y redes sociales --}}
      <div class="grid lg:col-span-4 xs:col-span-12 sm:col-span-12 w-full h-auto xs:-mt-5 xs:text-center sm:text-center lg:text-justify">
        <div class="flex flex-col h-auto text-white w-full">
          <h1 class="w-full pt-11 font-titulo text-1xl">Contactos</h1>
          <p class="h-auto w-full pt-1 font-descrip text-lg xs:text-sm"><i class="fa-brands fa-whatsapp text-lg"></i> 755-117-75-73</p>
          <p class="h-auto w-full pt-1 font-descrip text-lg xs:text-sm"><i class="fa-regular fa-envelope text-lg"></i> solucionesenimpresion@gmail.com</p>
        </div>
      </div>
        {{-- Redes sociales --}}
      <div class="grid lg:col-span-3 xs:col-span-12 sm:col-span-12 w-full h-auto text-white xs:-mt-7 xs:text-center sm:text-center lg:text-justify">
        <div class="flex flex-col h-auto w-full">
          <h1 class="w-full pt-11 font-titulo text-1xl">Redes sociales</h1>
          <p class="h-auto w-full pt-1 font-descrip text-lg"><i class="fa-brands fa-facebook lg"></i> Soluciones en impresión</p>
        </div>
      </div>
      
    </div>

    {{-- copyright --}}
    <div class="bg-gray-900 w-full h-28 mt-20 flex items-center justify-center">
      <div class="w-1/2 xs:w-full h-auto text-center">
        <i class="far fa-copyright text-white"><span class="pl-3 text-sm text-white">2021 Solucines en impresión. Todos los derechos reservados</span></i>
      </div>
    </div>
  </footer>

  <script src="{{asset('js/index.js')}}"></script>
</body>

</html>