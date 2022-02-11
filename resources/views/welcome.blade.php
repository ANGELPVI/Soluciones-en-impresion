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
            
              <button class="botones w-1/4 col-span-12 text-black text-2xl hover:bg-green-400 rounded-full py-3 px-6 bg-green-500 mb-3 mt-20 font-titulo relative">Cotizar Ahora</button>
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

    {{-- Primer servicio tecnico --}}
    <div class="fondo-azul grid grid-cols-2 w-full h-auto bg-gray-900 justify-items-center content-center">

     <div class="w-full m-20 p-5 h-auto grid grid-cols-3 content-center justify-items-center">

      <h1 class="col-span-12 m-5 ml-20 w-full text-5xl text-white font-titulo">Lo más nuevo en tecnología de fotocopiado</h1>
      <p class="col-span-12 m-5 ml-20 w-full text-2xl text-white font-descrip">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, cumque.</p>
      <button class="botones w-2/4 col-span-12 text-black text-2xl hover:bg-green-400 rounded-full py-3 px-6 bg-green-500 mb-3 mt-20 font-titulo relative">Ver mas..</button>
     
    </div>

      <img class="col-span-1 mt-40" src="{{asset('img/konica.svg')}}" alt="" width="500" height="500">

    </div>

    {{-- Segundo servicio tecnico --}}
    <div class="fondo-amarillo grid grid-cols-2 w-full h-auto bg-gray-900 justify-items-center content-center">
      <img class="col-span-1 mt-40" src="{{asset('img/brother.svg')}}" alt="" width="500" height="500">

      <div class="w-full m-20 p-5 h-auto grid grid-cols-3 content-center justify-items-center">
       <h1 class="col-span-12 m-5 w-full text-5xl text-white font-titulo">Solo las mejores marcas para ti y tu negocio</h1>
       <p class="col-span-12 m-5 w-full text-2xl text-white font-descrip">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, cumque.</p>
       <button class="botones w-2/4 col-span-12 text-black text-2xl hover:bg-green-400 rounded-full py-3 px-6 bg-green-500 mb-3 mt-20 font-titulo relative">Ver mas..</button>
      
     </div>
     </div>

    {{-- Tercer servicio tecnico --}}
    <div class="fondo-magenta grid grid-cols-2 w-full h-auto bg-gray-900 justify-items-center content-center">
      
      <div class="w-full p-5 h-auto grid grid-cols-3 content-center justify-items-center">
       <h1 class="col-span-12 m-5 ml-20 w-full text-5xl text-white font-titulo">Asesoría online</h1>
       <p class="col-span-12 m-5 ml-20 w-full text-2xl text-white font-descrip">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, cumque.</p>
       <button class="botones w-2/4 col-span-12 text-black text-2xl hover:bg-green-400 rounded-full py-3 px-6 bg-green-500 mb-3 mt-20 font-ti relative">Pedir Asesoría</button>
        
     </div>
     <img class="col-span-1 mt-40" src="{{asset('img/onliene.svg')}}" alt="" width="500" height="500">
     <img class="col-span-12" src="{{asset("img/honda.svg")}}" alt="">
     </div>

  {{-- Sesión de las plataformas conpatibles --}}
  <div class="grid grid-cols-8 gap-2 w-full h-auto justify-items-center content-center">
    {{-- Titulo de la sesion --}}
      <h1 class="col-span-8 text-center text-titulos text-4xl font-titulo">Compatible con todas tus plataformas</h1>
      {{-- Primera targeta Windows--}}
      <div class="col-span-4 w-96 targetas h-auto text-black rounded-lg mt-10 transition duration-700 ease-in-out transform hover:-translate-y-6">
        <div class="grid grid-cols-4 p-4">
            <p class="col-span-2"><i class="fab fa-windows text-9xl text-blue-500 w-full text-center"></i></p>
            <div class="col-span-2 m-2 text-center w-full">
              <h1 class="col-span-4 w-full font-titulo text-center">Windows</h1>
              <p class="pt-5 font-descrip text-sm">Lorem ipsum dolor, sit amet consectetur.</p>
            </div>
        </div>
      </div>
        {{-- Segunda targeta Android --}}
        <div class="col-span-4 w-96 targetas h-auto text-black rounded-lg mt-10 transition duration-700 ease-in-out transform hover:-translate-y-6">
          <div class="grid grid-cols-4 p-4">
              <p class="col-span-2"><i class="fab fa-android text-9xl text-green-400 w-full text-center"></i></p>
              <div class="col-span-2 m-2 text-center w-full">
                <h1 class="col-span-4 w-full font-titulo text-center">Android</h1>
                <p class="pt-5 font-descrip text-sm">Lorem ipsum dolor, sit amet consectetur.</p>
              </div>
          </div>
        </div>
        {{-- Tersera targeta Linux--}}
        <div class="col-span-4 w-96 targetas h-auto text-black rounded-lg mt-10 transition duration-700 ease-in-out transform hover:-translate-y-6">
          <div class="grid grid-cols-4 p-4">
              <p class="col-span-2"><i class="fab fa-linux text-9xl text-gray-500 w-full text-center"></i></p>
              <div class="col-span-2 m-2 text-center w-full">
                <h1 class="col-span-4 w-full font-titulo text-center">Linux</h1>
                <p class="pt-5 font-descrip text-sm">Lorem ipsum dolor, sit amet consectetur.</p>
              </div>
          </div>
        </div>
        {{-- Cuarta targeta Apple--}}
        <div class="col-span-4 w-96 targetas h-auto text-black rounded-lg mt-10 transition duration-700 ease-in-out transform hover:-translate-y-6">
          <div class="grid grid-cols-4 p-4">
              <p class="col-span-2"><i class="fab fa-apple text-9xl text-gray-600 w-full text-center"></i></p>
              <div class="col-span-2 m-2 text-center w-full">
                <h1 class="col-span-4 w-full font-titulo text-center">Apple</h1>
                <p class="pt-5 font-descrip text-sm">Lorem ipsum dolor, sit amet consectetur.</p>
              </div>
          </div>
        </div>
  </div>

  {{-- Sesion de planes de renta --}}
  <div class="w-full h-auto mt-32">
    <h1 class=" text-titulos text-center font-titulo text-3xl">PLANES DE RENTA</h1>
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
            <button class="hover:bg-green-400 w-3/4 rounded-full  py-1 px-6 bg-green-500 mb-3 mt-5 font-titulo text-sm">OBTENER</button>
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
            <button class="hover:bg-blue-400 w-3/4 rounded-full py-1 px-6 bg-blue-500 mb-3 mt-5 font-titulo">OBTENER</button>
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
            <button class="hover:bg-green-400 w-3/4 rounded-full py-1 px-6 bg-purple-500 mb-3 mt-5 font-titulo">OBTENER</button>
          </div>

        </div>


      </div>


    </div>

  </div>
  
  {{-- Sesion de comentarios --}}
  <div class="grid grid-cols-12 w-full h-auto mt-80 justify-items-center content-center">
    <h1 class="col-span-12 text-center text-titulos text-4xl font-titulo p-10">Los más importante para nosotros</h1>
      {{-- Primer comentarios --}}
      <div class="col-span-12 w-2/4 h-auto bg-white rounded-2xl targetaComentario">
        <div class="grid grid-cols-12 w-full justify-items-center content-center">

            <img class="col-span-2 w-24 h-24 rounded-full p-2" src="https://static1.abc.es/media/bienestar/2021/09/09/personas-magneticas-1-kdVD--620x349@abc.jpg" alt="">
            <div class="col-span-10 w-full h-auto m-2 p-2">
              <h1 class="text-black font-titulo text-1xl">Sergio García</h1>
              <span class="text-comentario font-descrip text-sm">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quo omnis doloribus eos.
              </span>
            </div>
          
        </div>
      </div>

      {{-- Segundo comentario --}}
      <div class="col-span-12 w-2/4 h-auto mt-5 bg-white rounded-2xl targetaComentario">
        <div class="grid grid-cols-12 w-full justify-items-center content-center">

            <img class="col-span-2 w-24 h-24 rounded-full p-2" src="https://estudiantes.ucontinental.edu.pe/wp-content/uploads/2020/09/Madurez-emocional-7.jpg" alt="">
            <div class="col-span-10 w-full h-auto m-2 p-2">
              <h1 class="text-black font-titulo text-1xl">Reyna Nava</h1>  
              <span class="text-comentario font-descrip text-sm">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quo omnis doloribus eos.
              </span>
            </div>
          
        </div>
      </div>
      {{-- tercer comentario --}}
      <div class="col-span-12 w-2/4 h-auto mt-5 bg-white rounded-2xl targetaComentario">
        <div class="grid grid-cols-12 w-full justify-items-center content-center">

            <img class="col-span-2 w-24 h-24 rounded-full p-2" src="https://www.hola.com/imagenes/estar-bien/20210706192625/personalidad-adultos-altas-capacidades-psicologia/0-974-472/altas-capacidades-m.jpg?filter=w500" alt="">
            <div class="col-span-10 w-full h-auto m-2 p-2">
              <h1 class="text-black font-titulo text-1xl">Sofía Torres</h1>
              <span class="text-comentario font-descrip text-sm">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quo omnis doloribus eos.
              </span>
            </div>
          
        </div>
      </div>
      {{-- cuarto comentario --}}
      <div class="col-span-12 w-2/4 h-auto mt-5 bg-white rounded-2xl targetaComentario">
        <div class="grid grid-cols-12 w-full justify-items-center content-center">

            <img class="col-span-2 w-24 h-24 rounded-full p-2" src="https://cdn.pixabay.com/photo/2018/05/01/16/19/young-man-3366016_960_720.jpg" alt="">
            <div class="col-span-10 w-full h-auto m-2 p-2">
              <h1 class="text-black font-titulo text-1xl">Carlos Sánchez</h1>
              <span class="text-comentario font-descrip text-sm">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quo omnis doloribus eos.
              </span>
            </div>
          
        </div>
      </div>
  </div>


  {{-- footer de la pagina --}}
  <footer class="w-full h-96 bg-gray-800 mt-20">
    <div class="grid grid-cols-12 w-full">
      {{-- Logotipo y leyenda --}}
      <div class="grid col-span-5 w-full">
        <div class="grid grid-cols-4 w-full content-evenly">
          <img class="col-span-1 w-full h-28 p-2" src="{{asset('img/logo-bien.png')}}" alt="">
          <span class="col-span-2 w-full h-auto pt-10 text-2xl text-white font-titulo">Soluciones en impresión</span>
          <p class="col-span-2 p-5 font-descrip text-white text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. In, necessitatibus!
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, ab.
          </p>
        </div>
      </div>
      {{-- Contactos y redes sociales --}}
      <div class="grid col-span-4 w-full h-auto">
        <div class="flex flex-col h-auto text-white w-full">
          <h1 class="w-full pt-11 font-titulo text-1xl">Contactos</h1>
          <p class="h-auto w-full pt-1 font-descrip text-lg"><i class="fa-brands fa-whatsapp text-lg"></i> 755-117-75-73</p>
          <p class="h-auto w-full pt-1 font-descrip text-lg"><i class="fa-regular fa-envelope text-lg"></i> solucionesenimpresion@gmail.com</p>
        </div>
      </div>
        {{-- Redes sociales --}}
      <div class="grid col-span-3 w-full h-auto text-white">
        <div class="flex flex-col h-auto w-full">
          <h1 class="w-full pt-11 font-titulo text-1xl">Redes sociales</h1>
          <p class="h-auto w-full pt-1 font-descrip text-lg"><i class="fa-brands fa-facebook lg"></i> Soluciones en impresión</p>
        </div>
      </div>
      
    </div>

    {{-- copyright --}}
    <div class="bg-gray-900 w-full h-28 mt-20 flex items-center justify-center">
      <div class="w-1/2 h-auto text-center">
        <i class="far fa-copyright text-white"><span class="pl-3 text-sm text-white">2021 Solucines en impresión. Todos los derechos reservados</span></i>
      </div>
    </div>
  </footer>

  <script src="{{asset('js/index.js')}}"></script>
</body>

</html>