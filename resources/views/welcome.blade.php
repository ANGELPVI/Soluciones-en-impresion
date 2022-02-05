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
  <nav class="flex items-center bg-gray-900 p-3 flex-wrap">

    <div class="p-2 mr-4 inline-flex items-center">
      <img class="w-24 h-24" src="{{asset('img/logo-bien.png')}}">
      <span class="text-white text-4xl pl-3 font-titulo letras"> Soluciones En Impresión</span>
    </div>

    <button class="text-white inline-flex p-3 hover:bg-gray-900 rounded lg:hidden ml-auto nav-toggler" data-targets="#navegation" id="navegation"><i class="fas fa-align-justify"></i></button>

    <div id="menu" class="hidden top-nav w-full lg:inline-flex lg:flex-grow lg:w-auto">

      <div class="lg:inline-flex lg:flex-row lg:ml-auto flex flex-col">
        <a href="#" class="transition duration-500 ease-in-out border-blue-400 hover:border-b-2 hover:text-white transform hover:-translate-y-1 hover:scale-110 font-titulo lg:inline-flex lg:w-auto uppercase m-3 px-2 py-2 text-gray-400"><i class="fas fa-home text-xl mr-2"></i>Inicio</a>
        <a href="#" class="transition duration-500 ease-in-out border-blue-400 hover:border-b-2 hover:text-white transform hover:-translate-y-1 hover:scale-110 font-titulo lg:inline-flex lg:w-auto uppercase m-3 px-2 py-2 text-gray-400"><i class="fas fa-print text-xl mr-2"></i>Impresoras</a>
        <a href="#" class="transition duration-500 ease-in-out font-titulo transform hover:-translate-y-1 hover:scale-110 lg:inline-flex lg:w-auto uppercase hover:text-white hover:border-b-2 border-blue-400 m-3 px-2 py-2 text-gray-400"><i class="fas fa-store text-xl mr-2"></i>Consumibles</a>
        <a href="#" class="transition duration-500 ease-in-out font-titulo transform hover:-translate-y-1 hover:scale-110 lg:inline-flex lg:w-auto uppercase hover:text-white hover:border-b-2 border-blue-400 m-3 px-2 py-2 text-gray-400"><i class="fas fa-wrench text-xl mr-2"></i>Soporte Técnico</a>
      </div>

    </div>
  </nav>
      {{-- Header --}}
  <div class="grid grid-cols-3 fondo-header justify-items-center content-center">
            <h1 class="col-span-12 text-white text-6xl relative -mt-28 font-titulo titulo-header">Calidad y experiencia en fotocopiadoras</h1>
            <p class="col-span-12 font-semibold text-white relative w-1/2 text-justify font-descrip">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum laborum quaerat odio ipsum rerum, unde dolorem incidunt.
              Cupiditate ipsa rerum, animi labore repudiandae quae quod, sapiente possimus accusantium id totam. Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            
              <button class="botones w-1/4 font-semibold col-span-12 text-black text-2xl hover:bg-green-400 rounded-full py-3 px-6 bg-green-500 mb-3 mt-20 font-descrip relative">Cotizar Ahora</button>
  </div>

  {{-- Seccion de las empresas --}}

  <div class="w-full h-auto border-gray-100">
    <h1 class="font-titulo mt-20 text-5xl text-center text-titulos">Empresas y gobiernos que confian en nosotros</h1>
    {{-- Contenedor padre --}}
    <div class="w-full h-auto grid grid-cols-6 justify-items-center content-center mt-20">
      {{-- Targeta de precentacion, primera empresa --}}
      <div class="w-48 h-auto m-4 text-center">
        <div><img src="{{asset('img/oma.png')}}" class="opacity-30 h-32"></div>
      </div>

      {{-- Targeta de precentacion, segunda empresa --}}
      <div class=" w-52 h-auto m-4 text-center">
        <div><img src="{{asset('img/tres-guerras.png')}}" class="opacity-30 h-36"></div>
      </div>

      {{-- Targeta de precentacion, tercera empresa --}}
      <div class="w-48 h-auto m-4 text-center">
        <div class=""><img src="{{asset('img/h-ayunta-zihu 1.png')}}" class="opacity-30 h-32"></div>
      </div>

      {{-- Targeta de precentacion, cuarta empresa --}}
      <div class="w-48 h-auto m-4">
        <div class=""><img src="{{asset('img/hospital.png')}}" class="opacity-30 h-32"></div>
      </div>

      {{-- Targeta de{{-- Targeta de precentacion, quinta empresa --}}
      <div class="w-48 h-auto m-4 text-center">
        <div class=""><img src="{{asset('img/cediz.png')}}" class="opacity-30 h-32"></div>
      </div>

      {{-- Targeta de{{-- Targeta de precentacion, sexta empresa --}}
      <div class="w-52 h-auto m-4 text-center">
        <div class=""><img src="{{asset('img/peta-nuevo.png')}}" class="opacity-30 h-32"></div>
      </div>
      

    </div>
  </div>

  {{-- Sesion de Servicios que ofrece la empresa --}}

  <div class="flex flex-col w-full h-auto mt-20">

    {{-- Primer servicio tecnico --}}
    <div class="flex w-full h-auto bg-gray-900">
      <div class="grid grid-cols-2 w-2/4 h-auto text-white text-center gap-4 place-items-center">
        <h1 class="text-3xl m-1 col-span-2 font-titulo">Mantenimiento Preventivo</h1>
        <p class="text-xl m-1 font-titulo">1. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <p class="text-xl m-1 font-titulo">2. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <p class="text-xl m-1 font-titulo">3. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <p class="text-xl m-1 font-titulo">4. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <button class="hover:bg-green-400 col-span-2 rounded-full py-3 px-6 bg-green-500 mb-1 font-titulo">Ver Mas...</button>
      </div>

      <div class="fondo-mante-pre w-2/4">
        <img src="{{asset('img/ma-pre.svg')}}" class="h-auto m-auto mt-10">
      </div>


    </div>
    {{-- Segundo servicio tecnico --}}
    <div class="flex w-full h-auto bg-gray-900">
      <div class="fondo-mante-corre w-2/4">
        <img src="{{asset('img/ma-corre.svg')}}" class="h-auto m-auto mt-10">
      </div>

      <div class="grid grid-cols-2 w-2/4 h-auto text-white text-center gap-4 place-items-center">
        <h1 class="text-3xl m-1 col-span-2 font-titulo">Mantenimiento Correctivo</h1>
        <p class="text-xl m-1 font-titulo">1. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <p class="text-xl m-1 font-titulo">2. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <p class="text-xl m-1 font-titulo">3. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <p class="text-xl m-1 font-titulo">4. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <button class="hover:bg-green-400 col-span-2 rounded-full py-3 px-6 bg-green-500 mb-1  font-titulo">Ver Mas...</button>
      </div>

    </div>

    {{-- Tercer servicio tecnico --}}
    <div class="flex w-full h-auto bg-gray-900">

      <div class="grid grid-cols-2 w-2/4 h-auto text-white text-center gap-4 place-items-center z-0">
        <h1 class="text-3xl m-1 col-span-2 font-titulo">Asesoaria Online</h1>
        <p class="text-xl m-1 font-titulo">1. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <p class="text-xl m-1 font-titulo">2. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <p class="text-xl m-1 font-titulo">3. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <p class="text-xl m-1 font-titulo">4. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <button class="hover:bg-green-400 col-span-2 rounded-full py-3 px-6 bg-green-500 mb-1  font-titulo">Ver Mas...</button>
      </div>

      <div class="fondo-online w-2/4">
        <img src="{{asset('img/onliene.svg')}}" class=" h-auto m-auto mt-10">
      </div>

    </div>
  </div>

  {{-- Sesión de las marcas de las Impresoras y sus detalles --}}
  <div class="w-full h-auto fondo-impresoras text-white text-center pt-28">
    <h1 class="text-4xl font-titulo letras">Elige tu forma de trabajar</h1>
    <div class="w-full h-auto grid grid-cols-3 justify-items-center">
      <img class="m-8 mt-14" src="{{asset('img/brother.svg')}}" alt="300px" width="300">
      <img class="m-8 mt-16" src="{{asset('img/epson.svg')}}" alt="300px" width="300">
      <img class="m-8 mt-10" src="{{asset('img/konica.svg')}}" alt="300px" width="300">
    </div>

    <div class="grid grid-cols-4 justify-items-center m-10">
      <h5 class="text-1xl font-titulo p-5">Diseño</h5>
      <h5 class="text-1xl font-titulo p-5">Arquitectura</h5>
      <h5 class="text-1xl font-titulo p-5">Oficina</h5>
      <h5 class="text-1xl font-titulo p-5">Volumen</h5>
    </div>
  </div>



  {{-- Sesion de planes de renta --}}
  <div class="w-full h-auto mt-32">
    <h1 class=" text-black text-center font-titulo text-3xl">PLANES DE RENTA</h1>
    <div class=" w-full h-auto flex flex-wrap justify-center items-center pr-10 pl-10">

      <div class="w-3/4 h-64 pr-3 pl-3 mt-5">

        <div class="w-full flex">
          <div class="bg-white rounded-lg transition duration-700 ease-in-out transform hover:-translate-y-6 shadow-2xl w-2/4 h-auto text-center mt-2 mr-4">
            <div class="bg-green-500 h-auto rounded-sm">
              <h3 class=" text-black font-titulo text-2xl pt-2">PLAN OFICINA</h3>
            </div>
            <small class="text-ms text-gray-500">Se recomienda para oficinas de 5 a 10</small>
            <h3 class="text-4xl font-titulo mt-3">MX$1,800</h3>
            <span class="text-sm text-gray-500">Al mes</span>
            <ul class=" font-descrip flex flex-col items-start ml-10 mt-2 text-sm">
              <li class="pt-2">Impresora Konica minolta</li>
              <li class="pt-2">300 copias-impresiones color</li>
              <li class="pt-2">8,000 copias-impresione blanco y negro</li>
              <li class="pt-2">Escanner gratis</li>
              <li class="pt-2">Refacciones por averio gratis</li>
              <li class="pt-2">consumibles gratis</li>
              <li class="pt-2">2 mantenimiento al mes gratis</li>
              <li class="pt-2">Acesoria remota gratis</li>
            </ul>
            <button class="hover:bg-green-400 rounded-full py-3 px-6 bg-green-500 mb-3 mt-5 font-titulo">OBTENER</button>
          </div>

          <div class="bg-white rounded-lg transition duration-700 ease-in-out transform hover:-translate-y-6 shadow-2xl w-2/4 h-auto text-center mt-2 mr-4">
            <div class="bg-blue-500 h-auto rounded-sm">
              <h3 class=" text-black font-titulo text-2xl pt-2">Plan por volumen</h3>
            </div>
            <small class="text-ms text-gray-500">Se recomiendanda para estudiantes</small>
            <h3 class="text-4xl font-titulo mt-3">MX1,080</h3>
            <span class="text-sm text-gray-500">Al mes</span>
            <div class="bg-red-500 rounded-lg text-md text-white m-1 font-titulo">Más Vendido</div>
            <ul class=" font-descrip flex flex-col items-start ml-10 mt-2 text-sm">
              <li class="pt-2">Impresora <strong>Brother</strong> monocromatica</li>
              <li class="pt-2">6,000 copias-impresione blanco y negro</li>
              <li class="pt-2">Escanner gratis</li>
              <li class="pt-2">Refacciones por averio gratis</li>
              <li class="pt-2">consumibles gratis</li>
              <li class="pt-2">2 mantenimiento al mes gratis</li>
              <li class="pt-2">Acesoria remota gratis</li>
            </ul>
            <button class="hover:bg-blue-400 rounded-full py-3 px-6 bg-blue-500 mb-3 mt-5 font-titulo">OBTENER</button>
          </div>

          <div class="bg-white rounded-lg transition duration-700 ease-in-out transform hover:-translate-y-6 shadow-2xl w-2/4 h-auto text-center mt-2 mr-4">
            <div class=" bg-purple-500 h-auto rounded-sm">
              <h3 class=" text-black font-titulo text-2xl pt-2">PLAN OFICINA</h3>
            </div>
            <small class="text-ms text-gray-500">Pagas solo lo que consumes</small>
            <h3 class="text-4xl font-titulo mt-3">MX$00.00</h3>
            <span class="text-sm text-gray-500">Al mes</span>
            <ul class=" font-descrip flex flex-col items-start ml-10 mt-2 text-sm">
              <li class="pt-2">copias-impresiones color</li>
              <li class="pt-2">copias-impresione blanco y negro</li>
              <li class="pt-2">Escanner gratis</li>
              <li class="pt-2">Refacciones por averio gratis</li>
              <li class="pt-2">consumibles gratis</li>
              <li class="pt-2">2 mantenimiento al mes gratis</li>
              <li class="pt-2">Acesoria remota gratis</li>
              <li class="pt-2">1,000 copias minimo</li>
            </ul>
            <button class="hover:bg-green-400 rounded-full py-3 px-6 bg-green-500 mb-3 mt-5 font-titulo">OBTENER</button>
          </div>

        </div>


      </div>


    </div>

  </div>


  {{-- footer de la pagina --}}
  <footer class="w-full h-96 bg-gray-800 mt-80 pt-5">
    <div class=" flex justify-between justify-items-center w-full m-auto pt-10">

      <div class="w-1/3 m-4">
        <img class="w-24 h-24 rounded-full" src="{{asset('img/logo-bien.png')}}" alt="">
      </div>

      <div class="w-1/4 m-4 items-center flex flex-col">
        <div class="w-auto flex flex-col text-white">
          <h4 class="text-xl">Contactos</h4>
          <ul class="pt-2">
            <li><i class="far fa-map"><span class="pl-3 pt-3">San Geronimito Gro.</span></i></li>
            <li><i class="fas fa-phone-square-alt"><span class="pl-3 pt-3"> 758-103-60-78</span></i></li>
            <li><i class="far fa-envelope-open"><span class="pl-3">solucionesenimprecion@gmail.com</span></i></li>
          </ul>
        </div>

      </div>

      <div class="w-1/4 m-4 items-center flex flex-col">
        <div class="w-auto flex flex-col text-white">
          <h4 class="text-xl">Redes sociales</h4>
          <ul class="pt-2">
            <li><i class="fab fa-facebook-square"><span class="pl-3">SOLUCIONES EN IMPRESIÓN</span></i></li>
            <li><i class="fab fa-whatsapp"></i><span class="pl-3">758-103-60-78</span></li>
          </ul>

        </div>
      </div>

    </div>
    <div class="bg-gray-900 w-full h-28 mt-20 flex items-center justify-center">
      <div class="w-1/2 h-auto text-center">
        <i class="far fa-copyright text-white"><span class="pl-3 text-sm text-white">2021 Solucines en impresión. Todos los derechos reservados</span></i>
      </div>
    </div>
  </footer>

  <script src="{{asset('js/index.js')}}"></script>
</body>

</html>