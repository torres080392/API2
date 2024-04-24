<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{

    public function run(): void
    {
        //

        Producto::create([
            'nombre' => "Tomate",
            'descripcion' => "Tomate Chonto",
            'precion' => 2500

        ]);
        Producto::create([
            'nombre' => "Lechuga",
            'descripcion' => "Lechuga ",
            'precion' => 3200

        ]);
        Producto::create([
            'nombre' => "Papa",
            'descripcion' => "Papa sabanera2",
            'precion' => 3200

        ]);
    }
}
