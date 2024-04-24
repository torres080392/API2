<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invitado>
 */
class InvitadoFactory extends Factory
{

    public function definition()
    {
        return [
            //
           // 'id' => random_int(200,300),
            'nombre' => fake()->name(),
            'apellido' => fake()->lastName(),
            'edad' => fake()->numberBetween(15,91),
            'correo' => fake()->email(),
            'telefono' => random_int(1,3190000000),
            'cuidad' => fake()->city(),
            'departamento' => fake()->state(),
            'direccion' => fake()->address()


         
        ];
    }
}
