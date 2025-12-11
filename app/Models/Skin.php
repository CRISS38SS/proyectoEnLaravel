<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skin extends Model
{
    // si un campo no esta aqui no se puede insertar en la base de datos
    protected $fillable = [
        'nombre',
        'descripcion',
        'rareza',
        'temporada',
        'fecha_lanzamiento',
        'imagen',
        'tipo'
    ];

    // sirve para convertir los datos
    protected $casts = [
        'fecha_lanzamiento' => 'date',
    ];
}
