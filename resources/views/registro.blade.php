@extends('welcome')

@section('sesion')
    <div class="divpadreRegistro">
        <form action="registro" method="post" class="formRegistro">
            <div class="grid grid-cols-1 justify-items-center col-span-4 text-center">
                <img src="{{ asset('img/logo-bien.png') }}" alt="" width="160px" height="160px">
                <h2 class="tituloFormularioRegistro">Soluciones En Impresión</h2>
            </div>
            @csrf
            <div class="divSubPareInput">
                <input class="inputsRegistro" type="text" name="nombre" placeholder="Nombre(s)"
                    value="{{ old('nombre') }}">
                <p>El compo nombre esta vacio</p>
            </div>

            <div class="divSubPareInput">
                <input class="inputsRegistro" type="text" name="apellidos" placeholder="Apellidos"
                    value="{{ old('apellidos') }}">
            </div>

            <div class="divSubPareInput">
                <input class="inputsRegistro" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
            </div>

            <div class="divSubPareInput">
                <input class="inputsRegistro" type="password" name="password" placeholder="Contraseña"
                    value="{{ old('password') }}">
            </div>

            <div class="divSubPareInput">
                <input class="inputsRegistro" type="text" name="telefono" placeholder="Teléfono"
                    value="{{ old('telefono') }}">
            </div>

            <div class="divSubPareInput">
                <select class="inputsRegistro" name="estado" id="estados" value="{{ old('estado') }}">
                    <option>Selecciona un Estado</option>
                </select>
            </div>

            <div class="divSubPareInput">
                <select class="inputsRegistro" name="ciudad" id="municipios" value="{{ old('ciudad') }}">
                    <option>Seleccione un municipio</option>
                </select>
            </div>

            <div class="divSubPareInput">
                <input class="inputsRegistro" type="text" name="cp" placeholder="Codigo Postal"
                    value="{{ old('cp') }}">
            </div>

            <div class="divSubpareInput">
                <input class="inputsRegistro" type="text" name="colonia" placeholder="Colonia"
                    value="{{ old('colonia') }}">
            </div>

            <div class="divSubPareInput">
                <input class="inputsRegistro" type="text" name="calle" placeholder="Calle"
                    value="{{ old('calle') }}">
            </div>


            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            {{-- @error('registroError')
                <div id="usuarioError" class="textoError">
                    <p>{{ $message }}</p>
                </div>
            @enderror  --}}


            <button class="col-span-4 mt-4 bg-green-500 w-full h-10 rounded-2xl font-descrip"
                type="submit">Registrarme</button>
        </form>
    </div>
@endsection
