<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Tipo_equipo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            EquipoSeeder::class,    // esto es obligatorio siempre
            Tipo_equipoSeeder::class,
            ClienteSeeder::class,
            CompraSeeder::class

           ]);
    }
}
