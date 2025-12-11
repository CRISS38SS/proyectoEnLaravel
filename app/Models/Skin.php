<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skin extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion', 
        'rareza',
        'temporada',
        'fecha_lanzamiento',
        'imagen',
        'tipo'
    ];
    
    protected $casts = [
        'fecha_lanzamiento' => 'date',
    ];
}
