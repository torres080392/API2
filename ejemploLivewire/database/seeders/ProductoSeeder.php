<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

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
          //
          Producto::create([
            'id' => 1,
            'nombre' => 'Arrroz * 500gr',
            'tipo' => 'grano',
            'cantidad' => 2,
            'precio' => 2000,

        ]);
        Producto::create([
            'id' => 2,
            'nombre' => 'Aceite * 100ml',
            'tipo' => 'liquido',
            'cantidad' => 3,
            'precio' => 10000,
        ]);
        Producto::create([
            'id' => 3,
            'nombre' => 'Frijol',
            'tipo' => 'grano',
            'cantidad' => 5,
            'precio' => 6000,

        ]);
    }
}
