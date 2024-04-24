<?php

namespace Database\Seeders;

use App\Models\Equipo;
use App\Models\Tipo_equipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Equipo::create([
            'id' => 1,
            'cliente_id'=> 1,
            'marca' => 'Dell',
            'referencia' => '5440',
            'servitag' => 'DRFTVF451'
        ]);
        Equipo::create([
            'id' => 2,
            'cliente_id'=> 2,
            'marca' => 'Dell',
            'referencia' => '5440',
            'servitag' => 'DRFTVF451'
        ]);
        Equipo::create([
            'id' => 3,
            'cliente_id'=> 1,
            'marca' => 'Dell',
            'referencia' => '5440',
            'servitag' => 'DRFTVF451'
        ]);
        Equipo::create([
            'id' => 4,
            'cliente_id'=> 3,
            'marca' => 'Dell',
            'referencia' => '5440',
            'servitag' => 'DRFTVF451'
        ]);
        Equipo::create([
            'id' => 5,
            'cliente_id'=> 2,
            'marca' => 'Dell',
            'referencia' => '5440',
            'servitag' => 'DRFTVF451'
        ]);
 

    }
}
