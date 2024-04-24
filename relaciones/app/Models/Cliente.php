<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Compra;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use App\Models\Tipo_equipo;
use Illuminate\Support\Facades\Hash;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'documento',
        'telefono'

    ];

    public function compras(): HasMany  //relacion de uno  a muchos 
    {
        return $this->hasMany(Compra::class);
    }

    public function equipo():HasMany
    {

        return $this->hasMany(Equipo::class); //el equipo tiene un tipo de equipo
    }

     //public function equipoSim():HasManyThrough//relacion temporal de la sim 
    //{
   //return $this->hasManyThrough(Sim::class,Equipo::class);//traemos la relacion de ambos 

    public function equipoSim():HasOneThrough//relacion temporal de la sim 
    {
    return $this->hasOneThrough(Sim::class,Equipo::class);//traemos la relacion de ambos 

    }

    public function tipoEquipo():HasOneThrough//relacion temporal de la sim 
    {
    return $this->hasOneThrough(Tipo_equipo::class,Equipo::class);//traemos la relacion de ambos 

    }

  


}
