@extends('welcome')

@section('sesion')
    <form action="registro" method="post">
        @csrf
        <input type="text" name="nombre" placeholder="nombre">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Contraseña">
        <input type="text" name="telefono" placeholder="Teléfono">
        <input type="text" name="estado" placeholder="Estado">
        <input type="text" name="ciudad" placeholder="Ciudad">
        <input type="text" name="cp" placeholder="Codigo Postal">
        <button type="submit">Send</button>
    </form>
@endsection