<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitado extends Model
{
    use HasFactory;
    protected $fillable = [   // campos  a maniular
        'nombre',
        'apellido',
        'edad',
        'correo',
        'telefono',
        'cuidad',
        'departamento',
        'direccion'


    ];
}
