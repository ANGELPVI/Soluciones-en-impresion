@extends('welcome')

@section('sesion')
    <div class="divpadreRegistro">
        <form action="registro" method="post" class="formRegistro">
            <div class="grid grid-cols-1 justify-items-center col-span-4 text-center">
                <img src="{{asset('img/logo-bien.png')}}" alt="" width="160px" height="160px">
                <h2 class="tituloFormularioRegistro">Soluciones En Impresión</h2>
            </div>
            @csrf
            <input class="inputsRegistro" type="text" name="nombre" placeholder="Nombre(s)">
            <input class="inputsRegistro" type="text" name="apellidos" placeholder="Apellidos">
            <input class="inputsRegistro" type="email" name="email" placeholder="Email">
            <input class="inputsRegistro" type="password" name="password" placeholder="Contraseña">
            <input class="inputsRegistro" type="text" name="telefono" placeholder="Teléfono">
            <select class="inputsRegistro" name="estados" id="estados">
                <option>Selecciona un Estado</option>
            </select>
            <select class="inputsRegistro" name="municipios" id="municipios">
                <option>Seleccione un municipio</option>
            </select>
            <input class="inputsRegistro" type="text" name="cp" placeholder="Codigo Postal">
            <input class="inputsRegistro" type="text" name="colonia" placeholder="Colonia">
            <input class="inputsRegistro" type="text" name="calle" placeholder="Calle">

            
            <button class="col-span-4 mt-4 bg-green-500 w-full h-10 rounded-2xl font-descrip" type="submit">Registrarme</button>
        </form>
    </div>
@endsection