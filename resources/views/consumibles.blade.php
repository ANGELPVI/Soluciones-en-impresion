@extends('welcome')

@section('sesion')
<div class="cotenedorPadre">
    @foreach ($consumibles as $item)

        <div class="contenedorImagen targetaVentaimpresora">
            <img class="imgImpresoras" src="{{$item->rutaImg}}" alt="" width="400px" height="400px">

            <div class="contenedorPrecio">
                <h2 class="textoPrecio">${{$item->presio}}</h2>
                <h3 class="textoModelo">{{$item->modelo}} {{$item->marca}}</h3>
                
            </div>

            <div class="textoDescripcion">
                <p>{{$item->descripcion}} Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias, nesciunt. 
                    Placeat assumenda tenetur eius! Quo, qui. 
                    Obcaecati illo, officia aliquid temporibus porro, officiis vero animi nisi iusto possimus libero et.</p>
            </div>

        </div>

    @endforeach
</div>
@endsection