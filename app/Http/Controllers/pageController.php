<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class pageController extends Controller
{
    //
    public function inicio(){
        return view('inicio');
    }

    public function impresoras(){
        $impresoras= App\Models\Impresora::all();
        return view('impresoras',compact('impresoras'));
    }


    public function consumibles(){
        $consumibles=App\Models\Consumibles::all();
        return view('consumibles',compact('consumibles'));
    }
    public function oficina(){
        $productosOficina = App\Models\ProductosOficina::all();
        return view('oficina',compact('productosOficina'));
    }

    public function login(){
        return view('login');
    }
    public function registro(){
        return view('registro');
    }

    
}
