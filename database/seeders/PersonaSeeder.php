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
            'nombre' => Str::random(10),
            'apellido_paterno' => Str::random(10),
            'apellido_materno' => Str::random(10),
            'edad' => rand(1,99),
            'referido' => null
        ]);

        // guardar primer registro
        DB::table('personas')->insert([
            'nombre' => Str::random(10),
            'apellido_paterno' => Str::random(10),
            'apellido_materno' => Str::random(10),
            'edad' => rand(1,99),
            'referido' => 1
        ]);
        
        // guardar primer registro
        DB::table('personas')->insert([
            'nombre' => Str::random(10),
            'apellido_paterno' => Str::random(10),
            'apellido_materno' => Str::random(10),
            'edad' => rand(1,99),
            'referido' => 2
        ]);
    }
}
