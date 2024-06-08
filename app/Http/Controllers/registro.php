<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class registro extends Controller{

    // Funcion que registra a los usuario 
    public function store(Request $request){     
        // Validación de los datos del formulario
        $this->validate($request,[
            'nombre' => 'required|string|min:3|max:50',
            'apellidos' => 'required|string|min:3|max:50',
            'email' => 'required|email',
            'password' => 'required|string|min:8',
            'telefono' => ['required','regex:/^\d{10}$/'], ['telefono.required' => 'El campo teléfono es obligatorio.','telefono.regex' => 'El formato del teléfono es inválido.'],
            'estado' => 'required|string|max:100',
            'ciudad' => 'required|string|max:100',
            'cp' => 'required|int|min:5|max:5',
            'colonia' => 'required|string|min:3|max:100',
            'calle' => 'required|string|min:3|max:100',

        ]);


        $user = User::create([
            'nombre'=>$request->nombre,
            'apellidos'=>$request->apellidos,
            'email'=>$request->email,
            'password'=>$request->password,
            'telefono'=>$request->telefono,
            'estado'=>$request->estado,
            'ciudad'=>$request->ciudad,
            'cp'=>$request->cp,
            'colonia'=>$request->colonia,
            'calle'=>$request->calle
        ]); 
        
        return back()->withErrors(['error'=>'¡Ocurrio un error!']);

        // try {
        //     // Validación de los datos del formulario
        // $this->validate($request,[
        //     'nombre' => 'required|string|min:3|max:255',
        //     'apellidos' => 'required|string|min:3|max:255',
        //     'email' => 'required|email|unique:email',
        //     'password' => 'required|string|min:8',
        //     'telefono' => 'required|numeric|min:10|max:10|unique:telefono',
        //     'estado' => 'required|string|max:255',
        //     'ciudad' => 'required|string|max:255',
        //     'cp' => 'required|integer|min:5|max:5',
        //     'colonia' => 'required|string|min:3|max:255',
        //     'calle' => 'required|string|min:3|max:255',

        // ]);


        // $user = User::create([
        //     'nombre'=>$request->nombre,
        //     'apellidos'=>$request->apellidos,
        //     'email'=>$request->email,
        //     'password'=>$request->password,
        //     'telefono'=>$request->telefono,
        //     'estado'=>$request->estado,
        //     'ciudad'=>$request->ciudad,
        //     'cp'=>$request->cp,
        //     'colonia'=>$request->colonia,
        //     'calle'=>$request->calle
        // ]);

        // } catch (\Exception $e) {
        //        return back()->withErrors(['registroError'=>'¡Ocurrio un error!']);
        // }
        

        // if ($user) {
        //     auth()->login($user);
        //     return redirect()->to('/');
        // }else{
        //     return back()->with([
        //         'mensaje','¡Ha ocurrido un error al registrarte, rebisa tus datos.!'
        //     ]);
        // }

    }

    
}
