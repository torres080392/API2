<?php

namespace Database\Seeders;

use App\Models\Compra;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Datos de prueba
        Compra::create([
            'id' => 1,
            'cliente_id' => 1,
            'valor' => 312200 ,
         
        ]);
        Compra::create([
            'id' => 2,
            'cliente_id' => 2,
            'valor' => 31220.0 ,
         
        ]);
        Compra::create([
            'id' => 3,
            'cliente_id' => 2,
            'valor' => 314200 ,
         
        ]);
        Compra::create([
            'id' => 4,
            'cliente_id' => 1,
            'valor' => 314.20 ,
         
        ]);
        Compra::create([
            'id' => 5,
            'cliente_id' => 3,
            'valor' => 314.200 ,
         
        ]);
    }
}
