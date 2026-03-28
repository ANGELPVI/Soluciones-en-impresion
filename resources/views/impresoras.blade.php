@extends('welcome')

@section('sesion')
    <div class="cotenedorPadre">
        @foreach ($impresoras as $item)
            <div class="contenedorImagen targetaVentaimpresora">
                <img class="imgImpresoras" src="{{ $item->img }}" alt="">
                <div class="contenedorPrecio">
                    <h3 class="textoPrecio">${{ number_format($item->precio, 2, '.', ',') }}</h3>
                    <h5 class="textoModelo"><span>{{ $item->marca }} </span>{{ $item->modelo }}</h5>
                </div>

                <div class="textoDescripcion">
                    <p>{{ $item->Descripcion }}</p>
                </div>

                <button class="btnAñadirCarrito">Añadir al Carrito</button>

            </div>
        @endforeach
    </div>
@endsection
