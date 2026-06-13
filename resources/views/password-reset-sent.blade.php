@extends('welcome')

@section('sesion')
      <div class="reset-success-wrapper">
        <div class="reset-success-card">
            <svg class="success-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                </path>
            </svg>

            <h2 class="success-title">Revisa tu correo</h2>

            <p class="success-message">
                Si hemos encontrado una cuenta asociada a ese correo electrónico, te hemos enviado las instrucciones para
                restablecer tu contraseña a: <strong>{{ session('email') }}</strong>
            </p>

            <p class="success-hint">
                ¿No lo recibiste? Revisa tu carpeta de spam.
            </p>

            <a href="{{ route('login') }}" class="btn-return-login">
                Volver al inicio de sesión
            </a>
        </div>
    </div>
@endsection
