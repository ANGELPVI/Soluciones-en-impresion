@extends('welcome')

@section('sesion')
<div class="flex justify-center items-center mt-20">
    <div class="w-1/3 bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-6">Recuperar Contraseña</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('password.email') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Email</label>
                <input type="email" name="email" class="w-full p-2 border rounded" required>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded hover:bg-blue-700">
                Enviar link de recuperación
            </button>
        </form>
    </div>
</div>
@endsection