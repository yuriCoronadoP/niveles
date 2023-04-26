<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // guardar primer registro
        DB::table('personas')->insert([
            // 'nombre' => Str::random(10),
            // 'apellido_paterno' => Str::random(10),
            // 'apellido_materno' => Str::random(10),
            'nombre' => 'Diego',
            'apellido_paterno' => 'Juárez',
            'apellido_materno' => 'Hernández',
            'edad' => 31,
            'id_referido' => null,
            'nivel' => 1
        ]);

        // guardar primer registro
        DB::table('personas')->insert([
            'nombre' => 'Yuriria',
            'apellido_paterno' => 'Coronado',
            'apellido_materno' => 'Pérez',
            'edad' => 36,
            'id_referido' => 1,
            'nivel' => 2
        ]);
        
        // guardar primer registro
        DB::table('personas')->insert([
            'nombre' => 'Paola',
            'apellido_paterno' => 'Coronado',
            'apellido_materno' => 'Lopez',
            'edad' => 42,
            'id_referido' => 2,
            'nivel' => 3
        ]);
    }
}
