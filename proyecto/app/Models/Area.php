<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable = [          //Campos que voy a poder modificar
    'tipo_area'
    ];

    protected $guarded=[            //Campos que voy a proteger de ser modificados


    ];

};
