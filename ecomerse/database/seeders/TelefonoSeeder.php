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
      Telefono::create( [
        'id'=> 1,
        'user_id' => 2 ,
        'marca'=>'APPLE',
        'modelo'=>'Iphone 15 pro max'


      ]);
      Telefono::create( [
        'id'=> 2,
        'user_id' => 1 ,
        'marca'=>'APPLE',
        'modelo'=>'Iphone 15 pro max'


      ]);
      Telefono::create( [
        'id'=> 3,
        'user_id' => 3 ,
        'marca'=>'APPLE',
        'modelo'=>'Iphone 15 pro max'


      ]);
    
    }
}
