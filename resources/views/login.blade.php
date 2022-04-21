@extends('welcome')

@section('sesion')

    <form method="post" action="login">
        @csrf
        <input type="text" placeholder="email" name="email">
        <input type="password" placeholder="password" name="password">
        @error('message')
            <p>Error</p>
        @enderror
        <button type="submit">Login</button>

    </form>
@endsection