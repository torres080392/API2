<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sim extends Model
{
    use HasFactory;

    protected $fillable = [
        'equipo_id',
        'empresa',
        'serial'

    ];

    public function equipo()
    { // perteneces a un equipo
        return $this->belongsTo(Equipo::class);
    }
}
