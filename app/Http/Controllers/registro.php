<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class registro extends Controller{

    // Funcion que registra a los usuario 
    public function store(){

        $user = User::create(request(['nombre','apellidos','email','password','telefono','estado','ciudad','cp','colonia','calle']));

        auth()->login($user);
        return redirect()->to('/');

    }

    
}
