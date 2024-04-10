@extends('welcome')

@section('sesion')    
    <div class="cotenedorPadre">
        @foreach ($impresoras as $item)

            <div class="contenedorImagen targetaVentaimpresora">
                <img class="imgImpresoras" src="{{$item->img}}" 
                alt="" width="400px" height="400px">
                <div class="contenedorPrecio">
                    <h3 class="textoPrecio">${{$item->precio}}</h3>
                    <h5 class="textoModelo"><span>{{$item->marca}} </span>{{$item->modelo}}</h5>
                </div>

                <div class="textoDescripcion">
                    <p>{{$item->Descripcion}}</p>
                </div>
                   
                
            </div>
    
        @endforeach
    </div>
@endsection