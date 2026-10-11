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
      <a href="{{route('inicio')}}"><span class="letras-logo letras"> Soluciones En Impresiones</span></a>
    </div>

    <button class="boto-responsi xl:hidden nav-toggler" data-targets="#navegation" id="navegation"><i class="fas fa-align-justify"></i></button>

    <div id="menu" class="hidden top-nav w-full xl:inline-flex xl:flex-grow xl:w-auto">

      <div class="lg:inline-flex xl:flex-row xl:ml-auto flex flex-col">
        <a href="{{route('inicio')}}" class="nav-items"><i class="fas fa-home text-xl mr-2"></i>Inicio</a>
        <a href="{{route('impresoras')}}" class="nav-items"><i class="fas fa-print text-xl mr-2"></i>Impresoras</a>
        <a href="{{route('consumibles')}}" class="nav-items"><i class="fas fa-store text-xl mr-2"></i>Consumibles</a>
        <a href="{{route('oficina')}}" class="nav-items"><i class="fas fa-pen text-xl mr-2"></i>oficina</a>
        <a href="{{ route('carrito.index') }}" class="nav-items" aria-label="Carrito de compras">
          <i class="fa-solid fa-cart-shopping text-xl mr-2"></i>
          <span id="cartItemCount" aria-live="polite" aria-label="{{ $cartItemCount }} productos en el carrito"
            class="{{ $cartItemCount > 0 ? 'inline-flex' : 'hidden' }} w-5 h-5 items-center justify-center rounded-full bg-green-500 text-xs font-bold text-white">
            {{ $cartItemCount }}
          </span>
        </a>

        @if (auth()->check())
            <div class="menu-usuario">
              <button id="userMenu" class="menu-usuario-disparador" type="button" aria-expanded="false" aria-controls="optionUser">
                <span class="menu-usuario-avatar" aria-hidden="true">{{ auth()->user()->nombre[0] }}</span>
                <span class="menu-usuario-nombre">{{ auth()->user()->nombre }}</span>
                <i class="fas fa-chevron-down menu-usuario-flecha" aria-hidden="true"></i>
                <span class="sr-only">Abrir menú de usuario</span>
              </button>

              <div class="menu-usuario-opciones hidden" id="optionUser" role="menu" aria-label="Opciones de usuario">
                <div class="menu-usuario-encabezado">
                  <span class="menu-usuario-avatar menu-usuario-avatar--grande" aria-hidden="true">{{ auth()->user()->nombre[0] }}</span>
                  <div>
                    <p class="menu-usuario-saludo">Mi cuenta</p>
                    <p class="menu-usuario-nombre-completo">{{ auth()->user()->nombre }} {{ auth()->user()->apellidos }}</p>
                  </div>
                </div>
                <div class="menu-usuario-separador"></div>
                <div class="menu-usuario-opcion menu-usuario-opcion--desactivada" role="menuitem" aria-disabled="true">
                  <i class="fas fa-cog" aria-hidden="true"></i>
                  <span>Configuración</span>
                </div>
                <a class="menu-usuario-opcion menu-usuario-opcion--salir" href="{{ route('destroy') }}" role="menuitem">
                  <i class="fas fa-right-from-bracket" aria-hidden="true"></i>
                  <span>Salir</span>
                </a>
                {{-- Marcado anterior del menú, conservado temporalmente fuera del renderizado.
                    <li class="px-4 py-1 mt-3 hover:bg-gray-100 font-descrip">Configuración</li>
                    <li class="px-4 py-1 hover:bg-gray-100 font-descrip"><a href="{{route('destroy')}}">Salir</a></li> 
                  </ul>
                </div>
            </button>
                --}}
              </div>
            </div>
                        
            
        @else
        <a href="{{route('login')}}" class="nav-items"><i class="fas fa-user text-xl mr-2"></i>Mi Cuenta</a>
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
  <script type="module" src="{{asset('js/components/carrucel.js')}}"></script>
  <script type="module" src="{{asset('js/auth/loginValidator.js')}}"></script>
  <script type="module" src="{{asset('js/auth/formularioRegistro.js')}}"></script>
  <script type="module" src="{{asset('js/auth/fromResetPassword.js')}}"></script>
  <script type="module" src="{{asset('js/components/carrito.js')}}"></script>
  
  
</body>

</html>
