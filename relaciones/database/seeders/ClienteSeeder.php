<?php

namespace Database\Seeders;

use GuzzleHttp\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creamos datos de pueba
        Cliente::create([
            'id' => 1,
            'nombre' => 'Alexander Lopez',
            'documento' => '1039287988',
            'telefono' => '319775950'
        ]);
        Cliente::create([
            'id' => 2,
            'nombre' => 'Yenny Gomez',
            'documento' => '1039287900',
            'telefono' => '319775951'
        ]);
        Cliente::create([
            'id' => 3,
            'nombre' => 'Carlos Torres ',
            'documento' => '1039287152',
            'telefono' => '319775959'
        ]);
        Cliente::create([
            'id' => 4,
            'nombre' => 'Miguel Torres ',
            'documento' => '1039287145',
            'telefono' => '319775959'
        ]);
        Cliente::create([
            'id' => 5,
            'nombre' => 'Jose Perez',
            'documento' => '1039287145',
            'telefono' => '319775959'
        ]);
    }
}
