@extends('layouts.app')

@section('sesion')
       <div class="flex items-center justify-center min-h-[50vh] px-4">
        <div class="auth-card">
            <h2 class="auth-title">Recuperar Contraseña</h2>
            @if ($errors->any())
                <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('password.email') }}" method="POST">
                @csrf
                <div>
                    <label for="email" class="form-label">Email</label>
                    <div class="relative">
                        <input type="email" name="email" placeholder="correo@ejemplo.com" class="form-input" required>
                    </div>
                </div>

                <button type="submit" class="btn-primary">
                    <span>Enviar link de recuperación</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                </button>
            </form>

            <a href="/login" class="auth-link">
                ¿Ya recuerdas tu contraseña? <strong>Iniciar Sesión</strong>
            </a>
        </div>
    </div>
@endsection
