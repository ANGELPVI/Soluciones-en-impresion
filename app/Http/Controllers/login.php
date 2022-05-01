<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Factory as validationFactory;
use Illuminate\Http\Request;
use App\Models\user;
use PharIo\Manifest\Email;

class login extends Controller{
   
    // Funcion que realisa el inicio de sesion del usuario
    public function store(){
        // Validar los datos del login
        $datosValidados=$this->validate(request(),[
            'email'=>'required|email',
            'password'=>'required'
        ]);
   

        // if que valida si los datos son correctos o no
        if(auth()->attempt($datosValidados)==false){
            return back()->withErrors([
                'error'=>'¡Usuario o contraseña incorrecta!'
            ]);
        }

         return redirect()->to('/');
    }

    // Funcion que destruye la sesión
    public function destroy(){
        auth()->logout();
        return redirect()->to('/');
    }
    
}
