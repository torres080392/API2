<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Producto extends Model
{
    use HasFactory;
    protected $fillable = [
    'nombre',
'descripcion',
'precio','stock','imagen','categoria_id'
    ];

    public function categoria(){

        return $this->belongsTo(Categoria::class);
    }

    public function categorias(): HasOne //relacion de uno  a uno
    {
        return $this->hasOne(Categoria::class);
    }
}
