<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_equipo extends Model
{
    use HasFactory;

    protected $fillable = [   // campos  a maniular
        'equipo_id',
        'tipo'
    ];

    public function user(){

        return $this->belongsTo( Equipo::class);  //pertenece a User segun la relacion
    }
}
