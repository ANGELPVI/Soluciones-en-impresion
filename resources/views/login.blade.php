@extends('welcome')

@section('sesion')

    <div class="divPrincipal">

    <form name="login" method="post" action="login" class="fomularioLogin">
        <img src="{{asset('img/logo-bien.png')}}" alt="" width="160px" height="160px">
        <h2 class="tituloFormulario">Soluciones En Impresión</h2>
        @csrf
        <input  class="inputs" type="text" placeholder="Email" name="email" autofocus>  
        <input class="inputs" type="password" placeholder="Contraseña" name="password">
        <div id="error" class="hidden textoError"><p>Los formatos del los campos son incorrectos</p></div>
                 
        @error('error')
            <div id="usuarioError" class="textoError"><p>{{$message}}</p></div>
        @enderror

        <div class="registroPassword">
            <a href="{{route('registro')}}" class="textosRegistroPasw">No tengo una cuenta</a>
            <a href="{{route('registro')}}" class="textosRegistroPasw">Olvide mi contraseña</a>
        </div>
        <button id="bottonLogion" class="buttonLogin" type="submit" disabled>Ingresar</button>
    </form>
    
    </div>
@endsection