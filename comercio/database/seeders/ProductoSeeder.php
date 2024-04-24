<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('productos')->insert([
            'nombre' => 'Teléfono móvil',
            'descripcion' => 'Teléfono inteligente con pantalla táctil',
            'precio' => 499.99,
            'stock' => 50,
            'imagen' => 'phone.jpg',
            'categoria_id' => 1, // ID de la categoría correspondiente
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
