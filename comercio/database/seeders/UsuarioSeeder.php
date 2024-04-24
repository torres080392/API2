<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       DB ::table('usuarios')->insert([
            'nombre' => 'John Doe',
            'correo' => 'john@example.com',
            'contraseña' => Hash::make('password'),
            'direccion' => '123 Calle Principal, Ciudad',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
