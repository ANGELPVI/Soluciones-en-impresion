@extends('welcome')

@section('sesion')    
    <div class="grid grid-cols-2 justify-items-center w-full h-auto">
        @foreach ($impresoras as $item)

            <div class="col-span-1 w-1/2 h-auto bg-white m-4 rounded-lg targetaVentaimpresora">
                <img class="mt-4 imgImpresoras" src="https://www.copyservice.es/WebRoot/StoreES3/Shops/ec9319/MediaGallery/Categories/PRODUCTOS/_0022_BIZHUB_0020_COLOR_0022_/BIZHUB_C458/C458_01.png" 
                alt="" width="400px" height="400px">
                <div class="text-center mt-6">
                    <h3 class="text-3xl font-titulo">${{$item->precio}}</h3>
                    <h5 class="text-2xl font-titulo m-2"><span>{{$item->marca}} </span>{{$item->modelo}}</h5>
                </div>

                <div class="text-justify font-descrip p-3">
                    <p>{{$item->Descripcion}} Lorem ipsum dolor sit amet.</p>
                </div>

                <div class="grid grid-cols-2 w-full">
                    <button class="m-4 col-span-1 w-auto h-8 bg-blue-400 rounded-lg font-descrip hover:bg-blue-300">Ficha Tecnica</button>
                    <button class="m-4 col-span-1 w-auto h-8 bg-green-500 rounded-lg font-descrip hover:bg-green-400">Agregar al carrito</button>
                </div>
            </div>
    
        @endforeach
    </div>
@endsection