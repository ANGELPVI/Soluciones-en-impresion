@extends('welcome')

@section('sesion')

 @foreach ($productosOficina as $item)
   {{ $item->nombre }} <br>
   {{ $item->descripcion }} <br>
    {{ $item->precio }} <br>
    {{ $item->stock }} <br>
    {{ $item->sku }} <br>
 @endforeach

@endsection