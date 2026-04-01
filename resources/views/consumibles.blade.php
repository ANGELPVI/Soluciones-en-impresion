@extends('welcome')

@section('sesion')
<div class="cotenedorPadre">
    @foreach ($consumibles as $item)

        <div class="contenedorImagen targetaVentaimpresora">
            <img class="imgImpresoras" src="{{$item->img}}" alt="" width="400px" height="400px">

            <div class="contenedorPrecio">
                <h2 class="textoPrecio">${{$item->precio}}</h2>
                <h3 class="textoModelo">{{$item->modelo}} {{$item->marca}}</h3>
                
            </div>

            <div class="textoDescripcion">
                <p>{{$item->descripcion}}</p>
            </div>

            <button class="btnAñadirCarrito">Añadir al Carrito</button>

        </div>

    @endforeach
</div>
@endsection