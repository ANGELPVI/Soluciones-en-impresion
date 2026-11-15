<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function edit(Request $request)
    {
        return view('profile.edit', ['user' => $request->user()]);
    }

    public function update(Request $request)
    {
        $user = $request->user();

        $validated = $request->validate([
            'nombre' => ['required', 'string', 'min:3', 'max:100'],
            'apellidos' => ['required', 'string', 'min:3', 'max:100'],
            'email' => ['required', 'email', 'max:150', Rule::unique('users', 'email')->ignore($user->id)],
            'telefono' => ['required', 'regex:/^\d{10}$/', Rule::unique('users', 'telefono')->ignore($user->id)],
            'estado' => ['required', 'string', 'max:100'],
            'ciudad' => ['required', 'string', 'max:100'],
            'cp' => ['required', 'regex:/^\d{5}$/'],
            'colonia' => ['required', 'string', 'min:3', 'max:100'],
            'calle' => ['required', 'string', 'min:3', 'max:100'],
            'password_actual' => ['nullable', 'required_with:password'],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
        ], [
            'email.unique' => 'Este correo electrónico ya está registrado.',
            'telefono.unique' => 'Este teléfono ya está registrado.',
            'telefono.regex' => 'El teléfono debe tener exactamente 10 dígitos.',
            'cp.regex' => 'El código postal debe tener exactamente 5 dígitos.',
            'password.confirmed' => 'La confirmación de la nueva contraseña no coincide.',
            'password_actual.required_with' => 'Escribe tu contraseña actual para cambiarla.',
        ]);

        if (!empty($validated['password']) && !Hash::check($validated['password_actual'], $user->password)) {
            return back()
                ->withInput($request->except(['password', 'password_confirmation', 'password_actual']))
                ->withErrors(['password_actual' => 'La contraseña actual no es correcta.']);
        }

        try {
            $user->fill([
                'nombre' => $validated['nombre'],
                'apellidos' => $validated['apellidos'],
                'email' => $validated['email'],
                'telefono' => $validated['telefono'],
                'estado' => $validated['estado'],
                'ciudad' => $validated['ciudad'],
                'cp' => $validated['cp'],
                'colonia' => $validated['colonia'],
                'calle' => $validated['calle'],
            ]);

            if (!empty($validated['password'])) {
                // El mutador del modelo User se encarga de cifrarla.
                $user->password = $validated['password'];
            }

            $user->save();

            return redirect()->route('profile.edit')
                ->with('success', 'Tus datos se actualizaron correctamente.');
        } catch (\Throwable $exception) {
            report($exception);

            return back()
                ->withInput($request->except(['password', 'password_confirmation', 'password_actual']))
                ->withErrors(['profile' => 'No pudimos guardar los cambios. Inténtalo nuevamente.']);
        }
    }
}
