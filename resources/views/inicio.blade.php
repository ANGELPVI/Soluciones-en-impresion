@extends('welcome')

@section('sesion')
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
    {{-- Segunda taregta de plan de renta --}}
   <div class="targeta-renta">
     <div class="div-contenido-targeta">

       <h4 class="header-targeta-segundo-plan">PLAN OFICINA</h4>
       <small class="col-span-6 text-ms text-gray-500 mt-3">Se recomienda para oficinas de 5 a 10</small>
       <h3 class="titulo-precio-targeta">$1,800 MX</h3>
       <span class="targera-timpo-renta">Al mes</span>
       <div class="col-span-6 w-3/4 text-center bg-red-500 rounded-lg text-md text-white font-titulo">Más Vendido</div>
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

        <img class="img-usuario-comentarios" src="https://static1.abc.es/media/bienestar/2021/09/09/personas-magneticas-1-kdVD--620x349@abc.jpg" alt="">
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

        <img class="img-usuario-comentarios" src="https://estudiantes.ucontinental.edu.pe/wp-content/uploads/2020/09/Madurez-emocional-7.jpg" alt="">
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

        <img class="img-usuario-comentarios" src="https://www.hola.com/imagenes/estar-bien/20210706192625/personalidad-adultos-altas-capacidades-psicologia/0-974-472/altas-capacidades-m.jpg?filter=w500" alt="">
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

        <img class="img-usuario-comentarios" src="https://cdn.pixabay.com/photo/2018/05/01/16/19/young-man-3366016_960_720.jpg" alt="">
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