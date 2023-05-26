@extends('welcome')

@section('sesion')
<div class="grid grid-cols-6 p-4 m-auto mt-10 justify-items-center w-5/6 gap-x-3">
    @foreach ($consumibles as $item)

        <div class="w-full mt-5 h-auto bg-white rounded-lg targetaVentaimpresora">
            <img class="rounded-lg imgImpresoras w-full h-3/5 p-3" src="{{$item->rutaImg}}">

            <div class="grid grid-cols-1 justify-items-center mt-2 gap-y-2 ">
                <h2 class=" font-titulo text-2xl">${{$item->presio}}</h2>
                <h3 class="font-titulo text-xl">{{$item->modelo}} {{$item->marca}}</h3>
                
            </div>

            <div class="text-justify font-descrip p-2">
                <p>{{$item->descripcion}}</p>
            </div>

        </div>

    @endforeach
</div>
@endsection