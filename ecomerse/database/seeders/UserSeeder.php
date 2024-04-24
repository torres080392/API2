<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        User::create([

        'id'=>1,
        'name'=>'Carlos',
        'email'=>'Torres8@gmail.com',
        'password'=> Hash::make('12345')


        ]);
        User::create([

            'id'=>2,
            'name'=>'Carlos',
            'email'=>'Torres8@gmail.com',
            'password'=> Hash::make('12345')
    
    
            ]);
            User::create([

                'id'=>3,
                'name'=>'Carlos',
                'email'=>'Torres8@gmail.com',
                'password'=> Hash::make('12345')
        
        
                ]);
    }
}