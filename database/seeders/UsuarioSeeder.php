<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'usuarios' )->insert([
            [
                'nombre' => 'Carlos',
                'apellido' => 'Alarcon',
                'email' => 'carlosalarcon@gmail.com',
                'usuario' => 'calarcon'
            ],
            [
                'nombre' => 'Andrea',
                'apellido' => 'Miso',
                'email' => 'andy_miso@outlook.com',
                'usuario' => 'andymiso'
            ],
            [
                'nombre' => 'Stefany',
                'apellido' => 'Pipolo',
                'email' => 'pipolo.stefany@gmail.com',
                'usuario' => 'stefpipolo'
            ],
            [
                'nombre' => 'Mariano',
                'apellido' => 'Holzmann',
                'email' => 'marianoh@yahoo.com.ar',
                'usuario' => 'marianoh'
            ]
        ]);
    }
}
