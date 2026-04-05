@extends('welcome')

@section('sesion')
    <div class="cotenedorPadre">
        @foreach ($productosOficina as $item)
            <div class="contenedorImagen targetaVentaimpresora">
                <img class="imgImpresoras" src="{{ $item->img }}" alt="">
                <div class="contenedorPrecio">
                    <h3 class="textoPrecio">${{ number_format($item->precio, 2, '.', ',') }}</h3>
                    <h5 class="textoModelo"><span>{{ $item->marca }} - </span>{{ $item->nombre }}</h5>
                </div>

                <div class="textoDescripcion">
                    <p>{{ $item->descripcion }}</p>
                </div>

                <button class="btnAñadirCarrito">Añadir al Carrito</button>

            </div>
        @endforeach
    </div>
@endsection