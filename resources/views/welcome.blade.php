<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
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
        <a href="{{route('soporte')}}" class="nav-items"><i class="fa-solid fa-cart-shopping text-xl mr-2"></i></i>Carrito</a>

        @if (auth()->check())
            <button id="userMenu" class="relative m-3 w-full h-10 grid grid-cols-1 shadow  text-gray-200">
              <div class="pl-2 pr-2 w-full bg-green-500 rounded-full"><p class="font-descrip uppercase text-3xl">{{auth()->user()->nombre[0] }}</p></div>
              {{-- <span class="p-2 m-1 hover:bg-gray-100"><i class="fa-solid fa-arrow-down"></i></span> --}}
                <div class="z-40 absolute hidden top-10 col-span-2 w-40 bg-white text-gray-500 shadow-md mt-1 rounded -ml-36" id="optionUser">
                  <p class="p-2 uppercase font-titulo border-b">{{auth()->user()->nombre }} {{auth()->user()->apellidos}}</p>
                  <ul class="text-left border rounded">
                    <li class="px-4 py-1 mt-3 hover:bg-gray-100 font-descrip">Configuración</li>
                    <li class="px-4 py-1 hover:bg-gray-100 font-descrip"><a href="{{route('destroy')}}">Salir</a></li> 
                  </ul>
                </div>
            </button>
                        
            
        @else
        <a href="{{route('login')}}" class="nav-items"><i class="fas fa-user text-xl mr-2"></i>Login</a>
        {{-- <a href="{{route('registro')}}" class="nav-items"><i class="fas fa-wrench text-xl mr-2"></i>Registro</a> --}}
        @endif
        

      </div>

    </div>
  </nav>
      
  
    @yield('sesion')
  


  <footer class="footer">
    <div class="footer-container">
      <!-- Logo y nombre de la empresa -->
      <div class="footer-logo">
        <img class="img-logo" src="{{asset('img/logo-bien.png')}}">
        <span class="footer-nombre">Soluciones En Impresión</span>
        <p class="footer-description mt-2">Venta y renta de impresoras, consumibles y soporte técnico especializado para tu negocio.</p>
      </div>
      

      <!-- Sobre Nosotros -->
      <div class="footer-sobre-nosotros">
        <h3 class="footer-title">Sobre Nosotros</h3>
        <ul class="footer-list">
          <li><a href="{{ route('nuestra-historia') }}" class="footer-link">Nuestra Historia</a></li>
          <li><a href="{{ route('mision-vision') }}" class="footer-link">Misión y Visión</a></li>
         <li><a href="{{ route('servicios-especializados') }}" class="footer-link">Servicios Especializados</a></li>
        <li><a href="{{ route('cobertura-atencion') }}" class="footer-link">Cobertura y Atención</a></li>
        </ul>
      </div>

      <!-- Ayuda -->
      <div class="footer-ayuda">
        <h3 class="footer-title">Ayuda</h3>
        <ul class="footer-list">
          <li><a href="{{ route('preguntas-frecuentes') }}" class="footer-link">Preguntas Frecuentes</a></li>
          <li><a href="{{ route('guia-compra') }}" class="footer-link">Guía de compra</a></li>
          <li><a href="{{ route('politica-garantia')}}" class="footer-link">Políticas de garantía</a></li>
        </ul>
      </div>

      <!-- Contacto -->
      <div class="footer-contacto">
        <h3 class="footer-title">Contacto</h3>
        <div class="footer-social-icons">
            <a href="https://www.facebook.com/TU_PAGINA" class="footer-icon" title="Facebook" target="_blank" rel="noopener"><i class="fab fa-facebook"></i></a>
            <a href="https://wa.me/527581036078" class="footer-icon" title="WhatsApp" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i></a>
            <a href="tel:+527581036078" class="footer-icon" title="Llamadas"><i class="fas fa-phone"></i></a>
        </div>
      </div>

    </div>
    <div class="footer-copy">&copy; 2025 Soluciones En Impresiones. Todos los derechos reservados.</div>
  </footer>

  <script type="module" src="{{asset('js/components/acordion.js') }}"></script>
  <script type="module" src="{{asset('js/components/locationSelector.js')}}"></script>
  <script type="module" src="{{asset('js/components/authUserMenu.js')}}"></script>
  <script type="module" src="{{asset('js/auth/loginValidator.js')}}"></script>
  <script type="module" src="{{asset('js/auth/formularioRegistro.js')}}"></script>
  
</body>

</html>