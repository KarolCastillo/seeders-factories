<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder

{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       User::factory(13) -> create();

      /* DB::table('usuarios')->insert([

        'id'=> '01',
        'nombre' => 'JUAN CAAL',
        'email' => 'JUANCAAL@example.es',
        'ciudad' => 'capital',
        'telefono' => '47423195',

        ]);


       DB::table('usuarios')->insert([

        'id'=> '02',
        'nombre' => 'MARIA DE LA FAUNA',
        'email' => 'MARIFU@example.es',
        'ciudad' => 'puerto barrios',
        'telefono' => '09092018',

        ]);*/

    }
}
