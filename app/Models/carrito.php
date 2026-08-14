<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carrito extends Model
{
    use HasFactory;

    protected $table = 'carrito';

    protected $fillable = [
        'userId',
        'product_type',
        'product_id',
        'titulo',
        'imagen',
        'productos',
        'cantidad',
        'precio_unitario',
        'total',
    ];

    protected $casts = [
        'productos' => 'array',
        'precio_unitario' => 'decimal:2',
        'total' => 'decimal:2',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }
}
