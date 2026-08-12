@extends('layouts.app')

@section('sesion')
    <div class="cotenedorPadre">
        @foreach ($consumibles as $item)
            <a href="{{ route('consumibles.show', $item->id) }}" class="block transform transition duration-300 hover:-translate-y-2 hover:shadow-2xl focus:outline-none focus:ring-2 focus:ring-blue-500">
                <div class="contenedorImagen targetaVentaimpresora">
                    <img class="imgImpresoras" src="{{ $item->img }}" alt="{{ $item->marca }} {{ $item->modelo }}" width="400px" height="400px">

                    <div class="contenedorPrecio">
                        <h2 class="textoPrecio">${{ number_format($item->precio, 2, '.', ',') }}</h2>
                        <h3 class="textoModelo">{{ $item->modelo }} {{ $item->marca }}</h3>
                    </div>

                    <div class="textoDescripcion">
                        <p>{{ $item->descripcion }}</p>
                    </div>

                    <span class="inline-block text-center w-11/12 m-3 bg-blue-600 text-white font-bold py-2 px-4 rounded mt-4 mb-5 hover:bg-blue-700 transition duration-300">Ver producto</span>
                </div>
            </a>
        @endforeach
    </div>
@endsection
