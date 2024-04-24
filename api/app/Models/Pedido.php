<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory; 
    protected $fillable = [   // campos  permitidos de enviar
        'fecha',
        'cliente',
        'cantidad',
        'detalle',
        'valor',
        'id'
       


    ];

    protected $hidden= [
        'created_at',
    'updated_at'

    ];
}
