@extends('layouts.app')

@section('sesion')
   
    <div class="reset-container">
        <div class="reset-card">
            <h2 class="reset-title">Restablecer Contraseña</h2>

            <form method="POST" action="{{ route('password.update') }}" class="reset-form">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group">
                    <label Groundingfor="email" class="form-label">Email</label>
                    <div class="input-icon-wrapper">
                        <span class="input-icon">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </span>
                        <input id="email" type="email" name="email" value="{{ $email ?? old('email') }}" required
                            autofocus class="form-input" readonly>
                    </div>
                    @error('email')
                        <span class="form-error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="strength-container">
                    <div class="strength-bars">
                        <div id="bar-1" class="strength-bar"></div>
                        <div id="bar-2" class="strength-bar"></div>
                        <div id="bar-3" class="strength-bar"></div>
                    </div>
                    <div class="strength-labels">
                        <span id="strength-text" class="strength-text">Seguridad de contraseña</span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Nueva Contraseña</label>
                    <div class="input-icon-wrapper">
                        <span class="input-icon">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                </path>
                            </svg>
                        </span>
                        <input id="password" type="password" name="password" required class="form-input"
                            placeholder="••••••••">

                        <span id="toggle-password" class="toggle-password">
                            <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path fill-rule="evenodd"
                                    d="M1.323 11.447C2.639 10.083 6.052 7 12 7c5.948 0 9.361 3.083 10.677 4.447a1 1 0 010 1.306C21.361 13.917 17.948 17 12 17c-5.948 0-9.361-3.083-10.677-4.447a1 1 0 010-1.306zM16 12a4 4 0 11-8 0 4 4 0 018 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </span>
                    </div>
                    @error('password')
                        <span class="form-error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="form-label">Confirmar Contraseña</label>
                    <div class="input-icon-wrapper">
                        <span class="input-icon">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                </path>
                            </svg>
                        </span>
                        <input id="password-confirm" type="password" name="password_confirmation" required
                            class="form-input" placeholder="••••••••">

                        <span id="toggle-password-confirm" class="toggle-password">
                            <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path fill-rule="evenodd"
                                    d="M1.323 11.447C2.639 10.083 6.052 7 12 7c5.948 0 9.361 3.083 10.677 4.447a1 1 0 010 1.306C21.361 13.917 17.948 17 12 17c-5.948 0-9.361-3.083-10.677-4.447a1 1 0 010-1.306zM16 12a4 4 0 11-8 0 4 4 0 018 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </span>
                    </div>
                </div>

                <button type="submit" class="btn-submit-reset">
                    <span>Restablecer Contraseña</span>
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z">
                        </path>
                    </svg>
                </button>
            </form>
        </div>
    </div>
@endsection
