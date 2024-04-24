<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Equipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'marca',
        'cliente_id',
        'referencia',
        'servitag'
      
    ];



    public function equipo():HasOne
    {

        return $this->hasOne(Tipo_equipo::class); //el equipo tiene un tipo de equipo
    }
     
    public function sim():HasOne
    {

        return $this->hasOne(Sim::class);// el telefono tiene una sim 
    }
    
    public function cliente(){

        return $this->belongsTo( Cliente::class);  //pertenece a cliente segun la relacion  
    }

}
