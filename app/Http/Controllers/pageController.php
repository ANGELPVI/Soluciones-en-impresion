<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class pageController extends Controller
{
    //
    public function inicio(){
        return view('pages.inicio');
    }

    public function impresoras(){
        $impresoras= App\Models\Impresora::all();
        return view('products.impresoras',compact('impresoras'));
    }


    public function consumibles(){
        $consumibles=App\Models\Consumibles::all();
        return view('products.consumibles',compact('consumibles'));
    }
    public function oficina(){
        $productosOficina = App\Models\ProductosOficina::all();
        return view('products.oficina',compact('productosOficina'));
    }

    public function login(){
        return view('auth.login');
    }
    public function registro(){
        return view('auth.registro');
    }

    
}
