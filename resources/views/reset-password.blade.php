@extends('welcome')

@section('sesion')
<div class="flex justify-center items-center mt-20">
    <div class="w-1/3 bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-6">Restablecer Contraseña</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('password.update') }}" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Email</label>
                <input type="email" name="email" class="w-full p-2 border rounded" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Nueva Contraseña</label>
                <input type="password" name="password" class="w-full p-2 border rounded" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Confirmar Contraseña</label>
                <input type="password" name="password_confirmation" class="w-full p-2 border rounded" required>
            </div>

            <button type="submit" class="w-full bg-green-600 text-black p-2 rounded hover:bg-green-700">
                Restablecer Contraseña
            </button>
        </form>
    </div>
</div>
@endsection