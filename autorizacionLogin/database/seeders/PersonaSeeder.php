<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Persona;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creamos unos ejemplos
        Persona::create([
            'id' => 1,
            'nombre' => 'Carlos Alonso',
            'apellido' => 'Torres Usuga',
            'documento' => '1039287988',
            'telefono' => '3197775950',
            'edad' => 32,
        ]);
        Persona::create([
            'id' => 2,
            'nombre' => 'Yenny ',
            'apellido' => 'Gomez Ruiz',
            'documento' => '1070968666',
            'telefono' => '9197651211',
            'edad' => 22,
        ]);
    }
}
