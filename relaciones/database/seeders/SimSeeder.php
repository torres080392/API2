<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sim;

class SimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Sim::create([
            'id'=>1,
            'equipo_id'=> 1,
            'empresa'=>'Claro',
            'serial'=>'4585421'
        ]);
        Sim::create([
            'id'=>2,
            'equipo_id'=> 2,
            'empresa'=>'Movistar',
            'serial'=>'458548'
        ]);
        Sim::create([
            'id'=>3,
            'equipo_id'=> 3,
            'empresa'=>'Tigo',
            'serial'=>'HFKFK'
        ]);
        Sim::create([
            'id'=>4,
            'equipo_id'=> 3,
            'empresa'=>'Woom',
            'serial'=>'HFKFK12454'
        ]);
    }
}
