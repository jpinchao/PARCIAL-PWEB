<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sale extends Model
{
    use HasFactory;
    protected $table = 'sales';
    protected $fillable = [
        'nombre_vendedor',
        'nombre_cliente',
        'nombre_producto',
        'precio',
        'fecha_compra',
    ];
}
