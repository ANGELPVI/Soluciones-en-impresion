@extends('welcome')

@section('sesion')

    <form method="post" action="login">
        @csrf
        <input type="text" placeholder="email" name="email">
        <input type="password" placeholder="password" name="password">
        @error('message')
            <p>{{$message}}</p>
        @enderror
        <button type="submit">Login</button>

    </form>

    <a href="{{route('registro')}}">No tengo una cuenta</a>
@endsection