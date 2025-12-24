@extends('welcome')

@section('sesion')
    {{-- Header --}}
    <div class="div-header fondo-header">
        <h1 class="title-header titulo-header">Calidad y experiencia en fotocopiadoras</h1>
        <p class="parrafo-header">
            Somos una empresa dedicada a ofrecer soluciones integrales en el arrendamiento, venta y mantenimiento de
            impresoras multifuncionales de laser e inyección de tinta, así como en la comercialización de productos de
            papelería y tecnología de la mejor
            calidad para tu empresa o negocio.
        </p>

        <button class="button-header botones ">Cotizar Ahora</button>
    </div>

    {{-- Seccion de las empresas --}}
    <h1 class="titulo-empresas">Empresas y gobiernos que confian en nosotros</h1>
    <div class="div-empresas">
        {{-- Contenedor padre --}}
        <div class="div-secundario">
            {{-- Targeta de precentacion, primera empresa --}}
            <div class="img-empresa">
                <div><img src="{{ asset('img/logo-oma.svg') }}" class="opacity-30 h-32"></div>
            </div>

            {{-- Targeta de precentacion, segunda empresa --}}
            <div class="img-empresa">
                <div><img src="{{ asset('img/tres-guerras.svg') }}" class="opacity-30 h-36"></div>
            </div>

            {{-- Targeta de precentacion, tercera empresa --}}
            <div class="img-empresa">
                <div class=""><img src="{{ asset('img/zihua.svg') }}" class="opacity-30 h-32"></div>
            </div>

            {{-- Targeta de precentacion, cuarta empresa --}}
            <div class="img-empresa">
                <div class=""><img src="{{ asset('img/royal.svg') }}" class="opacity-18 h-32"></div>
            </div>

            {{-- Targeta de{{-- Targeta de precentacion, quinta empresa --}}
            <div class="img-empresa">
                <div class=""><img src="{{ asset('img/cediz.svg') }}" class="opacity-30 h-32"></div>
            </div>

            {{-- Targeta de{{-- Targeta de precentacion, sexta empresa --}}
            <div class="img-empresa">
                <div class=""><img src="{{ asset('img/fontan.svg') }}" class="opacity-30 h-32"></div>
            </div>

            <div class="img-empresa">
                <div class=""><img src="{{ asset('img/fibazi.svg') }}" class="opacity-30 h-32"></div>
            </div>

            {{-- Targeta de precentacion, septima empresa --}}
            <div class="img-empresa">
                <div class=""><img src="{{ asset('img/logo-cala-mar.svg') }}" class="opacity-80 h-32"></div>
            </div>

            {{-- Targeta de precentacion, octava empresa --}}
            <div class="img-empresa">
                <div class=""><img src="{{ asset('img/logo-capaz.svg') }}" class="opacity-30 h-32"></div>
            </div>

            {{-- Targeta de precentacion, novena empresa --}}
            <div class="img-empresa">
                <div class=""><img src="{{ asset('img/logo-icep.svg') }}" class="opacity-30 h-32"></div>
            </div>

            {{-- Targeta de precentacion, decima empresa --}}
            <div class="img-empresa">
                <div class=""><img src="{{ asset('img/ceusjit.svg') }}" class="opacity-70 h-32"></div>
            </div>

            {{-- Targeta de precentacion, onceava empresa --}}
            <div class="img-empresa">
                <div class=""><img src="{{ asset('img/HBS-DELLI.svg') }}" class="opacity-70 h-32"></div>
            </div>

        </div>
    </div>

    {{-- Sesion de Servicios que ofrece la empresa --}}

    {{-- Primer servicio tecnico --}}
    <div class="fondo-azul div-principal-servisios">

        <div class="div-secundario-primer-servicio">

            <h1 class="titulo-primer-servicio">Lo más nuevo en tecnología de fotocopiado</h1>
            <p class="parrafo-primer-servicio">Somos líderes en soluciones de impresión y fotocopiado, ofreciendo lo más
                nuevo en tecnología de fotocopiadoras para empresas y negocios. Contamos con equipos multifuncionales de
                última generación, que garantizan alta calidad, eficiencia y ahorro en cada impresión.
            </p>


        </div>
        <video src="{{ asset('video/konica-serie 8.mp4') }}" class="vid-primer-servicio" autoplay loop muted width="600"
            height="700">
            Tu navegador no soporta el elemento de video.
        </video>
    </div>
   

    {{-- Segundo servicio tecnico --}}
    <div class="fondo-amarillo div-principal-servisios">
      
        <div class="carrusel-imagenes">
             <h1 class="titulo-movil">Solo las mejores marcas para ti y tu negocio</h1>
            <img src="{{ asset('img/brother.jpg') }}" class="carrusel-img" />
            <img src="{{ asset('img/konica-minolta.jpg') }}" class="carrusel-img" />
            <img src="{{ asset('img/epson.jpg') }}" class="carrusel-img" />
            <img src="{{ asset('img/impresora hp.webp') }}" class="carrusel-img" />
        </div>



        <div class="div-secundario-segundo-servicio">
            <h1 class="titulo-segundo-servicio">Solo las mejores marcas para ti y tu negocio</h1>
            <p class="parrafo-segundo-servicio">
                Nuestra empresa se enorgullece en ofrecer las mejores impresoras del mercado,
                diseñadas para cubrir todas las necesidades de impresión tanto en oficinas como en hogares.
                Contamos con equipos de última generación que garantizan rapidez, calidad y un rendimiento excepcional en
                cada impresión.
            </p>


        </div>
    </div>


    {{-- Tercer servicio tecnico --}}
    <div class="fondo-magenta div-principal-servisios pt-60">

        {{-- Contenedor del carrucel y el texto --}}

        <div class="div-secundario-tercer-servicio">
            <h1 class="titulo-terser-servicio">Servicio técnico experto en impresoras láser y de inyección de tinta</h1>

            <ul class="lista-iconos-tecer-servicio">   
                <li class="item-tercer-servicio">
                    <!-- Icono desarmador y llave inglesa (herramientas) -->
                    <i class="fas fa-wrench icono-tecer-servicio"></i>
                    <p class="parrafos-tercer-servicio">    
                        Soporte técnico especializado y rápido para mantener tus impresoras en óptimas condiciones.
                    </p>
                </li>
                <li class="item-tercer-servicio">
                    <!-- Icono bote de tóner -->
                    <i class="fas fa-fill-drip icono2-tecer-servicio"></i>
                    <p class="parrafos-tercer-servicio">
                        Refacciones y consumibles originales y la mejor calidad OEM.
                    </p>
                </li>
                <li class="item-tercer-servicio">
                    <!-- Icono usuario con casco (experiencia) -->
                    <i class="fas fa-users-cog icono3-tecer-servicio"></i>
                    <p class="parrafos-tercer-servicio">
                        Años de experiencia en el sector en tecnología de impresión.
                    </p>
                </li>
            </ul>


        </div>

        <div class="divTercerCarrucel">
            <div class="divPrincipalCarrucelTercelServicio">
                
                <img src="https://res.cloudinary.com/dfd7blslx/image/upload/v1762044853/13_n7yu6j.jpg" class="soporte-carrusel-img" />
                <img src="https://res.cloudinary.com/dfd7blslx/image/upload/v1762044852/2_cm2jak.jpg" class="soporte-carrusel-img" />
                <img src="https://res.cloudinary.com/dfd7blslx/image/upload/v1762044851/6_qzjigt.jpg" class="soporte-carrusel-img" />
                <img src="https://res.cloudinary.com/dfd7blslx/image/upload/v1762044846/5_g69cja.jpg" class="soporte-carrusel-img" />
                <img src="https://res.cloudinary.com/dfd7blslx/image/upload/v1762044847/3_ppqier.jpg" class="soporte-carrusel-img" />
                <img src="https://res.cloudinary.com/dfd7blslx/image/upload/v1762044844/15_etk0kv.jpg" class="soporte-carrusel-img" />
                <img src="https://res.cloudinary.com/dfd7blslx/image/upload/v1762044829/8_swexmo.jpg" class="soporte-carrusel-img" />
                <img src="https://res.cloudinary.com/dfd7blslx/image/upload/v1762044832/11_zdhpap.jpg" class="soporte-carrusel-img" />
                <img src="https://res.cloudinary.com/dfd7blslx/image/upload/v1762044827/7_hsxk0v.jpg" class="soporte-carrusel-img" />
                <img src="https://res.cloudinary.com/dfd7blslx/image/upload/v1762044826/12_gwbzxr.jpg" class="soporte-carrusel-img" />
                <img src="https://res.cloudinary.com/dfd7blslx/image/upload/v1762044821/10_nemtxw.jpg" class="soporte-carrusel-img" />
                <img src="https://res.cloudinary.com/dfd7blslx/image/upload/v1762044818/16_daysrx.jpg" class="soporte-carrusel-img" />
                <img src="https://res.cloudinary.com/dfd7blslx/image/upload/v1762044815/9_s5n8ul.jpg" class="soporte-carrusel-img" />
                <img src="https://res.cloudinary.com/dfd7blslx/image/upload/v1762044811/1_lxi637.jpg" class="soporte-carrusel-img" />
                <img src="https://res.cloudinary.com/dfd7blslx/image/upload/v1762044808/20_ewnoji.jpg" class="soporte-carrusel-img" />
                <img src="https://res.cloudinary.com/dfd7blslx/image/upload/v1762044801/18_esxz7e.jpg" class="soporte-carrusel-img" />
                <img src="https://res.cloudinary.com/dfd7blslx/image/upload/v1762044801/17_if7od1.jpg" class="soporte-carrusel-img" />
            </div>
            <!-- Botón anterior -->
            <button id="btn-prev" class="btn-carrusel-mantenimiento">
                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <!-- Botón siguiente -->
            <button id="btn-next" class="bt-carrucel-mantenimiento-right">
                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>

        <img class="wave-servicios" src="{{ asset('img/honda.svg') }}" alt="">
    </div>



    {{-- Sesión de las plataformas conpatibles --}}
    <div class="div-principal">
        {{-- Titulo de la sesion --}}
        <h1 class="titulo-plataforma">Compatible con todas tus plataformas</h1>
        {{-- Primera targeta Windows --}}
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
                <p class="col-span-2"><i
                        class="fab fa-android xs:text-8xl text-9xl text-green-400 w-full text-center"></i>
                </p>
                <div class="div-parrafos">
                    <h1 class="titulo-targeta">Android</h1>
                    <p class="parrafo-targeta">Lorem ipsum dolor, sit amet consectetur.</p>
                </div>
            </div>
        </div>
        {{-- Tersera targeta Linux --}}
        <div class="targetas div-targeta">
            <div class="div-secundario-targetas">
                <p class="col-span-2"><i class="fab fa-linux text-9xl text-gray-500 w-full text-center"></i></p>
                <div class="div-parrafos">
                    <h1 class="titulo-targeta">Linux</h1>
                    <p class="parrafo-targeta">Lorem ipsum dolor, sit amet consectetur.</p>
                </div>
            </div>
        </div>
        {{-- Cuarta targeta Apple --}}
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

    {{-- sesion de planes de renta con grid --}}
    <h1 class="titulo-planes-renta">PLANES DE RENTA</h1>
    <div class="div-principal-renta">

        <div class="targeta-renta">

            <div class="div-contenido-targeta">

                <h4 class="header-targeta">PLAN OFICINA</h4>
                <small class="col-span-6 text-ms text-gray-500 mt-3">Se recomienda para oficinas de 5 a 10</small>
                <h3 class="titulo-precio-targeta">$1,800 MX</h3>
                <span class="targera-timpo-renta">Al mes</span>
                <ul class="targeta-lista-carateristicas">
                    <li class="pt-2">Impresora Konica minolta</li>
                    <li class="pt-2">300 copias-impresiones color</li>
                    <li class="pt-2">8,000 copias-impresione blanco y negro</li>
                    <li class="pt-2">Escanner gratis</li>
                    <li class="pt-2">Refacciones por averio gratis</li>
                    <li class="pt-2">consumibles gratis</li>
                    <li class="pt-2">2 mantenimiento al mes gratis</li>
                    <li class="pt-2">Acesoria remota gratis</li>
                </ul>
                <button class="button-primera-renta">OBTENER</button>

            </div>

        </div>
        {{-- Segunda tarjeta de plan de renta --}}
        <div class="targeta-renta">
            <div class="div-contenido-targeta">

                <h4 class="header-targeta-segundo-plan">PLAN OFICINA</h4>
                <small class="col-span-6 text-ms text-gray-500 mt-3">Se recomienda para oficinas de 5 a 10</small>
                <h3 class="titulo-precio-targeta">$1,800 MX</h3>
                <span class="targera-timpo-renta">Al mes</span>
                <div class="col-span-6 w-3/4 text-center bg-red-500 rounded-lg text-md text-white font-titulo">Más Vendido
                </div>
                <ul class="targeta-lista-carateristicas">
                    <li class="pt-2">Impresora Konica minolta</li>
                    <li class="pt-2">300 copias-impresiones color</li>
                    <li class="pt-2">8,000 copias-impresione blanco y negro</li>
                    <li class="pt-2">Escanner gratis</li>
                    <li class="pt-2">Refacciones por averio gratis</li>
                    <li class="pt-2">consumibles gratis</li>
                    <li class="pt-2">2 mantenimiento al mes gratis</li>

                </ul>
                <button class="button-segunda-renta">OBTENER</button>

            </div>
        </div>

        {{-- Tersera targeta plan de renta --}}
        <div class="targeta-renta">
            <div class="div-contenido-targeta">

                <h4 class="heder-tercera-renta">PLAN OFICINA</h4>
                <small class="col-span-6 text-ms text-gray-500 mt-3">Se recomienda para oficinas de 5 a 10</small>
                <h3 class="titulo-precio-targeta">$1,800 MX</h3>
                <span class="targera-timpo-renta">Al mes</span>
                <ul class="targeta-lista-carateristicas">
                    <li class="pt-2">Impresora Konica minolta</li>
                    <li class="pt-2">300 copias-impresiones color</li>
                    <li class="pt-2">8,000 copias-impresione blanco y negro</li>
                    <li class="pt-2">Escanner gratis</li>
                    <li class="pt-2">Refacciones por averio gratis</li>
                    <li class="pt-2">consumibles gratis</li>
                    <li class="pt-2">2 mantenimiento al mes gratis</li>
                    <li class="pt-2">Acesoria remota gratis</li>
                </ul>
                <button class="button-tercera-targeta">OBTENER</button>

            </div>
        </div>

    </div>




    {{-- Sesion de comentarios --}}
    <div class="div-principal-comentarios">
        <h1 class="title-comentarios">Los más importante para nosotros</h1>
        {{-- Primer comentarios --}}
        <div class="tergeta-comentarios targetaComentario">
            <div class="div-img-parrafos">

                <img class="img-usuario-comentarios"
                    src="https://static1.abc.es/media/bienestar/2021/09/09/personas-magneticas-1-kdVD--620x349@abc.jpg"
                    alt="">
                <div class="div-parrafos-comentarios">
                    <h1 class="titulo-usuario-cometario">Sergio García</h1>
                    <span class="parrafo-comentario">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quo omnis doloribus eos.
                    </span>
                </div>

            </div>
        </div>

        {{-- Segundo comentario --}}
        <div class="tergeta-comentarios targetaComentario">
            <div class="div-img-parrafos">

                <img class="img-usuario-comentarios"
                    src="https://estudiantes.ucontinental.edu.pe/wp-content/uploads/2020/09/Madurez-emocional-7.jpg"
                    alt="">
                <div class="div-parrafos-comentarios">
                    <h1 class="titulo-usuario-cometario">Reyna Nava</h1>
                    <span class="parrafo-comentario">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quo omnis doloribus eos.
                    </span>
                </div>

            </div>
        </div>
        {{-- tercer comentario --}}
        <div class="tergeta-comentarios targetaComentario">
            <div class="div-img-parrafos">

                <img class="img-usuario-comentarios"
                    src=""
                    alt="">
                <div class="div-parrafos-comentarios">
                    <h1 class="titulo-usuario-cometario">Sofía Torres</h1>
                    <span class="parrafo-comentario">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quo omnis doloribus eos.
                    </span>
                </div>

            </div>
        </div>
        {{-- cuarto comentario --}}
        <div class="tergeta-comentarios targetaComentario">
            <div class="div-img-parrafos">

                <img class="img-usuario-comentarios"
                    src="https://cdn.pixabay.com/photo/2018/05/01/16/19/young-man-3366016_960_720.jpg" alt="">
                <div class="div-parrafos-comentarios">
                    <h1 class="titulo-usuario-cometario">Carlos Sánchez</h1>
                    <span class="parrafo-comentario">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quo omnis doloribus eos.
                    </span>
                </div>

            </div>
        </div>
    </div>
@endsection
