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
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/index.css')}}">
        
        <script src="https://kit.fontawesome.com/315f51bd5c.js" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
            
        </style>
    </head>
    <body>     
        <nav class="flex items-center bg-gray-800 p-3 flex-wrap">

          <div class="p-2 mr-4 inline-flex items-center ">
            <img class="w-24 h-24 rounded-full" src="{{asset('img/logo.jpeg')}}" alt="">
          </div>

          <button class="text-white inline-flex p-3 hover:bg-gray-900 rounded lg:hidden ml-auto nav-toggler" data-targets="#navegation" id="navegation"><i class="fas fa-align-justify"></i></button>

          <div id="menu" class="hidden top-nav w-full lg:inline-flex lg:flex-grow lg:w-auto" >

            <div class="lg:inline-flex lg:flex-row lg:ml-auto flex flex-col">
              <a href="#" class="font-titulo lg:inline-flex lg:w-auto  uppercase m-3 px-2 py-2 text-gray-400 hover:text-white hover:border-b-2 border-blue-400"><i class="fas fa-print text-xl mr-2"></i>Impresoras</a>
              <a href="#" class="font-titulo lg:inline-flex lg:w-auto uppercase hover:text-white hover:border-b-2 border-blue-400 m-3 px-2 py-2 text-gray-400"><i class="fas fa-store text-xl mr-2"></i>Consumibles</a>
              <a href="#" class="font-titulo lg:inline-flex lg:w-auto uppercase hover:text-white hover:border-b-2 border-blue-400 m-3 px-2 py-2 text-gray-400"><i class="fas fa-wrench text-xl mr-2"></i>Soporte Técnico</a>
            </div>
            
          </div>            
        </nav>
        
          <div class="w-full fondo-uno">

            <div class="w-full flex flex-wrap">

              <div class="w-2/4 h-full flex flex-col">
                <h1 class="font-titulo text-3xl text-black px-14 pt-32">SOLUCIONES EN IMPRECIÓN</h1>
                <p class="text-black w-full px-14 pt-4 text-sm font-descrip">
                  Empresa dedicada a dar suluciones en impresoras de laser,de las marcas <strong>konica minolta</strong> y <strong>Brother.</strong>
                  Contando con años de esperiencia en el mercado de la tecnólogia de las impresoras los cuales nos respaldan para brindar
                  el mejor servicio a nuestros clientes. 
                </p>
              </div>
  
              <div class="w-2/4">
                <img src="{{asset('img/portada2.svg')}}" class="h-96 w-full">
              </div>
            </div>

            <div class="-mt-10">
            <img src="{{asset('img/wave.svg')}}" alt="">
          </div>

          </div>
          

          {{-- Seccion de las empresas --}}

          <div class="w-full h-auto border-gray-100">
                <h1 class="py-5 font-titulo text-3xl uppercase text-center text-black">empresas y gobiernos que confian en nosotros</h1>
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
                      <div class="flex justify-center items-center"><img src="{{asset('img/peta-h.png')}}" class="opacity-30   img-empresas"></div>
                    </div>                    
                    
                </div>
          </div>
      
        <script src="{{asset('js/index.js')}}"></script>
    </body>
</html>
