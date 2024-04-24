<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Invitado;

class InvitadoSeeder extends Seeder
{

    public function run()
    {
        Invitado::factory()->count(50)->create();  //Metodo para crear 50 registros para pruebas en la bd
    }
}
