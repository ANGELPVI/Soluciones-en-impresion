<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordResetController extends Controller
{
    // Mostrar formulario de solicitud de reset
    public function showRequestForm(Request $request, $token = null)
    {
        return view('password-reset');
    }

    // Mostrar formulario para RESTABLECER contraseña (con token)
    public function showResetForm($token)
    {
        return view('reset-password', [
            'token' => $token,
            'email' => request('email'),
        ]);
    }

    // Enviar link de reset por email
    public function sendResetLink(Request $request)
    {
        $this->validate($request, ['email' => 'required|email']);

        $status = Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT
            ? redirect()->route('password.sent')->with('email', $request->email)
            : back()->withErrors(['email' => __($status)]);
    }

    // Mostrar mensaje de link enviado correctamente
    public function showSentMessage()
    {
        return view('password-reset-sent');
    }

    // Actualizar contraseña
    public function reset(Request $request)
    {
        $this->validate($request, [
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->password = $password;
                $user->save();

                // Opcional: Iniciar sesión automáticamente después de resetear
                Auth::login($user);

            }
        );
        
        if($status===Password::PASSWORD_RESET){
            return redirect('/')->with('status', __($status));
        }
        return back()->withErrors(['email' => __($status)]);

        // return $status === Password::PASSWORD_RESET
        //     ? redirect('/login')->with('status', __($status))
        //     : back()->withErrors(['email' => __($status)]);
    }
}