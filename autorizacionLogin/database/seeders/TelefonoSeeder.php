<?php

namespace Database\Seeders;

use App\Models\Telefono;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TelefonoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Telefono::create([
            'id' => 1,
            'persona_id' => 1,
            'marca' => 'Aplle',
            'referencia' => 'Iphone 15',
            'precio' => 5000

        ]);
        Telefono::create([
            'id' => 2,
            'persona_id' => 1,
            'marca' => 'Samsung A32',
            'referencia' => 'Samsung a 31',
            'precio' => 800

        ]);
        Telefono::create([
            'id' => 3,
            'persona_id' => 2,
            'marca' => 'Xiami',
            'referencia' => 'Poco X3',
            'precio' => 600

        ]);

        Telefono::create([
            'id' => 4,
            'persona_id' => 2,
            'marca' => 'Xiami',
            'referencia' => 'F5',
            'precio' => 569000

        ]);
    }
}
