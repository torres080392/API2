<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Producto;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    public function productos(): HasMany  //relacion de uno  a muchos 
    {
        return $this->hasMany(Producto::class);
    }

    public function producto(){

        return $this->belongsTo(Producto::class); //de uno a uno
    }

}
