<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class registro extends Controller{

    // Funcion que registra a los usuario 
    public function store(Request $request){     
        
         try {
          // Validación de los datos del formulario
          $this->validate($request,[
            'nombre' => 'required|string|min:3|max:50',
            'apellidos' => 'required|string|min:3|max:50',
            'email' => 'required|email',
            'password' => 'required|string|min:8',
            'telefono' => ['required','regex:/^\d{10}$/'], ['telefono.required' => 'El campo teléfono es obligatorio.','telefono.regex' => 'El formato del teléfono es inválido.'],
            'estado' => 'required|string|max:100',
            'ciudad' => 'required|string|max:100',
            'cp' => ['required','regex:/^\d{5}$/'], ['cp.required' => 'El campo CP es obligatorio.','cp.regex' => 'El formato del CP es incorrecto.'],
            'colonia' => 'required|string|min:3|max:100',
            'calle' => 'required|string|min:3|max:100',

        ]);
        
        //Insertar al nuevo usuario
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

        //If que valida si el usuario se registro correctamente. Lo pasa a inisiar sesión si no manda un error. 
        if ($user) {
            auth()->login($user);
            return redirect()->to('/');
        }else{
            return back()->with([
                'mensaje','¡Ha ocurrido un error al inisiar sesión, intente de nuevo!'
            ]);
        }
       
         } catch (\Exception $e) {
                return back()->withErrors(['registroError'=>'¡Ocurrio un error, llamar a servicio tecnico!']);
         }
        

    }

    public function revisarEmail(Request $request){       

        // Verificar si el correo ya está registrado
        $exists = User::where('email', $request->email)->exists();

        // Devolver la respuesta como JSON
        return response()->json(['datos' => $exists]);

    }

    public function duplicacionDeTel(Request $request){

        $existe= User::where('telefono', $request->telefono)->exists();

        return response()->json(['datos'=>$existe]);
    }

    
}
