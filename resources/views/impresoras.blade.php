@extends('welcome')

@section('sesion')
    <h1>soy la seccion de impresoras</h1>

    @foreach ($impresoras as $item)

    <h1>{{$item->id}}</h1>
    <h1>{{$item->modelo}}</h1>
    <h1>{{$item->marca}}</h1>
    <h1>{{$item->Descripcion}}</h1>
    <h1>${{$item->precio}}</h1>
    <h1>{{$item->stock}}</h1>
        
    @endforeach
@endsection