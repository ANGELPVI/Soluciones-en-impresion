<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Soluciones En Impresión</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        
        <script src="https://kit.fontawesome.com/315f51bd5c.js" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
            
        </style>
    </head>
    <body>     
        <nav class="flex items-center bg-gray-700 p-3 flex-wrap">

          <div class="p-2 mr-4 inline-flex items-center">
            <img class="w-24 h-24" src="{{asset('img/pp.svg')}}" alt="">
          </div>

          <button class="text-white inline-flex p-3 hover:bg-gray-900 rounded lg:hidden ml-auto nav-toggler" data-targets="#navegation" id="navegation"><i class="fas fa-align-justify"></i></button>

          <div id="menu" class="hidden top-nav w-full lg:inline-flex lg:flex-grow lg:w-auto" >

            <div class="lg:inline-flex lg:flex-row lg:ml-auto flex flex-col">
              <a href="#" class="font-titulo lg:inline-flex lg:w-auto  uppercase m-3 px-2 py-2 text-gray-400 hover:text-white hover:border-b-2 border-blue-400"><i class="fas fa-print text-xl mr-2"></i>Impresoras</a>
              <a href="#" class="font-titulo lg:inline-flex lg:w-auto uppercase hover:text-white hover:border-b-2 border-blue-400 m-3 px-2 py-2 text-gray-400"><i class="fas fa-store text-xl mr-2"></i>Consumibles</a>
              <a href="#" class="font-titulo lg:inline-flex lg:w-auto uppercase hover:text-white hover:border-b-2 border-blue-400 m-3 px-2 py-2 text-gray-400"><i class="fas fa-wrench text-xl mr-2"></i> Soporte</a>
            </div>
            
          </div>
            
        </nav>
        
        <script src="{{asset('js/index.js')}}"></script>
    </body>
</html>
