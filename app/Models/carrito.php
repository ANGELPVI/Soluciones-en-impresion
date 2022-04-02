<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carrito extends Model
{
    use HasFactory;

    // Relasión tabla carrito
    public function user(){
        return $this->belongsTo('App\Modelo\User');
    }

    public function impresora(){
        return $this->belongsTo('App\Modelo\impresora');
    }
}
