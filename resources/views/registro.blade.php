@extends('welcome')

@section('sesion')
    <div class="divpadreRegistro">
        <form name="registro" action="registro" method="post" class="formRegistro">
            <div class="grid grid-cols-1 justify-items-center col-span-4 text-center">
                <img src="{{ asset('img/logo-bien.png') }}" alt="" width="160px" height="160px">
                <h2 class="tituloFormularioRegistro">Soluciones En Impresión</h2>
            </div>
            @csrf
            <div class="divSubPadreInput">
                <input id="regNombre" class="inputsRegistro" type="text" name="nombre" placeholder="Nombre(s)"
                    value="{{ old('nombre') }}">
                <span id="mensajeNombre" class="textoError hidden">Campo vacío o caracteres no validos</span>
                <br><small id="sugerenciaNombre" class="hidden text-gray-400"><strong>Ejemplo: Jose Alberto</strong></small>
            </div>

            <div class="divSubPadreInput">
                <input id="regApellidos" class="inputsRegistro" type="text" name="apellidos" placeholder="Apellidos"
                    value="{{ old('apellidos') }}">
                <span id="mensajeApellidos" class="textoError hidden">Campo vacío o caracteres no validos</span>
                <br><small id="sugerenciaApellidos" class="hidden text-gray-400"><strong>Ejemplo: Hernández
                        Sánchez</strong></small>
            </div>

            <div class="divSubPadreInput">
                <input id="regEmail" class="inputsRegistro" type="email" name="email" placeholder="Email"
                    value="{{ old('email') }}">
                <span id="mensajeEmail" class="textoError hidden">Formato de email incorrecto</span>
                <br><small id="sugerenciaEmail" class="hidden text-gray-400"><strong>Ejemplo:
                        tu.email@gmail.com</strong></small>

                        <span id="mensajeEmailExistente" class="textoError hidden">El email ya existe. ingrese otro.</span>
            </div>

            <div class="divSubPadreInput">
                <input id="regPassword" class="inputsRegistro" type="password" name="password" placeholder="Contraseña"
                    value="{{ old('password') }}">
                <span id="mensajePass" class="textoError hidden">*La contraseña debe tener 8 o más caracteres</span>
            </div>

            <div class="divSubPadreInput">
                <input id="regTel" class="inputsRegistro" type="text" name="telefono" placeholder="Teléfono"
                    value="{{ old('telefono') }}">
                <span id="mensajeTel" class="textoError hidden">El número de teléfono deben ser 10 digitos</span>
                <br><small id="sugerenciaTel" class="hidden text-gray-400"><strong>Ejemplo: 7551021049</strong></small>
                <span id="mensajeTelExistente" class="textoError hidden">El número telefonico ya existe. Ingesea otro.</span>
            </div>

            <div class="divSubPadreInput">
                <select class="inputsRegistro" name="estado" id="estados" value="{{ old('estado') }}">
                    <option>Selecciona un Estado</option>
                </select>
                <span id="mensajeEstado" class="hidden textoError ">Elija un estado</span>
                <br><small id="sugerenciaEstado" class="hidden text-gray-400"><strong>Ejemplo: Guerrero</strong></small>
            </div>

            <div class="divSubPadreInput">
                <select class="inputsRegistro" name="ciudad" id="municipios" value="{{ old('ciudad') }}">
                    <option>Seleccione un municipio</option>
                </select>
                <span id="mensajeMunicipio" class="hidden textoError">Elija un Municipio</span>
                <br><small id="sugerenciaMunicipio" class="hidden text-gray-400"><strong>Ejemplo: Acapulco</strong></small>
            </div>

            <div class="divSubPadreInput">
                <input id="regCP" class="inputsRegistro" type="text" name="cp" placeholder="Codigo Postal"
                    value="{{ old('cp') }}">
                <span id="mensajeCP" class="textoError hidden">El código postal debe tener 5 digitos</span>
                <br><small id="sugerenciaCP" class="hidden text-gray-400"><strong>Ejemplo: 80410</strong></small>
            </div>

            <div class="divSubPadreInput">
                <input id="regColonia" class="inputsRegistro" type="text" name="colonia" placeholder="Colonia"
                    value="{{ old('colonia') }}">
                <span id="mensajeColonia" class="textoError hidden">Campo vacío o caracteres no validos</span>
                <br><small id="sugerenciaColonia" class="hidden text-gray-400"><strong>Ejemplo: Morelos</strong></small>
            </div>

            <div class="divSubPadreInput">
                <input id="regCalle" class="inputsRegistro" type="text" name="calle" placeholder="Calle"
                    value="{{ old('calle') }}">
                <span id="mensajeCalle" class="textoError hidden">Campo vacío o caracteres no validos</span>
                <br><small id="sugerenciaCalle" class="hidden text-gray-400"><strong>Ejemplo: Luis Donaldo
                        colocio</strong></small>
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


            <button id="buttonRegistro" class="buttonRegistro" type="submit" disabled>Registrarme</button>
        </form>
    </div>
@endsection
