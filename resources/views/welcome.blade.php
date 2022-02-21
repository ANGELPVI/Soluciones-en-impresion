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
        <a href="#" class="nav-items"><i class="fas fa-home text-xl mr-2"></i>Inicio</a>
        <a href="#" class="nav-items"><i class="fas fa-print text-xl mr-2"></i>Impresoras</a>
        <a href="#" class="nav-items"><i class="fas fa-store text-xl mr-2"></i>Consumibles</a>
        <a href="#" class="nav-items"><i class="fas fa-wrench text-xl mr-2"></i>Soporte Técnico</a>
      </div>

    </div>
  </nav>
      {{-- Header --}}
  <div class="div-header fondo-header">
            <h1 class="title-header titulo-header">Calidad y experiencia en fotocopiadoras</h1>
            <p class="parrafo-header">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum laborum quaerat odio ipsum rerum, unde dolorem incidunt.
              Cupiditate ipsa rerum, animi labore repudiandae quae quod, sapiente possimus accusantium id totam. Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            </p>
            
              <button class="button-header botones ">Cotizar Ahora</button>
  </div>

  {{-- Seccion de las empresas --}}

  <div class="div-empresas">
    <h1 class="titulo-empresas">Empresas y gobiernos que confian en nosotros</h1>
    {{-- Contenedor padre --}}
    <div class="div-secundario">
      {{-- Targeta de precentacion, primera empresa --}}
      <div class="img-empresa">
        <div><img src="{{asset('img/oma.png')}}" class="opacity-30 h-32"></div>
      </div>

      {{-- Targeta de precentacion, segunda empresa --}}
      <div class="img-empresa">
        <div><img src="{{asset('img/tres-guerras.png')}}" class="opacity-30 h-36"></div>
      </div>

      {{-- Targeta de precentacion, tercera empresa --}}
      <div class="img-empresa">
        <div class=""><img src="{{asset('img/h-ayunta-zihu 1.png')}}" class="opacity-30 h-32"></div>
      </div>

      {{-- Targeta de precentacion, cuarta empresa --}}
      <div class="img-empresa">
        <div class=""><img src="{{asset('img/hospital.png')}}" class="opacity-30 h-32"></div>
      </div>

      {{-- Targeta de{{-- Targeta de precentacion, quinta empresa --}}
      <div class="img-empresa">
        <div class=""><img src="{{asset('img/cediz.png')}}" class="opacity-30 h-32"></div>
      </div>

      {{-- Targeta de{{-- Targeta de precentacion, sexta empresa --}}
      <div class="img-empresa">
        <div class=""><img src="{{asset('img/peta-nuevo.png')}}" class="opacity-30 h-32"></div>
      </div>
      

    </div>
  </div>

  {{-- Sesion de Servicios que ofrece la empresa --}}

    {{-- Primer servicio tecnico --}}
    <div class="fondo-azul div-principal-servisios">

     <div class="div-secundario-primer-servicio">

      <h1 class="titulo-primer-servicio">Lo más nuevo en tecnología de fotocopiado</h1>
      <p class="parrafo-primer-servicio">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, cumque.</p>
      <button class="botones boton-servicios">Ver mas..</button>
     
    </div>

      <img class="img-primer-servicio" src="{{asset('img/konica.svg')}}" alt="" width="500" height="500">

    </div>

    {{-- Segundo servicio tecnico --}}
    <div class="fondo-amarillo div-principal-servisios">

      <img class="img-segundo-servicio" src="{{asset('img/brother.svg')}}" alt="" width="500" height="500">

      <div class="div-secundario-segundo-servicio">
       <h1 class="titulo-segundo-servicio">Solo las mejores marcas para ti y tu negocio</h1>
       <p class="parrafo-segundo-servicio">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, cumque.</p>
       <button class="botones boton-segundo-servicio">Ver mas..</button>
      
     </div>
     </div>

     
    {{-- Tercer servicio tecnico --}}
    <div class="fondo-magenta div-principal-servisios">
      
      <div class="div-secundario-tercer-servicio">
       <h1 class="titulo-terser-servicio">Asesoría online</h1>
       <p class="parrafo-tercer-servicio">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, cumque.</p>
       <button class="botones boton-tercer-servicio">Pedir Asesoría</button>
        
     </div>
     <img class="img-tercer-servicio" src="{{asset('img/onliene.svg')}}" alt="" width="500" height="500">
     <img class="wave-servicios" src="{{asset("img/honda.svg")}}" alt="">
     </div>

     

     {{-- Sesión de las plataformas conpatibles --}}
     <div class="div-principal">
    {{-- Titulo de la sesion --}}
      <h1 class="titulo-plataforma">Compatible con todas tus plataformas</h1>
      {{-- Primera targeta Windows--}}
      <div class="targetas div-targeta">
        <div class="div-secundario-targetas">
            <p class="col-span-2"><i class="fab fa-windows text-9xl text-blue-500 w-full text-center"></i></p>
            <div class="div-parrafos">
              <h1 class="titulo-targeta">Windows</h1>
              <p class="parrafo-targeta">Lorem ipsum dolor, sit amet consectetur.</p>
            </div>
        </div>
      </div>
        {{-- Segunda targeta Android --}}
        <div class="targetas div-targeta">
          <div class="div-secundario-targetas">
              <p class="col-span-2"><i class="fab fa-android xs:text-8xl text-9xl text-green-400 w-full text-center"></i></p>
              <div class="div-parrafos">
                <h1 class="titulo-targeta">Android</h1>
                <p class="parrafo-targeta">Lorem ipsum dolor, sit amet consectetur.</p>
              </div>
          </div>
        </div>
        {{-- Tersera targeta Linux--}}
        <div class="targetas div-targeta">
          <div class="div-secundario-targetas">
              <p class="col-span-2"><i class="fab fa-linux text-9xl text-gray-500 w-full text-center"></i></p>
              <div class="div-parrafos">
                <h1 class="titulo-targeta">Linux</h1>
                <p class="parrafo-targeta">Lorem ipsum dolor, sit amet consectetur.</p>
              </div>
          </div>
        </div>
        {{-- Cuarta targeta Apple--}}
        <div class="targetas div-targeta">
          <div class="div-secundario-targetas">
              <p class="col-span-2"><i class="fab fa-apple text-9xl text-gray-600 w-full text-center"></i></p>
              <div class="div-parrafos">
                <h1 class="titulo-targeta">Apple</h1>
                <p class="parrafo-targeta">Lorem ipsum dolor, sit amet consectetur.</p>
              </div>
          </div>
        </div>
  </div>

     {{-- sesion de planes de renta con grid--}}
     <h1 class=" text-titulos text-center font-titulo text-3xl">PLANES DE RENTA</h1>
     <div class="grid grid-cols-12 w-full h-auto p-5 gap-3">

       <div class="col-span-4 bg-white w-auto h-auto rounded-lg transition duration-700 ease-in-out transform hover:-translate-y-6 shadow-2xl mt-2 mr-4">

         <div class="grid grid-cols-6 justify-items-center content-center">

             <h4 class="col-span-6 text-black font-titulo text-2xl pt-2 bg-green-500 w-full text-center">PLAN OFICINA</h4>
             <small class="col-span-6 text-ms text-gray-500 mt-3">Se recomienda para oficinas de 5 a 10</small>
             <h3 class="col-span-6 text-4xl font-titulo mt-3">$1,800 MX</h3>
             <span class="col-span-6 text-sm text-gray-500">Al mes</span>
           <ul class="col-span-6 font-descrip flex flex-col ml-12 mt-2 text-sm">
             <li class="pt-2">Impresora Konica minolta</li>
             <li class="pt-2">300 copias-impresiones color</li>
             <li class="pt-2">8,000 copias-impresione blanco y negro</li>
             <li class="pt-2">Escanner gratis</li>
             <li class="pt-2">Refacciones por averio gratis</li>
             <li class="pt-2">consumibles gratis</li>
             <li class="pt-2">2 mantenimiento al mes gratis</li>
             <li class="pt-2">Acesoria remota gratis</li>
           </ul>
           <button class="col-span-6 hover:bg-green-400 w-3/4 rounded-full  py-1 px-6 bg-green-500 mb-3 mt-5 font-titulo text-sm">OBTENER</button>
         
         </div>

       </div>

       <div class="col-span-4 w-auto h-auto bg-white rounded-lg transition duration-700 ease-in-out transform hover:-translate-y-6 shadow-2xl mt-2 mr-4">
         <div class="grid grid-cols-6 justify-items-center content-center">

           <h4 class="col-span-6 text-black font-titulo text-2xl pt-2 bg-blue-500 w-full text-center">PLAN OFICINA</h4>
           <small class="col-span-6 text-ms text-gray-500 mt-3">Se recomienda para oficinas de 5 a 10</small>
           <h3 class="col-span-6 text-4xl font-titulo mt-3">$1,800 MX</h3>
           <span class="col-span-6 text-sm text-gray-500">Al mes</span>
           <div class="col-span-6 w-3/4 text-center bg-red-500 rounded-lg text-md text-white font-titulo">Más Vendido</div>
         <ul class="col-span-6 font-descrip flex flex-col ml-12 mt-2 text-sm">
           <li class="pt-2">Impresora Konica minolta</li>
           <li class="pt-2">300 copias-impresiones color</li>
           <li class="pt-2">8,000 copias-impresione blanco y negro</li>
           <li class="pt-2">Escanner gratis</li>
           <li class="pt-2">Refacciones por averio gratis</li>
           <li class="pt-2">consumibles gratis</li>
           <li class="pt-2">2 mantenimiento al mes gratis</li>
           
         </ul>
         <button class="col-span-6 hover:bg-green-400 w-3/4 rounded-full  py-1 px-6 bg-blue-500 mb-3 mt-5 font-titulo text-sm">OBTENER</button>
       
       </div>
       </div>

       <div class="col-span-4 bg-white w-auto h-auto rounded-lg transition duration-700 ease-in-out transform hover:-translate-y-6 shadow-2xl mt-2 mr-4">
         <div class="grid grid-cols-6 justify-items-center content-center">

           <h4 class="col-span-6 text-black font-titulo text-2xl pt-2 bg-purple-500 w-full text-center">PLAN OFICINA</h4>
           <small class="col-span-6 text-ms text-gray-500 mt-3">Se recomienda para oficinas de 5 a 10</small>
           <h3 class="col-span-6 text-4xl font-titulo mt-3">$1,800 MX</h3>
           <span class="col-span-6 text-sm text-gray-500">Al mes</span>
         <ul class="col-span-6 font-descrip flex flex-col ml-12 mt-2 text-sm">
           <li class="pt-2">Impresora Konica minolta</li>
           <li class="pt-2">300 copias-impresiones color</li>
           <li class="pt-2">8,000 copias-impresione blanco y negro</li>
           <li class="pt-2">Escanner gratis</li>
           <li class="pt-2">Refacciones por averio gratis</li>
           <li class="pt-2">consumibles gratis</li>
           <li class="pt-2">2 mantenimiento al mes gratis</li>
           <li class="pt-2">Acesoria remota gratis</li>
         </ul>
         <button class="col-span-6 hover:bg-green-400 w-3/4 rounded-full  py-1 px-6 bg-purple-500 mb-3 mt-5 font-titulo text-sm">OBTENER</button>
       
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