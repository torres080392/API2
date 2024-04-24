<?php

namespace Database\Seeders;

use App\Models\Tipo_equipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Tipo_equipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Tipo_equipo::create([

            'id' => 1,
            'equipo_id' => 1,
            'tipo' => 'Laptop'
        ]);
        
        Tipo_equipo::create([

            'id' => 2,
            'equipo_id' => 1,
            'tipo' => 'Deskop'
        ]);
        Tipo_equipo::create([

            'id' => 3,
            'equipo_id' => 3,
            'tipo' => 'Impresora'
        ]);
        Tipo_equipo::create([

            'id' => 4,
            'equipo_id' => 3,
            'tipo' => 'Escaner'
        ]);
    }
}
