<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    //
    public function inicio(){
        return view('inicio');
    }

    public function impresoras(){
        return view('impresoras');
    }

    public function consumibles(){
        return view('consumibles');
    }
    public function soporte(){
        return view('soporte');
    }
}
