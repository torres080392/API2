<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    use HasFactory;
    protected $fillable = [   // campos  a maniular
        'marca',
        'persona_id',
        'referencia',
        'precio'
    ];
}
