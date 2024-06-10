@extends('welcome')

@section('sesion')
<form action="soporte" method="get" class="">
    @csrf
    <input class="" type="text" name="equipo" placeholder="Ejm: konica c458"> 
</form>
{{$equipo}}
@endsection