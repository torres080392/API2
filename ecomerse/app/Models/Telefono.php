<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    use HasFactory;
    protected $fillable = [   // campos  a maniular
        'user_id',
        'marca',
        'modelo'
    
    ];

    public function user(){

        return $this->belongsTo( User::class);  //pertenece a User segun la relacion
    }
}
