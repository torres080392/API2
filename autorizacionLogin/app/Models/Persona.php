<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Persona extends Model
{
    use HasFactory;

    protected $fillable = [   // campos  a manipular
        'nombre',
        'apellido',
        'documento',
        'telefono',
        'edad'
      

    ];

    public function telefonos():HasMany //relacion de uno  a muchos 
    {
        return $this->hasMany(Telefono::class);
    }
}
