<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Soluciones En Impresión</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Amaranth&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Coda&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
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
        <nav class="flex items-center bg-gray-800 p-3 flex-wrap">

          <div class="p-2 mr-4 inline-flex items-center">
            <img class="w-24 h-24" src="{{asset('img/logo-bien.png')}}">
            <span class="text-white text-lg pl-3 font-logo"> Soluciones En Impresión</span>
          </div>

          <button class="text-white inline-flex p-3 hover:bg-gray-900 rounded lg:hidden ml-auto nav-toggler" data-targets="#navegation" id="navegation"><i class="fas fa-align-justify"></i></button>

          <div id="menu" class="hidden top-nav w-full lg:inline-flex lg:flex-grow lg:w-auto" >

            <div class="lg:inline-flex lg:flex-row lg:ml-auto flex flex-col">
              <a href="#" class="transition duration-500 ease-in-out border-blue-400 hover:border-b-2 hover:text-white transform hover:-translate-y-1 hover:scale-110 font-titulo lg:inline-flex lg:w-auto uppercase m-3 px-2 py-2 text-gray-400"><i class="fas fa-print text-xl mr-2"></i>Impresoras</a>
              <a href="#" class="transition duration-500 ease-in-out font-titulo transform hover:-translate-y-1 hover:scale-110 lg:inline-flex lg:w-auto uppercase hover:text-white hover:border-b-2 border-blue-400 m-3 px-2 py-2 text-gray-400"><i class="fas fa-store text-xl mr-2"></i>Consumibles</a>
              <a href="#" class="transition duration-500 ease-in-out font-titulo transform hover:-translate-y-1 hover:scale-110 lg:inline-flex lg:w-auto uppercase hover:text-white hover:border-b-2 border-blue-400 m-3 px-2 py-2 text-gray-400"><i class="fas fa-wrench text-xl mr-2"></i>Soporte Técnico</a>
            </div>
            
          </div>            
        </nav>
        
          <div class="w-full bg-green-500">

            <div class="w-full flex flex-wrap">

              <div class="w-2/4 h-full flex flex-col text-white">
                <h1 class="font-titulo text-3xl px-14 pt-20">SOLUCIONES EN IMPRESIÓN</h1>
                <p class="w-full px-14 pt-4 text-sm font-descrip">
                  Somos una empresa dedicada a resolver problemas en equipos de impresión de láser de las marcas <strong>KONICA MINOLTA</strong>
                  y <strong>BROTHER</strong>, ayudamos a nuestros clientes a solventar dudas. Así mismo guiarlos para que puedan tomar una
                  decisión correcta al momento de seleccionar un equipo que pueda cubrir todas sus necesidades. 
                </p>
                <h3 class="text-2xl px-14 mt-10 font-titulo">80% de nuestros clientes están satisfechos por el gran servicio que otorgamos.</h3>
                <h3 class="text-2xl px-14 mt-10 font-titulo">100% Regresa para solicitar una ayuda con sus equipos.</h3>
              </div>
  
              <div class="w-2/4">
                <img src="{{asset('img/copiadora.svg')}}" class="h-96 w-full">
              </div>
            </div>

            <div class="-mt-10">
            <img src="{{asset('img/wave.svg')}}" alt="">
          </div>

          </div>
         

          {{-- Seccion de las empresas --}}

          <div class="w-full h-auto border-gray-100">
                <h1 class="font-titulo text-3xl uppercase text-center text-black">empresas y gobiernos que confían en nosotros</h1>
                {{-- Contenedor padre --}}
                <div class="w-full flex flex-wrap justify-center items-center">
                  {{-- Targeta de precentacion, primera empresa --}}
                    <div class="w-96 h-32 m-4 text-center">
                      <div><img src="{{asset('img/oma.png')}}" class="opacity-30 img-empresas"></div>
                    </div>

                    {{-- Targeta de precentacion, segunda empresa --}}
                    <div class="w-96 h-32 m-4 text-center">
                      <div><img src="{{asset('img/tres-guerras.png')}}" class="opacity-30 "></div>
                    </div>

                    {{-- Targeta de precentacion, tercera empresa --}}
                    <div class="w-96 h-32 m-4 text-center">
                      <div class="flex justify-center"><img src="{{asset('img/h-ayunta-zihu.png')}}" class="py-9 opacity-30"></div>
                    </div>

                    {{-- Targeta de precentacion, cuarta empresa --}}
                    <div class="w-80 h-32 m-4">
                      <div class="flex justify-center items-center"><img src="{{asset('img/hospital.png')}}" class="opacity-30 img-empresas"></div>
                    </div>

                    {{-- Targeta de{{-- Targeta de precentacion, quinta empresa --}}
                    <div class="w-80 h-32 m-4 text-center">
                      <div class="flex justify-center items-center"><img src="{{asset('img/peta-h.png')}}" class="opacity-30 img-empresas"></div>
                    </div>                    
                    
                </div>
          </div>

          {{-- Sesion de Servicios que ofrece la empresa --}}
          <div class="w-full h-auto mt-20">
            <h1 class=" text-black text-center font-titulo text-3xl">SOPORTE TÉCNICO</h1>
            <div class=" w-full h-auto flex flex-wrap justify-center items-center pr-10 pl-10">
              
              <div class="w-3/4 h-64 pr-3 pl-3 mt-5">
                
                <div class="w-full flex">
                  <div class="bg-white rounded-lg transition duration-700 ease-in-out transform hover:-translate-y-6 shadow-2xl w-2/4 h-auto text-center mt-2 mr-4">
                    <i class="fas fa-tasks text-6xl pt-6 mt-3 text-white bg-gray-800 rounded-full w-28 h-28"></i>
                    <h3 class=" text-black font-titulo text-1xl pt-2">MANTENIMIENTO PREVENTIVO</h3>
                    <P class="text-sm font-descrip p-3 text-black text-justify">Se realiza una rutina de limpieza de hardware y módulos en el equipo, así mismo se examina detalladamente las partes que están llegando a su vida útil. Se le informa al cliente las posibles fallas que pueden presentarse en la impresora.</P>
                    <button class="hover:bg-green-400 rounded-full py-3 px-6 bg-green-500 mb-3">Ver mas..</button>
                </div>

                <div class="bg-white rounded-lg transition duration-700 ease-in-out transform hover:-translate-y-6 shadow-2xl w-2/4 h-auto text-center mt-2 mr-4">
                  <i class="fas fa-tools text-6xl pt-6 mt-3 text-white bg-gray-800 rounded-full w-28 h-28"></i>
                  <h3 class="text-black font-titulo text-1xl pt-2">MANTENIMIENTO CORRECTIVO</h3>
                  <P class="text-sm font-descrip p-3 text-black text-justify">Se corrige o se repara el daño que presente el equipo del cliente, además se hace un análisis exhaustivo para identificar el porqué ocurrió la falla de la impresora, también se le informa al usuario cual es la mejor forma de manipular su equipo.</P>
                  <button class="hover:bg-green-400 rounded-full py-3 px-6 bg-green-500 mb-3">Ver mas..</button>
              </div>

              <div class="bg-white rounded-lg transition duration-700 ease-in-out transform hover:-translate-y-6 shadow-2xl w-2/4 h-auto text-center mt-2 mr-4">
                <i class="fas fa-user-cog text-6xl pt-6 mt-3 text-white bg-gray-800 rounded-full w-28 h-28"></i>
                <h3 class=" text-black font-titulo text-1xl pt-2">CONFIGURACIÓN DE USUARIO</h3>
                <P class="text-sm font-descrip p-3 text-black text-justify">Realizamos las configuraciones que el usuario necesite para un mejor uso de su equipo, también le sugerimos al cliente como puede hacer para que su impresora tenga un ahorro en consumibles conservando la mejor calidad y nitidez.</P>
                <button class="hover:bg-green-400 rounded-full py-3 px-6 bg-green-500 mb-3">Ver mas..</button>
              </div>

                </div>
              </div>
            </div>
          </div>

          {{-- Sesión de las marcas de las Impresoras y sus detalles --}}
          <div class="w-full mt-52 flex flex-col items-center justify-center fondo-uno h-auto">
              <div class="mt-20 flex w-full items-center justify-center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Logo_Konica_Minolta.svg/1280px-Logo_Konica_Minolta.svg.png" width="400px" height="200px" class=" ml-56"> 
                <div class="w-2/4 flex flex-col ml-16">
                  <div class=" w-5/6 h-5 m-4"><span class="text-green-400 font-titulo text-3xl">10% En atoramiento de hojas <i class="fas fa-check-square"></i></span></div>
                  <div class="w-4/6 h-5 m-4"><span class="text-green-400 font-titulo text-3xl">60% En el Ahorro de toner <i class="fas fa-check-square"></i></span></div>
                  <div class="w-4/6 h-5 m-4"><span class="text-green-400 font-titulo text-3xl">50% En Ahorro de refacciones <i class="fas fa-check-square"></i></span></div>
                </div>
              </div>
               
              <div class="flex w-full items-center justify-center">
                <div class="w-1/3 flex flex-col h-auto">
                  <div class=" w-full h-5"><span class="text-green-400 font-titulo text-3xl">12% En atoramiento de hojas <i class="fas fa-check-square"></i></span></div>
                  <div class="w-full h-5 mt-7"><span class="text-green-400 font-titulo text-3xl">40% En el Ahorro de toner <i class="fas fa-check-square"></i></span></div>
                  <div class="w-full h-5 mt-7"><span class="text-green-400 font-titulo text-3xl">30% En Ahorro de refacciones <i class="fas fa-check-square"></i></span></div>
                </div>
                <img src="{{asset('img/BROTHER-LOGO.png')}}" width="400px" height="200px" class="">
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
                  <i class="far fa-copyright text-white"><span class="pl-3 text-sm text-white">2021 Solucines en impresión. Todos los derechos  reservados</span></i>
                </div>
            </div>
          </footer>
      
        <script src="{{asset('js/index.js')}}"></script>
    </body>
</html>
