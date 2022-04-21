<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class login extends Controller{
    // Funcion que realisa el inicio de sesion del usuario
    public function store(){
        if(auth()->attempt(request(['email','password']))==false){
            return back()->withErrors([
                'message'=>'usuario o contraseña'
            ]);
            

        }

        return redirect()->to('/');
    }

    // Funcion que destruye la funcion
    public function destroy(){
        auth()->logout();
        return redirect()->to('/');
    }
    
}
