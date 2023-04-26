<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Persona;
use Database\Factories\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Persona>
 */
class PersonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $referido = random_int(0, 1) == 1 ? Persona::inRandomOrder()->first() : null;

        return [
            'nombre' => $this->faker->firstName(),
            // 'nombre' => fake()->name(),
            'apellido_paterno' => fake()->lastName(),
            'apellido_materno' => fake()->lastName(),
            // 'edad' => $this->faker->randomNumber(2),
            'edad' => fake()->numberBetween(18,99),
            // 'id_referido' => fake()->optional($weight = 0.8)->numberBetween(1,32)
            // 'id_referido' => random_int(0, 1) == 1 ? Persona::inRandomOrder()->first()->id : null,
            // 'id_referido' => $referido == null ? null : $referido->id,
            // 'nivel' => $referido == null ? 1 : $referido->nivel + 1,
            'id_referido' => null,
            'nivel' => null,
        ];
    }

    public function configure(): static{        
        return $this->afterCreating(function (Persona $persona){            
            $referido = random_int(0, 1) == 1 ? Persona::inRandomOrder()->first() : null;
            if($referido){
                $persona->update([
                    'id_referido' => $referido == null ? null : $referido->id,
                    'nivel' => $referido == null ? 1 : $referido->nivel + 1,
                ]);
            }            
        });
    }
}
