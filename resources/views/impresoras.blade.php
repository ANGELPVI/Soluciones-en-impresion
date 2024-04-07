@extends('welcome')

@section('sesion')    
    <div class="cotenedorPadre">
        @foreach ($impresoras as $item)

            <div class="contenedorImagen targetaVentaimpresora">
                <img class="imgImpresoras" src="https://konicaminolta.ca/wps/wcm/connect/bca/6e544c3b-602b-4b05-8fb9-548f1f05e45a/308-large.png?MOD=AJPERES&CACHEID=ROOTWORKSPACE.Z18_0IDCHAS0L03T10A5N5R0IT3PU6-6e544c3b-602b-4b05-8fb9-548f1f05e45a-mwfUruy" 
                alt="" width="400px" height="400px">
                <div class="contenedorPrecio">
                    <h3 class="textoPrecio">${{$item->precio}}</h3>
                    <h5 class="textoModelo"><span>{{$item->marca}} </span>{{$item->modelo}}</h5>
                </div>

                <div class="textoDescripcion">
                    <p>{{$item->Descripcion}} Lorem ipsum dolor sit amet.</p>
                </div>
                   
                
            </div>
    
        @endforeach
    </div>
@endsection