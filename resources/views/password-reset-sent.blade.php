@extends('welcome')

@section('sesion')
    <div class="flex items-center justify-center min-h-[50vh] px-4">
        <div class="auth-card">
            <h2 class="auth-title">Correo enviado</h2>

            <div class="bg-green-100 text-green-800 p-5 rounded mb-6">
                <p>El enlace para restablecer tu contraseña se ha enviado correctamente a tu correo.</p>
                <p class="mt-2 text-sm text-gray-600">Revisa tu bandeja de entrada y tu carpeta de spam.</p>
            </div>

            <a href="{{ route('login') }}" class="btn-primary inline-flex items-center justify-center">
                Volver a iniciar sesión
            </a>
        </div>
    </div>
@endsection
